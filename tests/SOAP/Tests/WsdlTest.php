<?php

namespace Kily\DM\SOAP\Tests;

use Kily\DM\SOAP\Wsdl;

class WsdlTest extends TestCase
{
    protected $wsdl = null;

    protected function setUp()
    {
        $this->wsdl = new Wsdl();
    }

    public function testGetWsdlUrl()
    {
        $w1 = new Wsdl();
        $w2 = new Wsdl('google.com', 'https', '/my.wsdl');
        $w3 = new Wsdl('google.com:8080', null, '');
        $this->assertEquals($w1->getWsdlUrl(), 'http://localhost/datamobile.wsdl');
        $this->assertEquals($w2->getWsdlUrl(), 'https://google.com/my.wsdl');
        $this->assertEquals($w3->getWsdlUrl(), 'http://google.com:8080/datamobile.wsdl');
    }

    /**
     * @expectedException Kily\DM\SOAP\Exception
     */
    public function testGetWsdlUrl_exception()
    {
        $w4 = new Wsdl('google.com', 'https', 'my.wsdl');
    }

    public function testGetServiceUrl()
    {
        $w1 = new Wsdl();
        $w2 = new Wsdl('google.com', 'https', '/my.wsdl', '/soap');
        $w3 = new Wsdl('google.com:8080', null, '');
        $this->assertEquals($w1->getServiceUrl(), 'http://localhost/service');
        $this->assertEquals($w2->getServiceUrl(), 'https://google.com/soap');
        $this->assertEquals($w3->getServiceUrl(), 'http://google.com:8080/service');
    }

    /**
     * @expectedException Kily\DM\SOAP\Exception
     */
    public function testGetServicelUrl_exception()
    {
        $w4 = new Wsdl('google.com', 'https', '/my.wsdl', 'ololo');
    }

    public function test__toString()
    {
        $xml = new \DOMDocument();
        $xml->loadXML($this->wsdl->__toString());
    }

    public function testClassMap()
    {
        $this->markTestSkipped('Not used anywhere');
    }
}
