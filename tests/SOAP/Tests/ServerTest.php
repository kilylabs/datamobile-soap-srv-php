<?php

namespace Kily\DM\SOAP\Tests;

use Kily\DM\SOAP\Server;
use Kily\DM\SOAP\Wsdl;
use Kily\DM\SOAP\Provider\Dummy;

class ServerTest extends TestCase
{
    protected function setUp()
    {
        $wsdl = new Wsdl();
        $wsdl_file = tempnam(sys_get_temp_dir(), 'wsdl_');
        register_shutdown_function(function () use ($wsdl_file) {
            if (file_exists($wsdl_file)) {
                unlink($wsdl_file);
            }
        });
        file_put_contents($wsdl_file, $wsdl->__toString());
        $this->server = new Server($wsdl_file, [], new Dummy());
    }

    public function testInit()
    {
    }

    /**
     * @runInSeparateProcess
     */
    public function testHandle($request = null)
    {
        $request = <<<EOT
<?xml version="1.0" encoding="UTF-8"?>
<env:Envelope xmlns:env="http://www.w3.org/2003/05/soap-envelope" xmlns:ns1="http://www.data-mobile.ru">
  <env:Body>
    <ns1:DMServerInfo/>
  </env:Body>
</env:Envelope>
EOT;
        $expected_response = <<<EOT
<?xml version="1.1" encoding="UTF-8"?>
<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope" xmlns:m="http://www.data-mobile.ru">
  <soap:Body>
    <m:DMServerInfoResponse>
      <m:return xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema - instance">Соединение с сервером установлено</m:return>
    </m:DMServerInfoResponse>
  </soap:Body>
</soap:Envelope>

EOT;
        ob_start();
        $this->server->handle($request);
        $actual_response = ob_get_clean();
        $this->assertEquals($expected_response, $actual_response);
    }
}
