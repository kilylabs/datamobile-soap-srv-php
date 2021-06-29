<?php

namespace Kily\DM\SOAP;

use Kily\DM\SOAP\Provider\AbstractProvider;
use Psr\Log\LoggerInterface;

class Server extends \SoapServer
{
    protected $logger;
    protected $provider;

    public function __construct($wsdl, $options, AbstractProvider $provider, LoggerInterface $logger = null)
    {
        if (!$options) {
            $options = [];
        }
        if (!$logger) {
            $logger = new \Wa72\SimpleLogger\FileLogger(dirname(dirname(dirname(__FILE__))).'/log/server.log');
        }

        $this->logger = $logger;
        $this->provider = $provider;

        $options['soap_version'] = SOAP_1_1; // it is important (see handle())
        //$options['classmap'] = array_merge(Wsdl::classMap(),isset($options['classmap']) ? $options['classmap'] : []);

        parent::__construct($wsdl, $options);

        $this->init();
    }

    public function init()
    {
        $this->setClass('\\Kily\\DM\\SOAP\\Handler', $this->provider, $this->logger);
    }

    public function handle($request = null)
    {
        ob_start();
        $result = parent::handle($request);
        $response = ob_get_clean();
        $response = str_replace(['<faultstring>','</faultstring'],['<faultstring><WSERRSTART>','</WSERRSTART></faultstring>'],$response);

        /* FIXME: we need to do some replacements to make response look like SOAP 1.2 response.
         * It is easier to modify v1.1 SoapServer request to make look like 1.2 rather that modify default 1.2 */
        /*
        $response = str_replace(
            [
                'version="1.0"',
                'xmlns:ns1=',
                '<ns1:',
                '</ns1:',
                '<env:',
                'xmlns:env="',
                '</env:',
                '<SOAP-ENV:',
                'xmlns:SOAP-ENV="',
                '</SOAP-ENV:',
            ],
            [
                'version="1.1"',
                'xmlns:m=',
                '<m:',
                '</m:',
                '<soap:',
                'xmlns:soap="',
                '</soap:',
                '<soap:',
                'xmlns:soap="',
                '</soap:',
            ],
        $response);
         */

        /* we need some NS replacements to complain DataMobile client implementation */
        /* FIXME: should use some more lightweight */
        /*
        $xml = \phpQuery::newDocumentXML($response);
        $xml['return']->attr('xmlns:xs', 'http://www.w3.org/2001/XMLSchema')->attr('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema - instance');

        $response = $xml->__toString();
         */

        $this->logger->debug('RESPONSE: '.$response);

        header('Content-Length: '.strlen($response));
        echo $response;

        return $result;
    }
}
