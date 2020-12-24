<?php

namespace Kily\DM\SOAP\Tests;

use Kily\DM\SOAP\Tools;

class ToolsTest extends TestCase
{
    protected $wsdl = null;

    public function testFormatXml()
    {
        $unformatted = <<<EOT
<?xml version="1.0" encoding="UTF-8"?><note><to>Tove</to><from>Jani</from><heading>Reminder</heading><body>Don't forget me this weekend!</body></note>
EOT;
        $formatted = <<<EOT
<?xml version="1.0" encoding="UTF-8"?>
<note>
  <to>Tove</to>
  <from>Jani</from>
  <heading>Reminder</heading>
  <body>Don't forget me this weekend!</body>
</note>

EOT;
        $this->assertEquals(Tools::formatXml($unformatted), $formatted);
    }
}
