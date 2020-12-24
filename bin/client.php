<?php

use Kily\DM\SOAP\Wsdl;

if (file_exists($a = __DIR__.'/../../../autoload.php')) {
        require_once $a;
} else {
        require_once __DIR__.'/../vendor/autoload.php';
}

$cmd = new Commando\Command();
$cmd->option()
    ->require()
    ->describedAs('SOAP Method');

$cmd->option('w')
    ->aka('wsdl')
    ->require()
    ->describedAs('WSDL file url');

// Define a boolean flag "-c" aka "--capitalize"
$cmd->option('d')
    ->aka('data')
    ->describedAs('JSON data to pass to method');

ini_set("soap.wsdl_cache_enabled", "0");

$client = new SoapClient(
    $cmd['wsdl'],
    array(
        'exceptions'=>true,
        'soap_version' => SOAP_1_2,
        'trace'=>1,
    )
);

$data = $cmd['data'];

if($data && ($data = json_decode($data,true))) { 
    var_dump($client->{$cmd[0]}($data));
} else {
    var_dump($client->{$cmd[0]}());
}
