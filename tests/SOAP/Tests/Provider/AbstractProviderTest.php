<?php

namespace Kily\DM\SOAP\Tests\Provider;

use Kily\DM\SOAP\Tests\TestCase;

class AbstractProviderTest extends TestCase
{
    public function testSOAP_DMServerInfo()
    {
        $stub = $this->getMockForAbstractClass('Kily\\DM\\SOAP\\Provider\\AbstractProvider');
        $stub->method('SOAP_DMServerInfo');

        $this->assertArrayHasKey('return', $stub->SOAP_DMServerInfo());
    }
}
