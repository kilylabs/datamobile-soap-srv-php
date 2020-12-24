<?php

use Kily\DM\SOAP\Server;
use Kily\DM\SOAP\Wsdl27 as Wsdl;
use Kily\DM\SOAP\Tools;
use Kily\DM\SOAP\Provider\Dummy as DummyProvider;

if (file_exists($a = __DIR__.'/../../../autoload.php')) {
        require_once $a;
} else {
        require_once __DIR__.'/../vendor/autoload.php';
}

if(php_sapi_name() == 'cli') {
    echo "Listening on http://0.0.0.0:8080\n";
    passthru('php -S 0.0.0.0:8080 '.__FILE__);
    exit;
}

$wsdl = new Wsdl($_SERVER['HTTP_HOST']);
$wsdl_file = tempnam(sys_get_temp_dir(),'wsdl_');
file_put_contents($wsdl_file,$wsdl->__toString());
if(!file_exists($wsdl_file) || !filesize($wsdl_file))
    throw new Exception('Unable to write wsdl');

if($_SERVER['REQUEST_URI'] == parse_url($wsdl->getWsdlUrl(),PHP_URL_PATH)) {
    header("Content-Type: text/xml; charset=utf-8");
    echo $wsdl->__toString();
    return;
}

if($_SERVER['REQUEST_URI'] != parse_url($wsdl->getServiceUrl(),PHP_URL_PATH))
    return false;

$request = file_get_contents('php://input',false);
$request = str_replace('&','&amp;',$request); // yes, DataMobile response may have non-encoded ampersands

$logger = new \Wa72\SimpleLogger\FileLogger(dirname(dirname(__FILE__)).'/log/server.log');
$logger->debug("REQUEST: ".Tools::formatXml($request));

$server = new Server($wsdl_file,[],new DummyProvider,$logger);

header("Content-Type: text/html; charset=utf-8");
header('Cache-Control: no-store, no-cache');
header('Expires: '.date('r'));

$server->handle($request);
