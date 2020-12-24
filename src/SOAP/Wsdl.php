<?php

namespace Kily\DM\SOAP;

class Wsdl extends AbstractWsdl
{
    protected $host;

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

    public function __toString()
    {
        ob_start();
        echo '<?xml version="1.0" encoding="UTF-8"?>';
        ?>
<definitions xmlns="http://schemas.xmlsoap.org/wsdl/"
		xmlns:soap12bind="http://schemas.xmlsoap.org/wsdl/soap12/"
		xmlns:soapbind="http://schemas.xmlsoap.org/wsdl/soap/"
		xmlns:tns="http://www.data-mobile.ru"
		xmlns:xsd="http://www.w3.org/2001/XMLSchema"
		xmlns:xsd1="http://www.data-mobile.ru"
		name="DataMobileExch"
		targetNamespace="http://www.data-mobile.ru">
	<types>
		<xs:schema xmlns:xs="http://www.w3.org/2001/XMLSchema"
				xmlns:xs1="http://www.data-mobile.ru"
				targetNamespace="http://www.data-mobile.ru"
				attributeFormDefault="unqualified"
				elementFormDefault="qualified">
			<xs:complexType name="DMArt">
				<xs:sequence>
					<xs:element name="DMArtName"
							type="xs:string"/>
					<xs:element name="DMArtID"
							type="xs:string"/>
					<xs:element name="DMArtAttr1"
							type="xs:string"/>
					<xs:element name="DMArtAttr2"
							type="xs:string"/>
					<xs:element name="DMArtPrice"
							type="xs:decimal"/>
					<xs:element name="DMBarcodeList"
							type="tns:DMBarcode"
							minOccurs="0"
							maxOccurs="unbounded"/>
					<xs:element name="DMisMark"
							type="xs:boolean"/>
					<xs:element name="DMArtAttr3"
							type="xs:string"/>
					<xs:element name="DMArtAttr4"
							type="xs:string"/>
					<xs:element name="DMArtAttr5"
							type="xs:string"/>
					<xs:element name="DMArtAttr6"
							type="xs:string"/>
					<xs:element name="DMArtAttr7"
							type="xs:string"/>
					<xs:element name="DMArtAttr8"
							type="xs:string"/>
					<xs:element name="DMArtAttr9"
							type="xs:string"/>
					<xs:element name="DMArtAttr10"
							type="xs:string"/>
					<xs:element name="DMUseSN"
							type="xs:boolean"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMArtList">
				<xs:sequence>
					<xs:element name="DMArt"
							type="tns:DMArt"
							minOccurs="0"
							maxOccurs="unbounded"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMArtQueryInfo">
				<xs:sequence>
					<xs:element name="DMArtQueryItem"
							type="tns:DMArtQueryItem"
							minOccurs="0"
							maxOccurs="unbounded"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMArtQueryInfoUPL">
				<xs:sequence>
					<xs:element name="DMArtQueryItemUPL"
							type="tns:DMArtQueryItemUPL"
							minOccurs="0"
							maxOccurs="unbounded"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMArtQueryItem">
				<xs:sequence>
					<xs:element name="DMArtName"
							type="xs:string"/>
					<xs:element name="DMArtID"
							type="xs:string"/>
					<xs:element name="DMArtPrice"
							type="xs:decimal"/>
					<xs:element name="DMArtAttr1"
							type="xs:string"/>
					<xs:element name="DMArtAttr2"
							type="xs:string"/>
					<xs:element name="DMMeasureName"
							type="xs:string"/>
					<xs:element name="DMMeasureK"
							type="xs:decimal"/>
					<xs:element name="DMTaskQnt"
							type="xs:decimal"/>
					<xs:element name="DMLimitQnt"
							type="xs:decimal"/>
					<xs:element name="DMArtAttr3"
							type="xs:string"/>
					<xs:element name="DMArtAttr4"
							type="xs:string"/>
					<xs:element name="DMArtAttr5"
							type="xs:string"/>
					<xs:element name="DMArtAttr6"
							type="xs:string"/>
					<xs:element name="DMArtAttr7"
							type="xs:string"/>
					<xs:element name="DMArtAttr8"
							type="xs:string"/>
					<xs:element name="DMArtAttr9"
							type="xs:string"/>
					<xs:element name="DMArtAttr10"
							type="xs:string"/>
					<xs:element name="DMUseSN"
							type="xs:boolean"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMArtQueryItemUPL">
				<xs:sequence>
					<xs:element name="DMArtName"
							type="xs:string"/>
					<xs:element name="DMArtID"
							type="xs:string"/>
					<xs:element name="DMArtPrice"
							type="xs:decimal"/>
					<xs:element name="DMArtAttr1"
							type="xs:string"/>
					<xs:element name="DMArtAttr2"
							type="xs:string"/>
					<xs:element name="DMMeasureName"
							type="xs:string"/>
					<xs:element name="DMMeasureK"
							type="xs:decimal"/>
					<xs:element name="DMTaskQnt"
							type="xs:decimal"/>
					<xs:element name="DMLimitQnt"
							type="xs:decimal"/>
					<xs:element name="DMArtAttr3"
							type="xs:string"/>
					<xs:element name="DMArtAttr4"
							type="xs:string"/>
					<xs:element name="DMArtAttr5"
							type="xs:string"/>
					<xs:element name="DMArtAttr6"
							type="xs:string"/>
					<xs:element name="DMArtAttr7"
							type="xs:string"/>
					<xs:element name="DMArtAttr8"
							type="xs:string"/>
					<xs:element name="DMArtAttr9"
							type="xs:string"/>
					<xs:element name="DMArtAttr10"
							type="xs:string"/>
					<xs:element name="DMBarcode"
							type="xs:string"/>
					<xs:element name="DMUseSN"
							type="xs:boolean"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMBarcode">
				<xs:sequence>
					<xs:element name="DMBarcode"
							type="xs:string"/>
					<xs:element name="DMMeasureName"
							type="xs:string"/>
					<xs:element name="DMMeasureK"
							type="xs:decimal"/>
					<xs:element name="DMisMark"
							type="xs:boolean"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMCell">
				<xs:sequence>
					<xs:element name="DMCellName"
							type="xs:string"/>
					<xs:element name="DMBarcode"
							type="xs:string"/>
					<xs:element name="DMTaskQNT"
							type="xs:decimal"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMCellList">
				<xs:sequence>
					<xs:element name="DMCell"
							type="tns:DMCell"
							minOccurs="0"
							maxOccurs="unbounded"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMClient">
				<xs:sequence>
					<xs:element name="DMName"
							type="xs:string"/>
					<xs:element name="DMClientID"
							type="xs:string"/>
					<xs:element name="DMBarcode"
							type="xs:string"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMClientList">
				<xs:sequence>
					<xs:element name="DMClient"
							type="tns:DMClient"
							minOccurs="0"
							maxOccurs="unbounded"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMDocHead">
				<xs:sequence>
					<xs:element name="DMDocOutID"
							type="xs:string"/>
					<xs:element name="DMNumber"
							type="xs:string"/>
					<xs:element name="DMDate"
							type="xs:dateTime"/>
					<xs:element name="DMComment"
							type="xs:string"/>
					<xs:element name="DMBarcode"
							type="xs:string"/>
					<xs:element name="DMTemplate"
							type="tns:DMTemplate"
							nillable="true"/>
					<xs:element name="DMisMark"
							type="xs:boolean"/>
					<xs:element name="DMisLoaded"
							type="xs:boolean"/>
					<xs:element name="DMClient"
							type="tns:DMClient"/>
					<xs:element name="DMClientSelectDate"
							type="xs:dateTime"
							nillable="true"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMDocList">
				<xs:sequence>
					<xs:element name="DMDocHead"
							type="tns:DMDocHead"
							minOccurs="0"
							maxOccurs="unbounded"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMDocRec">
				<xs:sequence>
					<xs:element name="DMBarcode"
							type="xs:string"/>
					<xs:element name="DMSN"
							type="xs:string"/>
					<xs:element name="DMCell"
							type="xs:string"/>
					<xs:element name="DMArtID"
							type="xs:string"/>
					<xs:element name="DMPackID"
							type="xs:string"/>
					<xs:element name="DMQuant"
							type="xs:decimal"/>
					<xs:element name="DMArtName"
							type="xs:string"/>
					<xs:element name="DMLimit"
							type="xs:decimal"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMDocRecOnlineDoc">
				<xs:sequence>
					<xs:element name="DMBarcode"
							type="xs:string"/>
					<xs:element name="DMSN"
							type="xs:string"/>
					<xs:element name="DMCell"
							type="xs:string"/>
					<xs:element name="DMArtID"
							type="xs:string"/>
					<xs:element name="DMPackID"
							type="xs:string"/>
					<xs:element name="DMQuant"
							type="xs:decimal"/>
					<xs:element name="Table"
							type="xs:string"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMDocRows">
				<xs:sequence>
					<xs:element name="DMDocRow"
							type="tns:DMDocRec"
							minOccurs="0"
							maxOccurs="unbounded"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMDocRowsOnlineDoc">
				<xs:sequence>
					<xs:element name="DMDocRowOnlineDoc"
							type="tns:DMDocRecOnlineDoc"
							minOccurs="0"
							maxOccurs="unbounded"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMNewDataStruct">
				<xs:sequence>
					<xs:element name="DMClearArts"
							type="xs:boolean"/>
					<xs:element name="DMClearCells"
							type="xs:boolean"/>
					<xs:element name="DMClearTemplates"
							type="xs:boolean"/>
					<xs:element name="DMClearUsers"
							type="xs:boolean"/>
					<xs:element name="DMClearDocs"
							type="xs:boolean"/>
					<xs:element name="DMClearClients"
							type="xs:boolean"/>
					<xs:element name="DMClearUnits"
							type="xs:boolean"/>
					<xs:element name="DMNewArts"
							type="xs:boolean"/>
					<xs:element name="DMNewCells"
							type="xs:boolean"/>
					<xs:element name="DMNewTemplates"
							type="xs:boolean"/>
					<xs:element name="DMNewUsers"
							type="xs:boolean"/>
					<xs:element name="DMNewDocs"
							type="xs:boolean"/>
					<xs:element name="DMNewClients"
							type="xs:boolean"/>
					<xs:element name="DMNewUnits"
							type="xs:boolean"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMTemplate">
				<xs:sequence>
					<xs:element name="DMTemplateID"
							type="xs:int"/>
					<xs:element name="DMIsMark"
							type="xs:boolean"/>
					<xs:element name="DMTemplateName"
							type="xs:string"/>
					<xs:element name="DMEnableNew"
							type="xs:boolean"/>
					<xs:element name="DMLoadArtsWithRows"
							type="xs:boolean"/>
					<xs:element name="DMLoadRowsOnOpen"
							type="xs:boolean"/>
					<xs:element name="DMDisableManualChangeClient"
							type="xs:boolean"/>
					<xs:element name="DMDisableReaderChangeClient"
							type="xs:boolean"/>
					<xs:element name="DMreaderTrack1Use"
							type="xs:boolean"/>
					<xs:element name="DMreaderTrack2Use"
							type="xs:boolean"/>
					<xs:element name="DMreaderTrack3Use"
							type="xs:boolean"/>
					<xs:element name="DMnewPackOnWS"
							type="xs:boolean"/>
					<xs:element name="DMuseBCTemplates"
							type="xs:boolean"/>
					<xs:element name="DMuseSelectLogAsInsertTask"
							type="xs:boolean"/>
					<xs:element name="DMonUploadIncorrectDoc"
							type="xs:int"/>
					<xs:element name="DMuseArt_Insert"
							type="xs:boolean"/>
					<xs:element name="DMuseAllBarcode"
							type="xs:boolean"/>
					<xs:element name="DMuse_Select"
							type="xs:boolean"/>
					<xs:element name="DMonArtScan_Select"
							type="xs:int"/>
					<xs:element name="DMonTaskQty_Select"
							type="xs:int"/>
					<xs:element name="DMonLimitQty_Select"
							type="xs:int"/>
					<xs:element name="DMuseCell_Select"
							type="xs:int"/>
					<xs:element name="DMuseSN_Select"
							type="xs:int"/>
					<xs:element name="DMusePack_Select"
							type="xs:int"/>
					<xs:element name="DMuseCellOnTask_Select"
							type="xs:boolean"/>
					<xs:element name="DMuseSNOnTask_Select"
							type="xs:boolean"/>
					<xs:element name="DMquantEnable_Select"
							type="xs:boolean"/>
					<xs:element name="DMenterToCommit_Select"
							type="xs:boolean"/>
					<xs:element name="DMwriteRecordToWS_Select"
							type="xs:boolean"/>
					<xs:element name="DMuse_Insert"
							type="xs:boolean"/>
					<xs:element name="DMonArtScan_Insert"
							type="xs:int"/>
					<xs:element name="DMonTaskQty_Insert"
							type="xs:int"/>
					<xs:element name="DMonLimitQty_Insert"
							type="xs:int"/>
					<xs:element name="DMuseCell_Insert"
							type="xs:int"/>
					<xs:element name="DMuseSN_Insert"
							type="xs:int"/>
					<xs:element name="DMusePack_Insert"
							type="xs:int"/>
					<xs:element name="DMuseCellOnTask_Insert"
							type="xs:boolean"/>
					<xs:element name="DMuseSNOnTask_Insert"
							type="xs:boolean"/>
					<xs:element name="DMquantEnable_Insert"
							type="xs:boolean"/>
					<xs:element name="DMenterToCommit_Insert"
							type="xs:boolean"/>
					<xs:element name="DMwriteRecordToWS_Insert"
							type="xs:boolean"/>
					<xs:element name="DMPrintLabel_Insert"
							type="xs:int"/>
					<xs:element name="DMPrintLabel_Select"
							type="xs:int"/>
					<xs:element name="DMonNewArt"
							type="xs:int"/>
					<xs:element name="DMoneArtReplaceMode"
							type="xs:boolean"/>
					<xs:element name="DMuniquebarcodedoc"
							type="xs:boolean"/>
					<xs:element name="DMMultiDoc"
							type="xs:boolean"/>
					<xs:element name="DMMultiDocSound"
							type="xs:boolean"/>
					<xs:element name="DMMultiDocTimeout"
							type="xs:int"/>
					<xs:element name="DMEnterCell_Select"
							type="xs:int"/>
					<xs:element name="DMEnterCell_Insert"
							type="xs:int"/>
					<xs:element name="UsePhotofixationSelect"
							type="xs:boolean"/>
					<xs:element name="UsePhotofixationInsert"
							type="xs:boolean"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMTemplateList">
				<xs:sequence>
					<xs:element name="DMTemplate"
							type="tns:DMTemplate"
							minOccurs="0"
							maxOccurs="unbounded"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMUnit">
				<xs:sequence>
					<xs:element name="DMUnitID"
							type="xs:string"/>
					<xs:element name="DMUnitName"
							type="xs:string"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMUnitList">
				<xs:sequence>
					<xs:element name="DMUnit"
							type="tns:DMUnit"
							maxOccurs="unbounded"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMUser">
				<xs:sequence>
					<xs:element name="DMLogin"
							type="xs:string"/>
					<xs:element name="DMName"
							type="xs:string"/>
					<xs:element name="DMPass"
							type="xs:string"/>
					<xs:element name="DMIsAdmin"
							type="xs:boolean"/>
					<xs:element name="DMEnableEditArts"
							type="xs:boolean"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMUserList">
				<xs:sequence>
					<xs:element name="DMUser"
							type="tns:DMUser"
							minOccurs="0"
							maxOccurs="unbounded"/>
				</xs:sequence>
			</xs:complexType>
			<xs:element name="DMServerInfo">
				<xs:complexType>
					<xs:sequence/>
				</xs:complexType>
			</xs:element>
			<xs:element name="DMServerInfoResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="IsNewData">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="IsNewDataResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMNewDataStruct"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetCells">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetCellsResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMCellList"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetNewArts">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetNewArtsResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMArtList"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetTemplates">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetTemplatesResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMTemplateList"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetUsers">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetUsersResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMUserList"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetDocHeads">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetDocHeadsResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMDocList"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetDocRowsSelect">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="DocOutID"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetDocRowsSelectResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMDocRows"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetDocRowsInsert">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="DocOutID"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetDocRowsInsertResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMDocRows"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnArtScanSelect">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="Barcode"
								type="xs:string"/>
						<xs:element name="DocOutID"
								type="xs:string"
								nillable="true"/>
						<xs:element name="Cell"
								type="xs:string"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnArtScanSelectResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMArtQueryInfo"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnArtScanInsert">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="Barcode"
								type="xs:string"/>
						<xs:element name="DocOutID"
								type="xs:string"
								nillable="true"/>
						<xs:element name="Cell"
								type="xs:string"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnArtScanInsertResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMArtQueryInfo"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnWriteRecSelect">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="DocOutID"
								type="xs:string"/>
						<xs:element name="DocRec"
								type="tns:DMDocRec"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnWriteRecSelectResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnWriteRecInsert">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="DocOutID"
								type="xs:string"/>
						<xs:element name="DocRec"
								type="tns:DMDocRec"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnWriteRecInsertResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnCellScan">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="Barcode"
								type="xs:string"/>
						<xs:element name="DocOutID"
								type="xs:string"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnCellScanResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMCell"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnNewPack">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="DocOutID"
								type="xs:string"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnNewPackResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="DeleteDoc">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="DocOutID"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="DeleteDocResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="ClearDoc">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="DocOutID"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="ClearDocResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="ReopenDoc">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="DocOutID"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="ReopenDocResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SetDocComment">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="DocOutID"
								type="xs:string"/>
						<xs:element name="Comment"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SetDocCommentResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SetDocNumber">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="DocOutID"
								type="xs:string"/>
						<xs:element name="Number"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SetDocNumberResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="WriteDoc">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="DocHead"
								type="tns:DMDocHead"/>
						<xs:element name="DocRowsSelect"
								type="tns:DMDocRows"/>
						<xs:element name="DocRowsInsert"
								type="tns:DMDocRows"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="WriteDocResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="CreateDoc">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="DocOutID"
								type="xs:string"/>
						<xs:element name="TemplateID"
								type="xs:int"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="CreateDocResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMDocHead"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetArtRest">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="ArtID"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetArtRestResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:decimal"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="Login">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="LoginResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetDocArts">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="DocOutID"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetDocArtsResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMArtList"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetClients">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetClientsResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMClientList"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SetDocClient">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="DocOutID"
								type="xs:string"/>
						<xs:element name="ClientID"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SetDocClientResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="IsNewDocs">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="IsNewDocsResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="UpdateArt">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="Art"
								type="tns:DMArt"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="UpdateArtResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
						<xs:element name="Art"
								type="tns:DMArt"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="UpdateBarcode">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="ArtID"
								type="xs:string"/>
						<xs:element name="Barcode"
								type="tns:DMBarcode"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="UpdateBarcodeResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetArtsDrafts">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetArtsDraftsResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMArtList"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="DeleteArt">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="Art"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="DeleteArtResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="DeleteBarcode">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="ArtID"
								type="xs:string"/>
						<xs:element name="Barcode"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="DeleteBarcodeResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnCommitAutoInsertOnSelect">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="Barcode"
								type="xs:string"/>
						<xs:element name="DocOutID"
								type="xs:string"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnCommitAutoInsertOnSelectResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="FastAccess">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="Barcode"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="FastAccessResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:string"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="CountDiscount">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="Barcode"
								type="xs:string"/>
						<xs:element name="DocOutID"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="CountDiscountResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetBalance">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="ArtID"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetBalanceResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="Logout">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="LogoutResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetPicture">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="ArtID"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetPictureResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:base64Binary"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnPalletScan">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="DocOutID"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnPalletScanResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMArtQueryInfoUPL"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="IsNewOnlineDocData">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="DocOutID"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="IsNewOnlineDocDataResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMDocRowsOnlineDoc"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SetRowPhoto">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="DocID"
								type="xs:string"/>
						<xs:element name="ArtID"
								type="xs:string"/>
						<xs:element name="Barcode"
								type="xs:string"/>
						<xs:element name="Byte"
								type="xs:base64Binary"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SetRowPhotoResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SetDocPhoto">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="DocID"
								type="xs:string"/>
						<xs:element name="Byte"
								type="xs:base64Binary"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SetDocPhotoResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GenerateNewBC">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="ArtID"
								type="xs:string"/>
						<xs:element name="UnitID"
								type="xs:string"/>
						<xs:element name="P1"
								type="xs:string"/>
						<xs:element name="P2"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GenerateNewBCResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetArtCells">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="ArtID"
								type="xs:string"/>
						<xs:element name="DocID"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetArtCellsResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMCellList"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="FastAccessDoc">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="DocID"
								type="xs:string"/>
						<xs:element name="Barcode"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="FastAccessDocResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetUnits">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetUnitsResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMUnitList"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SendArtToPrint">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="ArtID"
								type="xs:string"/>
						<xs:element name="Barcode"
								type="xs:string"/>
						<xs:element name="Count"
								type="xs:integer"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SendArtToPrintResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SendDocToPrint">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="DocID"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SendDocToPrintResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SendPackToPrint">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="DocID"
								type="xs:string"/>
						<xs:element name="Pack"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SendPackToPrintResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
		</xs:schema>
	</types>
	<message name="DMServerInfoRequestMessage">
		<part name="parameters"
				element="tns:DMServerInfo"/>
	</message>
	<message name="DMServerInfoResponseMessage">
		<part name="parameters"
				element="tns:DMServerInfoResponse"/>
	</message>
	<message name="IsNewDataRequestMessage">
		<part name="parameters"
				element="tns:IsNewData"/>
	</message>
	<message name="IsNewDataResponseMessage">
		<part name="parameters"
				element="tns:IsNewDataResponse"/>
	</message>
	<message name="GetCellsRequestMessage">
		<part name="parameters"
				element="tns:GetCells"/>
	</message>
	<message name="GetCellsResponseMessage">
		<part name="parameters"
				element="tns:GetCellsResponse"/>
	</message>
	<message name="GetNewArtsRequestMessage">
		<part name="parameters"
				element="tns:GetNewArts"/>
	</message>
	<message name="GetNewArtsResponseMessage">
		<part name="parameters"
				element="tns:GetNewArtsResponse"/>
	</message>
	<message name="GetTemplatesRequestMessage">
		<part name="parameters"
				element="tns:GetTemplates"/>
	</message>
	<message name="GetTemplatesResponseMessage">
		<part name="parameters"
				element="tns:GetTemplatesResponse"/>
	</message>
	<message name="GetUsersRequestMessage">
		<part name="parameters"
				element="tns:GetUsers"/>
	</message>
	<message name="GetUsersResponseMessage">
		<part name="parameters"
				element="tns:GetUsersResponse"/>
	</message>
	<message name="GetDocHeadsRequestMessage">
		<part name="parameters"
				element="tns:GetDocHeads"/>
	</message>
	<message name="GetDocHeadsResponseMessage">
		<part name="parameters"
				element="tns:GetDocHeadsResponse"/>
	</message>
	<message name="GetDocRowsSelectRequestMessage">
		<part name="parameters"
				element="tns:GetDocRowsSelect"/>
	</message>
	<message name="GetDocRowsSelectResponseMessage">
		<part name="parameters"
				element="tns:GetDocRowsSelectResponse"/>
	</message>
	<message name="GetDocRowsInsertRequestMessage">
		<part name="parameters"
				element="tns:GetDocRowsInsert"/>
	</message>
	<message name="GetDocRowsInsertResponseMessage">
		<part name="parameters"
				element="tns:GetDocRowsInsertResponse"/>
	</message>
	<message name="OnArtScanSelectRequestMessage">
		<part name="parameters"
				element="tns:OnArtScanSelect"/>
	</message>
	<message name="OnArtScanSelectResponseMessage">
		<part name="parameters"
				element="tns:OnArtScanSelectResponse"/>
	</message>
	<message name="OnArtScanInsertRequestMessage">
		<part name="parameters"
				element="tns:OnArtScanInsert"/>
	</message>
	<message name="OnArtScanInsertResponseMessage">
		<part name="parameters"
				element="tns:OnArtScanInsertResponse"/>
	</message>
	<message name="OnWriteRecSelectRequestMessage">
		<part name="parameters"
				element="tns:OnWriteRecSelect"/>
	</message>
	<message name="OnWriteRecSelectResponseMessage">
		<part name="parameters"
				element="tns:OnWriteRecSelectResponse"/>
	</message>
	<message name="OnWriteRecInsertRequestMessage">
		<part name="parameters"
				element="tns:OnWriteRecInsert"/>
	</message>
	<message name="OnWriteRecInsertResponseMessage">
		<part name="parameters"
				element="tns:OnWriteRecInsertResponse"/>
	</message>
	<message name="OnCellScanRequestMessage">
		<part name="parameters"
				element="tns:OnCellScan"/>
	</message>
	<message name="OnCellScanResponseMessage">
		<part name="parameters"
				element="tns:OnCellScanResponse"/>
	</message>
	<message name="OnNewPackRequestMessage">
		<part name="parameters"
				element="tns:OnNewPack"/>
	</message>
	<message name="OnNewPackResponseMessage">
		<part name="parameters"
				element="tns:OnNewPackResponse"/>
	</message>
	<message name="DeleteDocRequestMessage">
		<part name="parameters"
				element="tns:DeleteDoc"/>
	</message>
	<message name="DeleteDocResponseMessage">
		<part name="parameters"
				element="tns:DeleteDocResponse"/>
	</message>
	<message name="ClearDocRequestMessage">
		<part name="parameters"
				element="tns:ClearDoc"/>
	</message>
	<message name="ClearDocResponseMessage">
		<part name="parameters"
				element="tns:ClearDocResponse"/>
	</message>
	<message name="ReopenDocRequestMessage">
		<part name="parameters"
				element="tns:ReopenDoc"/>
	</message>
	<message name="ReopenDocResponseMessage">
		<part name="parameters"
				element="tns:ReopenDocResponse"/>
	</message>
	<message name="SetDocCommentRequestMessage">
		<part name="parameters"
				element="tns:SetDocComment"/>
	</message>
	<message name="SetDocCommentResponseMessage">
		<part name="parameters"
				element="tns:SetDocCommentResponse"/>
	</message>
	<message name="SetDocNumberRequestMessage">
		<part name="parameters"
				element="tns:SetDocNumber"/>
	</message>
	<message name="SetDocNumberResponseMessage">
		<part name="parameters"
				element="tns:SetDocNumberResponse"/>
	</message>
	<message name="WriteDocRequestMessage">
		<part name="parameters"
				element="tns:WriteDoc"/>
	</message>
	<message name="WriteDocResponseMessage">
		<part name="parameters"
				element="tns:WriteDocResponse"/>
	</message>
	<message name="CreateDocRequestMessage">
		<part name="parameters"
				element="tns:CreateDoc"/>
	</message>
	<message name="CreateDocResponseMessage">
		<part name="parameters"
				element="tns:CreateDocResponse"/>
	</message>
	<message name="GetArtRestRequestMessage">
		<part name="parameters"
				element="tns:GetArtRest"/>
	</message>
	<message name="GetArtRestResponseMessage">
		<part name="parameters"
				element="tns:GetArtRestResponse"/>
	</message>
	<message name="LoginRequestMessage">
		<part name="parameters"
				element="tns:Login"/>
	</message>
	<message name="LoginResponseMessage">
		<part name="parameters"
				element="tns:LoginResponse"/>
	</message>
	<message name="GetDocArtsRequestMessage">
		<part name="parameters"
				element="tns:GetDocArts"/>
	</message>
	<message name="GetDocArtsResponseMessage">
		<part name="parameters"
				element="tns:GetDocArtsResponse"/>
	</message>
	<message name="GetClientsRequestMessage">
		<part name="parameters"
				element="tns:GetClients"/>
	</message>
	<message name="GetClientsResponseMessage">
		<part name="parameters"
				element="tns:GetClientsResponse"/>
	</message>
	<message name="SetDocClientRequestMessage">
		<part name="parameters"
				element="tns:SetDocClient"/>
	</message>
	<message name="SetDocClientResponseMessage">
		<part name="parameters"
				element="tns:SetDocClientResponse"/>
	</message>
	<message name="IsNewDocsRequestMessage">
		<part name="parameters"
				element="tns:IsNewDocs"/>
	</message>
	<message name="IsNewDocsResponseMessage">
		<part name="parameters"
				element="tns:IsNewDocsResponse"/>
	</message>
	<message name="UpdateArtRequestMessage">
		<part name="parameters"
				element="tns:UpdateArt"/>
	</message>
	<message name="UpdateArtResponseMessage">
		<part name="parameters"
				element="tns:UpdateArtResponse"/>
	</message>
	<message name="UpdateBarcodeRequestMessage">
		<part name="parameters"
				element="tns:UpdateBarcode"/>
	</message>
	<message name="UpdateBarcodeResponseMessage">
		<part name="parameters"
				element="tns:UpdateBarcodeResponse"/>
	</message>
	<message name="GetArtsDraftsRequestMessage">
		<part name="parameters"
				element="tns:GetArtsDrafts"/>
	</message>
	<message name="GetArtsDraftsResponseMessage">
		<part name="parameters"
				element="tns:GetArtsDraftsResponse"/>
	</message>
	<message name="DeleteArtRequestMessage">
		<part name="parameters"
				element="tns:DeleteArt"/>
	</message>
	<message name="DeleteArtResponseMessage">
		<part name="parameters"
				element="tns:DeleteArtResponse"/>
	</message>
	<message name="DeleteBarcodeRequestMessage">
		<part name="parameters"
				element="tns:DeleteBarcode"/>
	</message>
	<message name="DeleteBarcodeResponseMessage">
		<part name="parameters"
				element="tns:DeleteBarcodeResponse"/>
	</message>
	<message name="OnCommitAutoInsertOnSelectRequestMessage">
		<part name="parameters"
				element="tns:OnCommitAutoInsertOnSelect"/>
	</message>
	<message name="OnCommitAutoInsertOnSelectResponseMessage">
		<part name="parameters"
				element="tns:OnCommitAutoInsertOnSelectResponse"/>
	</message>
	<message name="FastAccessRequestMessage">
		<part name="parameters"
				element="tns:FastAccess"/>
	</message>
	<message name="FastAccessResponseMessage">
		<part name="parameters"
				element="tns:FastAccessResponse"/>
	</message>
	<message name="CountDiscountRequestMessage">
		<part name="parameters"
				element="tns:CountDiscount"/>
	</message>
	<message name="CountDiscountResponseMessage">
		<part name="parameters"
				element="tns:CountDiscountResponse"/>
	</message>
	<message name="GetBalanceRequestMessage">
		<part name="parameters"
				element="tns:GetBalance"/>
	</message>
	<message name="GetBalanceResponseMessage">
		<part name="parameters"
				element="tns:GetBalanceResponse"/>
	</message>
	<message name="LogoutRequestMessage">
		<part name="parameters"
				element="tns:Logout"/>
	</message>
	<message name="LogoutResponseMessage">
		<part name="parameters"
				element="tns:LogoutResponse"/>
	</message>
	<message name="GetPictureRequestMessage">
		<part name="parameters"
				element="tns:GetPicture"/>
	</message>
	<message name="GetPictureResponseMessage">
		<part name="parameters"
				element="tns:GetPictureResponse"/>
	</message>
	<message name="OnPalletScanRequestMessage">
		<part name="parameters"
				element="tns:OnPalletScan"/>
	</message>
	<message name="OnPalletScanResponseMessage">
		<part name="parameters"
				element="tns:OnPalletScanResponse"/>
	</message>
	<message name="IsNewOnlineDocDataRequestMessage">
		<part name="parameters"
				element="tns:IsNewOnlineDocData"/>
	</message>
	<message name="IsNewOnlineDocDataResponseMessage">
		<part name="parameters"
				element="tns:IsNewOnlineDocDataResponse"/>
	</message>
	<message name="SetRowPhotoRequestMessage">
		<part name="parameters"
				element="tns:SetRowPhoto"/>
	</message>
	<message name="SetRowPhotoResponseMessage">
		<part name="parameters"
				element="tns:SetRowPhotoResponse"/>
	</message>
	<message name="SetDocPhotoRequestMessage">
		<part name="parameters"
				element="tns:SetDocPhoto"/>
	</message>
	<message name="SetDocPhotoResponseMessage">
		<part name="parameters"
				element="tns:SetDocPhotoResponse"/>
	</message>
	<message name="GenerateNewBCRequestMessage">
		<part name="parameters"
				element="tns:GenerateNewBC"/>
	</message>
	<message name="GenerateNewBCResponseMessage">
		<part name="parameters"
				element="tns:GenerateNewBCResponse"/>
	</message>
	<message name="GetArtCellsRequestMessage">
		<part name="parameters"
				element="tns:GetArtCells"/>
	</message>
	<message name="GetArtCellsResponseMessage">
		<part name="parameters"
				element="tns:GetArtCellsResponse"/>
	</message>
	<message name="FastAccessDocRequestMessage">
		<part name="parameters"
				element="tns:FastAccessDoc"/>
	</message>
	<message name="FastAccessDocResponseMessage">
		<part name="parameters"
				element="tns:FastAccessDocResponse"/>
	</message>
	<message name="GetUnitsRequestMessage">
		<part name="parameters"
				element="tns:GetUnits"/>
	</message>
	<message name="GetUnitsResponseMessage">
		<part name="parameters"
				element="tns:GetUnitsResponse"/>
	</message>
	<message name="SendArtToPrintRequestMessage">
		<part name="parameters"
				element="tns:SendArtToPrint"/>
	</message>
	<message name="SendArtToPrintResponseMessage">
		<part name="parameters"
				element="tns:SendArtToPrintResponse"/>
	</message>
	<message name="SendDocToPrintRequestMessage">
		<part name="parameters"
				element="tns:SendDocToPrint"/>
	</message>
	<message name="SendDocToPrintResponseMessage">
		<part name="parameters"
				element="tns:SendDocToPrintResponse"/>
	</message>
	<message name="SendPackToPrintRequestMessage">
		<part name="parameters"
				element="tns:SendPackToPrint"/>
	</message>
	<message name="SendPackToPrintResponseMessage">
		<part name="parameters"
				element="tns:SendPackToPrintResponse"/>
	</message>
	<portType name="DataMobileExchPortType">
		<operation name="DMServerInfo">
			<input message="tns:DMServerInfoRequestMessage"/>
			<output message="tns:DMServerInfoResponseMessage"/>
		</operation>
		<operation name="IsNewData">
			<input message="tns:IsNewDataRequestMessage"/>
			<output message="tns:IsNewDataResponseMessage"/>
		</operation>
		<operation name="GetCells">
			<input message="tns:GetCellsRequestMessage"/>
			<output message="tns:GetCellsResponseMessage"/>
		</operation>
		<operation name="GetNewArts">
			<input message="tns:GetNewArtsRequestMessage"/>
			<output message="tns:GetNewArtsResponseMessage"/>
		</operation>
		<operation name="GetTemplates">
			<input message="tns:GetTemplatesRequestMessage"/>
			<output message="tns:GetTemplatesResponseMessage"/>
		</operation>
		<operation name="GetUsers">
			<input message="tns:GetUsersRequestMessage"/>
			<output message="tns:GetUsersResponseMessage"/>
		</operation>
		<operation name="GetDocHeads">
			<input message="tns:GetDocHeadsRequestMessage"/>
			<output message="tns:GetDocHeadsResponseMessage"/>
		</operation>
		<operation name="GetDocRowsSelect">
			<input message="tns:GetDocRowsSelectRequestMessage"/>
			<output message="tns:GetDocRowsSelectResponseMessage"/>
		</operation>
		<operation name="GetDocRowsInsert">
			<input message="tns:GetDocRowsInsertRequestMessage"/>
			<output message="tns:GetDocRowsInsertResponseMessage"/>
		</operation>
		<operation name="OnArtScanSelect">
			<input message="tns:OnArtScanSelectRequestMessage"/>
			<output message="tns:OnArtScanSelectResponseMessage"/>
		</operation>
		<operation name="OnArtScanInsert">
			<input message="tns:OnArtScanInsertRequestMessage"/>
			<output message="tns:OnArtScanInsertResponseMessage"/>
		</operation>
		<operation name="OnWriteRecSelect">
			<input message="tns:OnWriteRecSelectRequestMessage"/>
			<output message="tns:OnWriteRecSelectResponseMessage"/>
		</operation>
		<operation name="OnWriteRecInsert">
			<input message="tns:OnWriteRecInsertRequestMessage"/>
			<output message="tns:OnWriteRecInsertResponseMessage"/>
		</operation>
		<operation name="OnCellScan">
			<input message="tns:OnCellScanRequestMessage"/>
			<output message="tns:OnCellScanResponseMessage"/>
		</operation>
		<operation name="OnNewPack">
			<input message="tns:OnNewPackRequestMessage"/>
			<output message="tns:OnNewPackResponseMessage"/>
		</operation>
		<operation name="DeleteDoc">
			<input message="tns:DeleteDocRequestMessage"/>
			<output message="tns:DeleteDocResponseMessage"/>
		</operation>
		<operation name="ClearDoc">
			<input message="tns:ClearDocRequestMessage"/>
			<output message="tns:ClearDocResponseMessage"/>
		</operation>
		<operation name="ReopenDoc">
			<input message="tns:ReopenDocRequestMessage"/>
			<output message="tns:ReopenDocResponseMessage"/>
		</operation>
		<operation name="SetDocComment">
			<input message="tns:SetDocCommentRequestMessage"/>
			<output message="tns:SetDocCommentResponseMessage"/>
		</operation>
		<operation name="SetDocNumber">
			<input message="tns:SetDocNumberRequestMessage"/>
			<output message="tns:SetDocNumberResponseMessage"/>
		</operation>
		<operation name="WriteDoc">
			<input message="tns:WriteDocRequestMessage"/>
			<output message="tns:WriteDocResponseMessage"/>
		</operation>
		<operation name="CreateDoc">
			<input message="tns:CreateDocRequestMessage"/>
			<output message="tns:CreateDocResponseMessage"/>
		</operation>
		<operation name="GetArtRest">
			<input message="tns:GetArtRestRequestMessage"/>
			<output message="tns:GetArtRestResponseMessage"/>
		</operation>
		<operation name="Login">
			<input message="tns:LoginRequestMessage"/>
			<output message="tns:LoginResponseMessage"/>
		</operation>
		<operation name="GetDocArts">
			<input message="tns:GetDocArtsRequestMessage"/>
			<output message="tns:GetDocArtsResponseMessage"/>
		</operation>
		<operation name="GetClients">
			<input message="tns:GetClientsRequestMessage"/>
			<output message="tns:GetClientsResponseMessage"/>
		</operation>
		<operation name="SetDocClient">
			<input message="tns:SetDocClientRequestMessage"/>
			<output message="tns:SetDocClientResponseMessage"/>
		</operation>
		<operation name="IsNewDocs">
			<input message="tns:IsNewDocsRequestMessage"/>
			<output message="tns:IsNewDocsResponseMessage"/>
		</operation>
		<operation name="UpdateArt">
			<input message="tns:UpdateArtRequestMessage"/>
			<output message="tns:UpdateArtResponseMessage"/>
		</operation>
		<operation name="UpdateBarcode">
			<input message="tns:UpdateBarcodeRequestMessage"/>
			<output message="tns:UpdateBarcodeResponseMessage"/>
		</operation>
		<operation name="GetArtsDrafts">
			<input message="tns:GetArtsDraftsRequestMessage"/>
			<output message="tns:GetArtsDraftsResponseMessage"/>
		</operation>
		<operation name="DeleteArt">
			<input message="tns:DeleteArtRequestMessage"/>
			<output message="tns:DeleteArtResponseMessage"/>
		</operation>
		<operation name="DeleteBarcode">
			<input message="tns:DeleteBarcodeRequestMessage"/>
			<output message="tns:DeleteBarcodeResponseMessage"/>
		</operation>
		<operation name="OnCommitAutoInsertOnSelect">
			<input message="tns:OnCommitAutoInsertOnSelectRequestMessage"/>
			<output message="tns:OnCommitAutoInsertOnSelectResponseMessage"/>
		</operation>
		<operation name="FastAccess">
			<input message="tns:FastAccessRequestMessage"/>
			<output message="tns:FastAccessResponseMessage"/>
		</operation>
		<operation name="CountDiscount">
			<input message="tns:CountDiscountRequestMessage"/>
			<output message="tns:CountDiscountResponseMessage"/>
		</operation>
		<operation name="GetBalance">
			<input message="tns:GetBalanceRequestMessage"/>
			<output message="tns:GetBalanceResponseMessage"/>
		</operation>
		<operation name="Logout">
			<input message="tns:LogoutRequestMessage"/>
			<output message="tns:LogoutResponseMessage"/>
		</operation>
		<operation name="GetPicture">
			<input message="tns:GetPictureRequestMessage"/>
			<output message="tns:GetPictureResponseMessage"/>
		</operation>
		<operation name="OnPalletScan">
			<input message="tns:OnPalletScanRequestMessage"/>
			<output message="tns:OnPalletScanResponseMessage"/>
		</operation>
		<operation name="IsNewOnlineDocData">
			<input message="tns:IsNewOnlineDocDataRequestMessage"/>
			<output message="tns:IsNewOnlineDocDataResponseMessage"/>
		</operation>
		<operation name="SetRowPhoto">
			<input message="tns:SetRowPhotoRequestMessage"/>
			<output message="tns:SetRowPhotoResponseMessage"/>
		</operation>
		<operation name="SetDocPhoto">
			<input message="tns:SetDocPhotoRequestMessage"/>
			<output message="tns:SetDocPhotoResponseMessage"/>
		</operation>
		<operation name="GenerateNewBC">
			<input message="tns:GenerateNewBCRequestMessage"/>
			<output message="tns:GenerateNewBCResponseMessage"/>
		</operation>
		<operation name="GetArtCells">
			<input message="tns:GetArtCellsRequestMessage"/>
			<output message="tns:GetArtCellsResponseMessage"/>
		</operation>
		<operation name="FastAccessDoc">
			<input message="tns:FastAccessDocRequestMessage"/>
			<output message="tns:FastAccessDocResponseMessage"/>
		</operation>
		<operation name="GetUnits">
			<input message="tns:GetUnitsRequestMessage"/>
			<output message="tns:GetUnitsResponseMessage"/>
		</operation>
		<operation name="SendArtToPrint">
			<input message="tns:SendArtToPrintRequestMessage"/>
			<output message="tns:SendArtToPrintResponseMessage"/>
		</operation>
		<operation name="SendDocToPrint">
			<input message="tns:SendDocToPrintRequestMessage"/>
			<output message="tns:SendDocToPrintResponseMessage"/>
		</operation>
		<operation name="SendPackToPrint">
			<input message="tns:SendPackToPrintRequestMessage"/>
			<output message="tns:SendPackToPrintResponseMessage"/>
		</operation>
	</portType>
	<binding name="DataMobileExchSoapBinding"
			type="tns:DataMobileExchPortType">
		<soapbind:binding style="document"
				transport="http://schemas.xmlsoap.org/soap/http"/>
		<operation name="DMServerInfo">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:DMServerInfo"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="IsNewData">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:IsNewData"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetCells">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetCells"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetNewArts">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetNewArts"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetTemplates">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetTemplates"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetUsers">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetUsers"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetDocHeads">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetDocHeads"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetDocRowsSelect">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetDocRowsSelect"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetDocRowsInsert">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetDocRowsInsert"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnArtScanSelect">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnArtScanSelect"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnArtScanInsert">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnArtScanInsert"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnWriteRecSelect">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnWriteRecSelect"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnWriteRecInsert">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnWriteRecInsert"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnCellScan">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnCellScan"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnNewPack">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnNewPack"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="DeleteDoc">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:DeleteDoc"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="ClearDoc">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:ClearDoc"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="ReopenDoc">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:ReopenDoc"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="SetDocComment">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SetDocComment"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="SetDocNumber">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SetDocNumber"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="WriteDoc">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:WriteDoc"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="CreateDoc">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:CreateDoc"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtRest">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtRest"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="Login">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:Login"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetDocArts">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetDocArts"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetClients">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetClients"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="SetDocClient">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SetDocClient"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="IsNewDocs">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:IsNewDocs"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="UpdateArt">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:UpdateArt"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="UpdateBarcode">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:UpdateBarcode"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtsDrafts">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtsDrafts"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="DeleteArt">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:DeleteArt"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="DeleteBarcode">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:DeleteBarcode"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnCommitAutoInsertOnSelect">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnCommitAutoInsertOnSelect"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="FastAccess">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:FastAccess"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="CountDiscount">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:CountDiscount"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetBalance">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetBalance"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="Logout">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:Logout"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetPicture">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetPicture"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnPalletScan">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnPalletScan"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="IsNewOnlineDocData">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:IsNewOnlineDocData"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="SetRowPhoto">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SetRowPhoto"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="SetDocPhoto">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SetDocPhoto"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GenerateNewBC">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GenerateNewBC"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtCells">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtCells"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="FastAccessDoc">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:FastAccessDoc"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetUnits">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetUnits"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="SendArtToPrint">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SendArtToPrint"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="SendDocToPrint">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SendDocToPrint"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="SendPackToPrint">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SendPackToPrint"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
	</binding>
	<binding name="DataMobileExchSoap12Binding"
			type="tns:DataMobileExchPortType">
		<soap12bind:binding style="document"
				transport="http://schemas.xmlsoap.org/soap/http"/>
		<operation name="DMServerInfo">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:DMServerInfo"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="IsNewData">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:IsNewData"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetCells">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetCells"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetNewArts">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetNewArts"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetTemplates">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetTemplates"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetUsers">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetUsers"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetDocHeads">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetDocHeads"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetDocRowsSelect">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetDocRowsSelect"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetDocRowsInsert">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetDocRowsInsert"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnArtScanSelect">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnArtScanSelect"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnArtScanInsert">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnArtScanInsert"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnWriteRecSelect">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnWriteRecSelect"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnWriteRecInsert">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnWriteRecInsert"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnCellScan">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnCellScan"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnNewPack">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnNewPack"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="DeleteDoc">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:DeleteDoc"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="ClearDoc">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:ClearDoc"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="ReopenDoc">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:ReopenDoc"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="SetDocComment">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SetDocComment"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="SetDocNumber">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SetDocNumber"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="WriteDoc">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:WriteDoc"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="CreateDoc">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:CreateDoc"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtRest">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtRest"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="Login">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:Login"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetDocArts">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetDocArts"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetClients">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetClients"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="SetDocClient">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SetDocClient"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="IsNewDocs">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:IsNewDocs"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="UpdateArt">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:UpdateArt"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="UpdateBarcode">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:UpdateBarcode"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtsDrafts">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtsDrafts"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="DeleteArt">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:DeleteArt"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="DeleteBarcode">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:DeleteBarcode"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnCommitAutoInsertOnSelect">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnCommitAutoInsertOnSelect"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="FastAccess">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:FastAccess"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="CountDiscount">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:CountDiscount"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetBalance">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetBalance"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="Logout">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:Logout"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetPicture">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetPicture"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnPalletScan">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnPalletScan"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="IsNewOnlineDocData">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:IsNewOnlineDocData"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="SetRowPhoto">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SetRowPhoto"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="SetDocPhoto">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SetDocPhoto"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GenerateNewBC">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GenerateNewBC"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtCells">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtCells"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="FastAccessDoc">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:FastAccessDoc"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetUnits">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetUnits"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="SendArtToPrint">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SendArtToPrint"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="SendDocToPrint">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SendDocToPrint"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="SendPackToPrint">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SendPackToPrint"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
	</binding>
	<service name="DataMobileExch">
		<port name="DataMobileExchSoap"
				binding="tns:DataMobileExchSoapBinding">
			<documentation> 
				<wsi:Claim xmlns:wsi="http://ws-i.org/schemas/conformanceClaim/"
						conformsTo="http://ws-i.org/profiles/basic/1.1"/>
			</documentation>
            <soapbind:address location="<?=$this->getServiceUrl();
        ?>"/>
		</port>
		<port name="DataMobileExchSoap12"
				binding="tns:DataMobileExchSoap12Binding">
                <soap12bind:address location="<?=$this->getServiceUrl();
        ?>"/>
        </port>
	</service>
</definitions>
<?php
        return ob_get_clean();
    }

    public static function classMap()
    {
        $prefix = '\\Kily\\DM\\SOAP\\Model\\';

        return array(
            'DMArt' => $prefix.'Art',
            'DMArtList' => $prefix.'ArtList',
            'DMArtQueryInfo' => $prefix.'ArtQueryInfo',
            'DMArtQueryInfoUPL' => $prefix.'ArtQueryInfoUPL',
            'DMArtQueryItem' => $prefix.'ArtQueryItem',
            'DMArtQueryItemUPL' => $prefix.'ArtQueryItemUPL',
            'DMBarcode' => $prefix.'Barcode',
            'DMCell' => $prefix.'Cell',
            'DMCellList' => $prefix.'CellList',
            'DMClient' => $prefix.'Client',
            'DMClientList' => $prefix.'ClientList',
            'DMDocHead' => $prefix.'DocHead',
            'DMDocList' => $prefix.'DocList',
            'DMDocRec' => $prefix.'DocRec',
            'DMDocRecOnlineDoc' => $prefix.'DocRecOnlineDoc',
            'DMDocRows' => $prefix.'DocRows',
            'DMDocRowsOnlineDoc' => $prefix.'DocRowsOnlineDoc',
            'DMNewDataStruct' => $prefix.'NewDataStruct',
            'DMTemplate' => $prefix.'Template',
            'DMTemplateList' => $prefix.'TemplateList',
            'DMUnit' => $prefix.'Unit',
            'DMUnitList' => $prefix.'UnitList',
            'DMUser' => $prefix.'User',
            'DMUserList' => $prefix.'UserList',
        );
    }
}
