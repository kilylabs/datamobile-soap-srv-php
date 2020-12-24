<?php

namespace Kily\DM\SOAP;

class Tools
{
    public static function formatXml($str)
    {
        if(!$str) return '';
        try {
            $dom = new \DOMDocument();
            $dom->preserveWhiteSpace = false;
            @$dom->loadXML($str); //suppress warnings as we use it for formatting only
            $dom->formatOutput = true;

            return $dom->saveXml();
        } catch (\DOMException $e) {
        }

        return $str;
    }
}
