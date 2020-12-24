<?php

namespace Kily\DM\SOAP;

abstract class AbstractWsdl
{
    protected $host;
    protected $schema;
    protected $wsdlPath;
    protected $servicePath;

    public function __construct($host = null, $schema = null, $wsdlPath = null, $servicePath = null)
    {
        if (!$host && isset($_SERVER['HTTP_HOST'])) {
            $host = $_SERVER['HTTP_HOST'];
        }

        if ($servicePath) {
            if (strpos($servicePath, '/') !== 0) {
                throw new Exception("service path MUST starts with '/'");
            }
        }

        if ($wsdlPath) {
            if (strpos($wsdlPath, '/') !== 0) {
                throw new Exception("service path MUST starts with '/'");
            }
        }

        $this->host = $host ?: 'localhost';
        $this->schema = $schema ?: 'http';
        $this->wsdlPath = $wsdlPath ?: '/datamobile.wsdl';
        $this->servicePath = $servicePath ?: '/service';
    }

    public function getWsdlUrl()
    {
        return $this->schema.'://'.$this->host.$this->wsdlPath;
    }

    public function getServiceUrl()
    {
        return $this->schema.'://'.$this->host.$this->servicePath;
    }

    abstract public function __toString();
}
