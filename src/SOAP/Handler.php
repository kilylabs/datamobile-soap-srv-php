<?php

namespace Kily\DM\SOAP;

use Kily\DM\SOAP\Provider\AbstractProvider;
use Psr\Log\LoggerInterface;

class Handler
{
    protected $provider;
    protected $logger;

    public function __construct(AbstractProvider $provider, LoggerInterface $logger)
    {
        $this->provider = $provider;
        $this->logger = $logger;
    }

    public function __call($name, $args = null)
    {
        $s_name = 'SOAP_'.$name;
        if (!method_exists($this->provider, $s_name)) {
            throw new \SoapFault('Server', 'Such method does not exists: '.$name);
        }

        $args = $args ? (array) $args[0] : [];

        if ($name == 'WriteDoc') {
            /* handling here some "features" of lists DataMobile app send us */
            foreach (['DocRowsSelect', 'DocRowsInsert'] as $ltype) {
                $list = $args[$ltype];
                if (isset($list->DMDocRow)) {
                    $list = $list->DMDocRow;
                }
                if (is_object($list)) {
                    $list = array($list);
                }
                foreach ($list as $idx => $item) {
                    if (!(array) $item) {
                        unset($list[$idx]);
                    }
                }
                $args[$ltype] = $list;
            }
        }

        $this->logger->debug('calling '.get_class($this->provider).'->'.$s_name.' with arguments: '.print_r($args, true));
        $this->logger->debug('args in json: '.json_encode($args));

        return call_user_func_array(array($this->provider, $s_name), $args);
    }
}
