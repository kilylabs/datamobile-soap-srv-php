<?php

namespace Kily\DM\SOAP;

class Wsdl27 extends AbstractWsdl
{
    public function __toString()
    {
        ob_start();
        echo '<?xml version="1.0" encoding="UTF-8"?>';
        ?>
<definitions xmlns="http://schemas.xmlsoap.org/wsdl/"
		xmlns:soap12bind="http://schemas.xmlsoap.org/wsdl/soap12/"
		xmlns:soapbind="http://schemas.xmlsoap.org/wsdl/soap/"
		xmlns:tns="http://www.data-mobile.ru"
		xmlns:wsp="http://schemas.xmlsoap.org/ws/2004/09/policy"
		xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd"
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
					<xs:element name="DMWeightTask"
							type="xs:decimal"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMMarkType"
							type="xs:int"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMMeasureType"
							type="xs:int"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMRest"
							type="xs:decimal"
							nillable="true"
							minOccurs="0"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMArtEgais">
				<xs:sequence>
					<xs:element name="ArtID"
							type="xs:string"/>
					<xs:element name="ArtName"
							type="xs:string"/>
					<xs:element name="Barcode"
							type="xs:string"/>
					<xs:element name="Manufacturer"
							type="xs:string"/>
					<xs:element name="Importer"
							type="xs:string"/>
					<xs:element name="Capacity"
							type="xs:decimal"/>
					<xs:element name="PercentAlco"
							type="xs:decimal"/>
					<xs:element name="TypeAlco"
							type="xs:string"/>
					<xs:element name="DMIsCompared"
							type="xs:boolean"/>
					<xs:element name="DMBoxKF"
							type="xs:decimal"/>
					<xs:element name="DMIsNeedBlankA"
							type="xs:boolean"/>
					<xs:element name="DMIsNeedBlankB"
							type="xs:boolean"/>
					<xs:element name="DMIsNeedDateBottling"
							type="xs:boolean"/>
					<xs:element name="DMSN"
							type="xs:string"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMArtEgaisList">
				<xs:sequence>
					<xs:element name="DMArtEgais"
							type="tns:DMArtEgais"
							minOccurs="0"
							maxOccurs="unbounded"/>
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
					<xs:element name="DMBarcodeUseSN"
							type="xs:int"/>
					<xs:element name="DMSN"
							type="xs:string"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMMarkType"
							type="xs:int"
							nillable="true"
							minOccurs="0"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMArtQueryItemUPL">
				<xs:sequence>
					<xs:element name="DMArt"
							type="tns:DMArt"/>
					<xs:element name="DMBarcode"
							type="tns:DMBarcode"/>
					<xs:element name="DMQty"
							type="xs:decimal"/>
					<xs:element name="DMSN"
							type="xs:string"/>
					<xs:element name="DMCell"
							type="xs:string"/>
					<xs:element name="DMPack"
							type="xs:string"/>
					<xs:element name="DMBoxPack"
							type="xs:string"/>
					<xs:element name="DMPDFBarcode"
							type="xs:string"/>
					<xs:element name="DMDecodedPDFBarcode"
							type="xs:string"/>
					<xs:element name="DMDataMatrixBarcode"
							type="xs:string"/>
					<xs:element name="DMDateBottling"
							type="xs:string"/>
					<xs:element name="DMBlankA"
							type="xs:string"/>
					<xs:element name="DMBlankB"
							type="xs:string"/>
					<xs:element name="DMIsCompared"
							type="xs:boolean"
							nillable="true"/>
					<xs:element name="DMPallet"
							type="xs:string"
							nillable="true"
							minOccurs="0"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMAttrs">
				<xs:sequence>
					<xs:element name="DMAttr1"
							type="xs:string"/>
					<xs:element name="DMAttr2"
							type="xs:string"/>
					<xs:element name="DMAttr3"
							type="xs:string"/>
					<xs:element name="DMAttr4"
							type="xs:string"/>
					<xs:element name="DMAttr5"
							type="xs:string"/>
					<xs:element name="DMAttr6"
							type="xs:string"/>
					<xs:element name="DMAttr7"
							type="xs:string"/>
					<xs:element name="DMAttr8"
							type="xs:string"/>
					<xs:element name="DMAttr9"
							type="xs:string"/>
					<xs:element name="DMAttr10"
							type="xs:string"/>
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
					<xs:element name="DMUseSN"
							type="xs:int"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMCell">
				<xs:sequence>
					<xs:element name="DMCellName"
							type="xs:string"/>
					<xs:element name="DMBarcode"
							type="xs:string"/>
					<xs:element name="DMTaskQnt"
							type="xs:decimal"/>
					<xs:element name="DMLimitQnt"
							type="xs:decimal"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMCellArt">
				<xs:sequence>
					<xs:element name="DMArt"
							type="tns:DMArt"/>
					<xs:element name="DMBarcode"
							type="tns:DMBarcode"/>
					<xs:element name="DMQty"
							type="xs:decimal"/>
					<xs:element name="DMSN"
							type="xs:string"/>
					<xs:element name="DMCell"
							type="xs:string"/>
					<xs:element name="DMPack"
							type="xs:string"/>
					<xs:element name="DMBoxPack"
							type="xs:string"/>
					<xs:element name="DMPallet"
							type="xs:string"/>
					<xs:element name="DMPDFBarcode"
							type="xs:string"/>
					<xs:element name="DMDecodedPDFBarcode"
							type="xs:string"/>
					<xs:element name="DMDataMatrixBarcode"
							type="xs:string"/>
					<xs:element name="DMDateBottling"
							type="xs:string"/>
					<xs:element name="DMBlankA"
							type="xs:string"/>
					<xs:element name="DMBlankB"
							type="xs:string"/>
					<xs:element name="DMIsCompared"
							type="xs:boolean"
							nillable="true"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMCellArtList">
				<xs:sequence>
					<xs:element name="DMCellArt"
							type="tns:DMCellArt"
							minOccurs="0"
							maxOccurs="unbounded"/>
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
			<xs:complexType name="DMDateList">
				<xs:sequence>
					<xs:element name="DMDate"
							type="xs:dateTime"
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
					<xs:element name="DMWarehouse"
							type="tns:DMWarehouse"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMWarehouse2"
							type="xs:string"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMSteps"
							type="tns:DMDocStepList"
							nillable="true"
							minOccurs="0"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMDocHead_EGAIS">
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
					<xs:element name="DMTemplate_EGAIS"
							type="tns:DMTemplate_EGAIS"
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
					<xs:element name="DMisQuarantine"
							type="xs:boolean"/>
					<xs:element name="DMWarehouse"
							type="tns:DMWarehouse"
							nillable="true"
							minOccurs="0"/>
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
			<xs:complexType name="DMDocList_EGAIS">
				<xs:sequence>
					<xs:element name="DMDocHead_EGAIS"
							type="tns:DMDocHead_EGAIS"
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
					<xs:element name="DMPDFBarcode"
							type="xs:string"
							nillable="true"/>
					<xs:element name="DMDataMatrixBarcode"
							type="xs:string"
							nillable="true"/>
					<xs:element name="DMDateBottling"
							type="xs:string"
							nillable="true"/>
					<xs:element name="DMRowID"
							type="xs:int"
							nillable="true"/>
					<xs:element name="DMDecodedPDFBarcode"
							type="xs:string"/>
					<xs:element name="DMBlankA"
							type="xs:string"/>
					<xs:element name="DMBlankB"
							type="xs:string"/>
					<xs:element name="DMRFIDTagID"
							type="xs:string"/>
					<xs:element name="DMChangedPrice"
							type="xs:decimal"
							nillable="true"/>
					<xs:element name="DMBoxPackID"
							type="xs:string"/>
					<xs:element name="DMTable"
							type="xs:string"/>
					<xs:element name="DMArtEgaisID"
							type="xs:string"/>
					<xs:element name="DMPrice"
							type="xs:decimal"
							nillable="true"/>
					<xs:element name="DMDate"
							type="xs:dateTime"
							nillable="true"/>
					<xs:element name="DMGroupId"
							type="xs:string"
							nillable="true"/>
					<xs:element name="DMWeightTask"
							type="xs:decimal"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMPalletID"
							type="xs:string"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="Params"
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
			<xs:complexType name="DMDocStep">
				<xs:sequence>
					<xs:element name="DMDocId"
							type="xs:string"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMTemplateId"
							type="xs:string"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMStepId"
							type="xs:string"/>
					<xs:element name="DMSortNumber"
							type="xs:string"/>
					<xs:element name="DMCheckFill"
							type="xs:boolean"/>
					<xs:element name="DMIsDocArg"
							type="xs:int"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMDocStepList">
				<xs:sequence>
					<xs:element name="DMDocStep"
							type="tns:DMDocStep"
							minOccurs="0"
							maxOccurs="unbounded"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMDocsIDs">
				<xs:sequence>
					<xs:element name="DMDocID"
							type="xs:string"
							minOccurs="0"
							maxOccurs="unbounded"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMImage">
				<xs:sequence>
					<xs:element name="DMArtID"
							type="xs:string"/>
					<xs:element name="DMImageID"
							type="xs:string"/>
					<xs:element name="DMImageData"
							type="xs:base64Binary"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMImageList">
				<xs:sequence>
					<xs:element name="DMImage"
							type="tns:DMImage"
							minOccurs="0"
							maxOccurs="unbounded"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMLog">
				<xs:sequence>
					<xs:element name="DMLogDate"
							type="xs:dateTime"/>
					<xs:element name="DMLogType"
							type="xs:int"/>
					<xs:element name="DMLogData"
							type="xs:string"/>
					<xs:element name="DMLogUserName"
							type="xs:string"/>
					<xs:element name="DMDocOutID"
							type="xs:string"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMDocRec"
							type="tns:DMDocRec"
							nillable="true"
							minOccurs="0"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMLogList">
				<xs:sequence>
					<xs:element name="DMLog"
							type="tns:DMLog"
							minOccurs="0"
							maxOccurs="unbounded"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMMark">
				<xs:sequence>
					<xs:element name="ArtID"
							type="xs:string"/>
					<xs:element name="Mark"
							type="xs:string"/>
					<xs:element name="Box"
							type="xs:string"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="Pallet"
							type="xs:string"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="Coef"
							type="xs:decimal"
							nillable="true"
							minOccurs="0"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMMarkEgais">
				<xs:sequence>
					<xs:element name="ArtID"
							type="xs:string"/>
					<xs:element name="Mark"
							type="xs:string"/>
					<xs:element name="Box"
							type="xs:string"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="Pallet"
							type="xs:string"
							nillable="true"
							minOccurs="0"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMMarkEgaisList">
				<xs:sequence>
					<xs:element name="DMMarkEgais"
							type="tns:DMMarkEgais"
							minOccurs="0"
							maxOccurs="unbounded"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMMarkList">
				<xs:sequence>
					<xs:element name="DMMark"
							type="tns:DMMark"
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
					<xs:element name="DMClearEgaisArts"
							type="xs:boolean"/>
					<xs:element name="DMClearWarehouses"
							type="xs:boolean"/>
					<xs:element name="DMClearEgaisMarks"
							type="xs:boolean"/>
					<xs:element name="DMClearSteps"
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
					<xs:element name="DMNewEgaisArts"
							type="xs:boolean"/>
					<xs:element name="DMClearTemplates_EGAIS"
							type="xs:boolean"/>
					<xs:element name="DMNewTemplates_EGAIS"
							type="xs:boolean"/>
					<xs:element name="DMNewWarehouses"
							type="xs:boolean"/>
					<xs:element name="DMNewEgaisMarks"
							type="xs:boolean"/>
					<xs:element name="DMNewSteps"
							type="xs:boolean"/>
					<xs:element name="DMNeedCheckFTP"
							type="xs:boolean"/>
					<xs:element name="DMNewBarcodeTemplates"
							type="xs:boolean"/>
					<xs:element name="DMClearBarcodeTemplates"
							type="xs:boolean"/>
					<xs:element name="DMNewArtMarks"
							type="xs:boolean"/>
					<xs:element name="DMClearArtMarks"
							type="xs:boolean"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMOnEgaisArtScanResponse">
				<xs:sequence>
					<xs:element name="ArtID"
							type="xs:string"/>
					<xs:element name="ArtName"
							type="xs:string"/>
					<xs:element name="Barcode"
							type="xs:string"/>
					<xs:element name="Manufacturer"
							type="xs:string"/>
					<xs:element name="Importer"
							type="xs:string"/>
					<xs:element name="Capacity"
							type="xs:decimal"/>
					<xs:element name="PercentAlco"
							type="xs:decimal"/>
					<xs:element name="TypeAlco"
							type="xs:string"/>
					<xs:element name="DMIsCompared"
							type="xs:boolean"/>
					<xs:element name="DMBoxKF"
							type="xs:decimal"/>
					<xs:element name="DMIsNeedBlankA"
							type="xs:boolean"/>
					<xs:element name="DMIsNeedBlankB"
							type="xs:boolean"/>
					<xs:element name="DMIsNeedDateBottling"
							type="xs:boolean"/>
					<xs:element name="DMSN"
							type="xs:string"/>
					<xs:element name="DMIsRegistered"
							type="xs:boolean"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMStep">
				<xs:sequence>
					<xs:element name="DMStepId"
							type="xs:string"/>
					<xs:element name="DMStepName"
							type="xs:string"/>
					<xs:element name="DMDataType"
							type="xs:string"/>
					<xs:element name="DMParentId"
							type="xs:string"
							nillable="true"
							minOccurs="0"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMStepList">
				<xs:sequence>
					<xs:element name="DMStep"
							type="tns:DMStep"
							minOccurs="0"
							maxOccurs="unbounded"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMStepValue">
				<xs:sequence>
					<xs:element name="DMStepId"
							type="xs:string"/>
					<xs:element name="DMValue"
							type="xs:string"/>
					<xs:element name="DMDocId"
							type="xs:string"/>
					<xs:element name="DMRowId"
							type="xs:string"/>
					<xs:element name="DMArtId"
							type="xs:string"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMStepValueList">
				<xs:sequence>
					<xs:element name="DMStepValue"
							type="tns:DMStepValue"
							minOccurs="0"
							maxOccurs="unbounded"/>
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
							type="xs:int"/>
					<xs:element name="DMuseBCTemplates"
							type="xs:boolean"/>
					<xs:element name="DMuseSelectLogAsInsertTask"
							type="xs:boolean"/>
					<xs:element name="DMonUploadIncorrectDoc"
							type="xs:int"/>
					<xs:element name="DMonUploadIncorrectDocOption"
							type="xs:int"
							nillable="true"
							minOccurs="0"/>
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
					<xs:element name="DMUseEgais"
							type="xs:boolean"/>
					<xs:element name="DMUseDataMatrixBarcode"
							type="xs:int"/>
					<xs:element name="DMUseDateBottling"
							type="xs:boolean"/>
					<xs:element name="DMEnterPDF417Barcode"
							type="xs:int"/>
					<xs:element name="DMEgaisCompare"
							type="xs:boolean"/>
					<xs:element name="DMUseBlankA"
							type="xs:int"/>
					<xs:element name="DMUseBlankB"
							type="xs:int"/>
					<xs:element name="DMGetCellsListFromServerSelect"
							type="xs:boolean"/>
					<xs:element name="DMGetCellsListFromServerInsert"
							type="xs:boolean"/>
					<xs:element name="DMUseCheckMark"
							type="xs:boolean"/>
					<xs:element name="DMIsUniqueSNSelect"
							type="xs:boolean"/>
					<xs:element name="DMIsUniqueSNInsert"
							type="xs:boolean"/>
					<xs:element name="DMEgaisVersion"
							type="xs:int"/>
					<xs:element name="DMGetDateBottlingFromServer"
							type="xs:boolean"/>
					<xs:element name="DMUseOnlineArtsCatalog"
							type="xs:boolean"/>
					<xs:element name="DMAlertNewDoc"
							type="xs:boolean"
							minOccurs="0"/>
					<xs:element name="DMUseMark"
							type="xs:boolean"
							minOccurs="0"/>
					<xs:element name="DMNoScanArts"
							type="xs:boolean"
							minOccurs="0"/>
					<xs:element name="DMNoScanCells"
							type="xs:boolean"
							minOccurs="0"/>
					<xs:element name="DMSNType_Insert"
							type="xs:string"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMSNRules_Insert"
							type="xs:string"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMSNNotNull_Insert"
							type="xs:boolean"
							minOccurs="0"/>
					<xs:element name="DMFullyCell_Insert"
							type="xs:boolean"
							minOccurs="0"/>
					<xs:element name="DMSNNotNull_Select"
							type="xs:boolean"
							minOccurs="0"/>
					<xs:element name="DMFullyCell_Select"
							type="xs:boolean"
							minOccurs="0"/>
					<xs:element name="DMSNType_Select"
							type="xs:string"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMSNRules_Select"
							type="xs:string"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMDeleteLeftTaskQty"
							type="xs:boolean"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMViewSettings"
							type="xs:string"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMLabels"
							type="xs:string"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMMark_NeedEanScan"
							type="xs:int"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMMark_EanIsGtin"
							type="xs:boolean"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMMark_AdditionalSearchByMC"
							type="xs:boolean"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMFormsWithArt"
							type="xs:boolean"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMUserbooksOnline"
							type="xs:boolean"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMMark_IsOnlyMarkArt"
							type="xs:boolean"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMMark_ArtMarkEnterType"
							type="xs:int"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMCanPackSkip"
							type="xs:boolean"
							nillable="true"
							minOccurs="0"/>
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
			<xs:complexType name="DMTemplateList_EGAIS">
				<xs:sequence>
					<xs:element name="DMTemplate_EGAIS"
							type="tns:DMTemplate_EGAIS"
							minOccurs="0"
							maxOccurs="unbounded"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMTemplate_EGAIS">
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
					<xs:element name="DMnewPackOnWS"
							type="xs:boolean"/>
					<xs:element name="DMonUploadIncorrectDoc"
							type="xs:int"/>
					<xs:element name="DMonArtScan_Select"
							type="xs:int"/>
					<xs:element name="DMonTaskQty_Select"
							type="xs:int"/>
					<xs:element name="DMuseSN_Select"
							type="xs:int"/>
					<xs:element name="DMusePack_Select"
							type="xs:int"/>
					<xs:element name="DMwriteRecordToWS_Select"
							type="xs:boolean"/>
					<xs:element name="DMisNeedScanPDF"
							type="xs:boolean"/>
					<xs:element name="DMisNeedScanDataMatrix"
							type="xs:boolean"/>
					<xs:element name="DMisNeedScanEAN"
							type="xs:boolean"/>
					<xs:element name="DMisNeedScanBox"
							type="xs:boolean"/>
					<xs:element name="DMonTaskType"
							type="xs:int"/>
					<xs:element name="DMonNewArt"
							type="xs:int"/>
					<xs:element name="DMMultiDoc"
							type="xs:boolean"
							nillable="true"/>
					<xs:element name="DMMultiDocSound"
							type="xs:boolean"
							nillable="true"/>
					<xs:element name="DMMultiDocTimeout"
							type="xs:int"
							nillable="true"/>
					<xs:element name="DMquantEnable_Select"
							type="xs:boolean"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMenterToCommit_Select"
							type="xs:boolean"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMEgaisCompare"
							type="xs:boolean"
							nillable="true"
							minOccurs="0"/>
					<xs:element name="DMSelectiveCheck"
							type="xs:boolean"
							nillable="true"
							minOccurs="0"/>
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
			<xs:complexType name="DMUserBookElement">
				<xs:sequence>
					<xs:element name="DMUserBookElementId"
							type="xs:string"/>
					<xs:element name="DMUserBookElementName"
							type="xs:string"/>
					<xs:element name="DMStepId"
							type="xs:string"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMUserBooksList">
				<xs:sequence>
					<xs:element name="DMUserBookElement"
							type="tns:DMUserBookElement"
							minOccurs="0"
							maxOccurs="unbounded"/>
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
			<xs:complexType name="DMWarehouse">
				<xs:sequence>
					<xs:element name="DMWarehouseName"
							type="xs:string"/>
					<xs:element name="DMWarehouseID"
							type="xs:string"/>
				</xs:sequence>
			</xs:complexType>
			<xs:complexType name="DMWarehouseList">
				<xs:sequence>
					<xs:element name="DMWarehouse"
							type="tns:DMWarehouse"
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
						<xs:element name="DMDocsIDs"
								type="tns:DMDocsIDs"/>
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
						<xs:element name="Params"
								type="xs:string"/>
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
						<xs:element name="Params"
								type="xs:string"/>
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
						<xs:element name="Params"
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
								type="xs:base64Binary"
								nillable="true"/>
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
						<xs:element name="Barcode"
								type="xs:string"/>
						<xs:element name="DocOutID"
								type="xs:string"/>
						<xs:element name="Cell"
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
						<xs:element name="BarcodeQuant"
								type="xs:decimal"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GenerateNewBCResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMBarcode"/>
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
						<xs:element name="DocID"
								type="xs:string"/>
						<xs:element name="ArtID"
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
			<xs:element name="GetArtCellsSelect">
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
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetArtCellsSelectResponse">
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
			<xs:element name="GetDocArtsEgais">
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
			<xs:element name="GetDocArtsEgaisResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMArtEgaisList"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnArtEgaisScan">
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
						<xs:element name="PDFBarcode"
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
			<xs:element name="OnArtEgaisScanResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMArtEgais"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnCellScanSelect">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="DocOutID"
								type="xs:string"/>
						<xs:element name="CellBC"
								type="xs:string"/>
						<xs:element name="ArtID"
								type="xs:string"/>
						<xs:element name="Barcode"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnCellScanSelectResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMCell"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnCellScanInsert">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="DocOutID"
								type="xs:string"/>
						<xs:element name="CellBC"
								type="xs:string"/>
						<xs:element name="ArtID"
								type="xs:string"/>
						<xs:element name="Barcode"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnCellScanInsertResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMCell"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetArtOnBC">
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
			<xs:element name="GetArtOnBCResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMArtList"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="ReplaceDocRow">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="DocOutID"
								type="xs:string"/>
						<xs:element name="DMDocRec"
								type="tns:DMDocRec"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="ReplaceDocRowResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMDocRec"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SendEgaisBlankABToPrint">
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
						<xs:element name="Alcocode"
								type="xs:string"/>
						<xs:element name="BlankA"
								type="xs:string"/>
						<xs:element name="BlankB"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SendEgaisBlankABToPrintResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="CreateEgaisArt">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="DMArt"
								type="tns:DMArt"/>
						<xs:element name="DMEgaisArt"
								type="tns:DMArtEgais"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="CreateEgaisArtResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnDocScan">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="Barcode"
								type="xs:string"/>
						<xs:element name="TemplateID"
								type="xs:int"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnDocScanResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMDocList"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetArtAttributesName">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetArtAttributesNameResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMAttrs"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetArtCellsInsert">
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
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetArtCellsInsertResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMCellList"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetNewGroupDocRows">
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
			<xs:element name="GetNewGroupDocRowsResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMDocRows"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnEgaisPalletScan">
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
						<xs:element name="Cell"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnEgaisPalletScanResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMArtQueryInfoUPL"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetEgaisArts">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetEgaisArtsResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMArtEgaisList"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetEgaisMarks">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetEgaisMarksResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMMarkEgaisList"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetArtPhotos">
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
			<xs:element name="GetArtPhotosResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMImageList"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SetArtPhoto">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="DMImage"
								type="tns:DMImage"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SetArtPhotoResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:string"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="DeleteArtPhoto">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="ArtID"
								type="xs:string"/>
						<xs:element name="DMImageID"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="DeleteArtPhotoResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetArtEgaisDateBottling">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="DocOutID"
								type="xs:string"
								nillable="true"/>
						<xs:element name="ArtID"
								type="xs:string"/>
						<xs:element name="Barcode"
								type="xs:string"/>
						<xs:element name="PDFBarcode"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetArtEgaisDateBottlingResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMDateList"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetArtQtyByScales">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="DocOutID"
								type="xs:string"/>
						<xs:element name="ArtID"
								type="xs:string"/>
						<xs:element name="Cell"
								type="xs:string"/>
						<xs:element name="ArtSN"
								type="xs:string"/>
						<xs:element name="ScalesBarcode"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetArtQtyByScalesResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:decimal"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetArtsPhotos">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetArtsPhotosResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMImageList"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SendLogs">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="Logs"
								type="tns:DMLogList"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SendLogsResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
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
			<xs:element name="ApproveGroupDocRows">
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
						<xs:element name="DMDocsIDs"
								type="tns:DMDocsIDs"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="ApproveGroupDocRowsResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetVersion">
				<xs:complexType>
					<xs:sequence/>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetVersionResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetWarehouses">
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
			<xs:element name="GetWarehousesResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMWarehouseList"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SendArtToPrint2">
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
						<xs:element name="QtyInt"
								type="xs:string"/>
						<xs:element name="QtyFrac"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SendArtToPrint2Response">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetCellContent">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="CellBC"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetCellContentResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMCellArtList"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SendArtToPrintKM">
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
			<xs:element name="SendArtToPrintKMResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnArtMarkScanSelect">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="Params"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnArtMarkScanSelectResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMArtQueryInfo"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnArtMarkScanInsert">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="Params"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnArtMarkScanInsertResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMArtQueryInfo"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetSelectedQtyGroupDocRows">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
						<xs:element name="DocOutID"
								type="xs:string"/>
						<xs:element name="LastRequestDate"
								type="xs:dateTime"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetSelectedQtyGroupDocRowsResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMDocRows"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetDocSteps">
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
			<xs:element name="GetDocStepsResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMDocStepList"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetSteps">
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
			<xs:element name="GetStepsResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMStepList"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetUserBooks">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="DMStepId"
								type="xs:string"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetUserBooksResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMUserBooksList"
								nillable="true"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnWriteRowStepValues">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="DMStepValueList"
								type="tns:DMStepValueList"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnWriteRowStepValuesResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetBarcodeTemplates">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="Params"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetBarcodeTemplatesResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetArtMarks">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetArtMarksResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMMarkList"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetTemplates_EGAIS">
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
			<xs:element name="GetTemplates_EGAISResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMTemplateList_EGAIS"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="CreateDoc_EGAIS">
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
			<xs:element name="CreateDoc_EGAISResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMDocHead_EGAIS"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetDocHeads_EGAIS">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="DMDocsIDs"
								type="tns:DMDocsIDs"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetDocHeads_EGAISResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMDocList_EGAIS"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="WriteDoc_EGAIS">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="SN"
								type="xs:string"/>
						<xs:element name="UserName"
								type="xs:string"
								nillable="true"/>
						<xs:element name="DocHead_EGAIS"
								type="tns:DMDocHead_EGAIS"/>
						<xs:element name="DocRowsSelect"
								type="tns:DMDocRows"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="WriteDoc_EGAISResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnArtEgaisScan_EGAIS">
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
						<xs:element name="BarcodeBox"
								type="xs:string"/>
						<xs:element name="PDFBarcode"
								type="xs:string"/>
						<xs:element name="DocOutID"
								type="xs:string"
								nillable="true"/>
						<xs:element name="Cell"
								type="xs:string"
								nillable="true"/>
						<xs:element name="DataMatrix"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnArtEgaisScan_EGAISResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMOnEgaisArtScanResponse"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnNewPack_EGAIS">
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
			<xs:element name="OnNewPack_EGAISResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnWritePackSelect_EGAIS">
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
						<xs:element name="DocRowsSelect"
								type="tns:DMDocRows"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnWritePackSelect_EGAISResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnWriteBoxSelect_EGAIS">
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
						<xs:element name="DocRowsSelect"
								type="tns:DMDocRows"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnWriteBoxSelect_EGAISResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="SetDocCarantin_EGAIS">
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
			<xs:element name="SetDocCarantin_EGAISResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:boolean"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="OnDocScan_EGAIS">
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
			<xs:element name="OnDocScan_EGAISResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="tns:DMDocList_EGAIS"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetQtyInPack">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="Params"
								type="xs:string"/>
					</xs:sequence>
				</xs:complexType>
			</xs:element>
			<xs:element name="GetQtyInPackResponse">
				<xs:complexType>
					<xs:sequence>
						<xs:element name="return"
								type="xs:string"/>
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
	<message name="SetRowPhotoRequestMessage">
		<part name="parameters"
				element="tns:SetRowPhoto"/>
	</message>
	<message name="SetRowPhotoResponseMessage">
		<part name="parameters"
				element="tns:SetRowPhotoResponse"/>
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
	<message name="GetArtCellsSelectRequestMessage">
		<part name="parameters"
				element="tns:GetArtCellsSelect"/>
	</message>
	<message name="GetArtCellsSelectResponseMessage">
		<part name="parameters"
				element="tns:GetArtCellsSelectResponse"/>
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
	<message name="SetDocPhotoRequestMessage">
		<part name="parameters"
				element="tns:SetDocPhoto"/>
	</message>
	<message name="SetDocPhotoResponseMessage">
		<part name="parameters"
				element="tns:SetDocPhotoResponse"/>
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
	<message name="GetDocArtsEgaisRequestMessage">
		<part name="parameters"
				element="tns:GetDocArtsEgais"/>
	</message>
	<message name="GetDocArtsEgaisResponseMessage">
		<part name="parameters"
				element="tns:GetDocArtsEgaisResponse"/>
	</message>
	<message name="OnArtEgaisScanRequestMessage">
		<part name="parameters"
				element="tns:OnArtEgaisScan"/>
	</message>
	<message name="OnArtEgaisScanResponseMessage">
		<part name="parameters"
				element="tns:OnArtEgaisScanResponse"/>
	</message>
	<message name="OnCellScanSelectRequestMessage">
		<part name="parameters"
				element="tns:OnCellScanSelect"/>
	</message>
	<message name="OnCellScanSelectResponseMessage">
		<part name="parameters"
				element="tns:OnCellScanSelectResponse"/>
	</message>
	<message name="OnCellScanInsertRequestMessage">
		<part name="parameters"
				element="tns:OnCellScanInsert"/>
	</message>
	<message name="OnCellScanInsertResponseMessage">
		<part name="parameters"
				element="tns:OnCellScanInsertResponse"/>
	</message>
	<message name="GetArtOnBCRequestMessage">
		<part name="parameters"
				element="tns:GetArtOnBC"/>
	</message>
	<message name="GetArtOnBCResponseMessage">
		<part name="parameters"
				element="tns:GetArtOnBCResponse"/>
	</message>
	<message name="ReplaceDocRowRequestMessage">
		<part name="parameters"
				element="tns:ReplaceDocRow"/>
	</message>
	<message name="ReplaceDocRowResponseMessage">
		<part name="parameters"
				element="tns:ReplaceDocRowResponse"/>
	</message>
	<message name="SendEgaisBlankABToPrintRequestMessage">
		<part name="parameters"
				element="tns:SendEgaisBlankABToPrint"/>
	</message>
	<message name="SendEgaisBlankABToPrintResponseMessage">
		<part name="parameters"
				element="tns:SendEgaisBlankABToPrintResponse"/>
	</message>
	<message name="CreateEgaisArtRequestMessage">
		<part name="parameters"
				element="tns:CreateEgaisArt"/>
	</message>
	<message name="CreateEgaisArtResponseMessage">
		<part name="parameters"
				element="tns:CreateEgaisArtResponse"/>
	</message>
	<message name="OnDocScanRequestMessage">
		<part name="parameters"
				element="tns:OnDocScan"/>
	</message>
	<message name="OnDocScanResponseMessage">
		<part name="parameters"
				element="tns:OnDocScanResponse"/>
	</message>
	<message name="GetArtAttributesNameRequestMessage">
		<part name="parameters"
				element="tns:GetArtAttributesName"/>
	</message>
	<message name="GetArtAttributesNameResponseMessage">
		<part name="parameters"
				element="tns:GetArtAttributesNameResponse"/>
	</message>
	<message name="GetArtCellsInsertRequestMessage">
		<part name="parameters"
				element="tns:GetArtCellsInsert"/>
	</message>
	<message name="GetArtCellsInsertResponseMessage">
		<part name="parameters"
				element="tns:GetArtCellsInsertResponse"/>
	</message>
	<message name="GetNewGroupDocRowsRequestMessage">
		<part name="parameters"
				element="tns:GetNewGroupDocRows"/>
	</message>
	<message name="GetNewGroupDocRowsResponseMessage">
		<part name="parameters"
				element="tns:GetNewGroupDocRowsResponse"/>
	</message>
	<message name="OnEgaisPalletScanRequestMessage">
		<part name="parameters"
				element="tns:OnEgaisPalletScan"/>
	</message>
	<message name="OnEgaisPalletScanResponseMessage">
		<part name="parameters"
				element="tns:OnEgaisPalletScanResponse"/>
	</message>
	<message name="GetEgaisArtsRequestMessage">
		<part name="parameters"
				element="tns:GetEgaisArts"/>
	</message>
	<message name="GetEgaisArtsResponseMessage">
		<part name="parameters"
				element="tns:GetEgaisArtsResponse"/>
	</message>
	<message name="GetEgaisMarksRequestMessage">
		<part name="parameters"
				element="tns:GetEgaisMarks"/>
	</message>
	<message name="GetEgaisMarksResponseMessage">
		<part name="parameters"
				element="tns:GetEgaisMarksResponse"/>
	</message>
	<message name="GetArtPhotosRequestMessage">
		<part name="parameters"
				element="tns:GetArtPhotos"/>
	</message>
	<message name="GetArtPhotosResponseMessage">
		<part name="parameters"
				element="tns:GetArtPhotosResponse"/>
	</message>
	<message name="SetArtPhotoRequestMessage">
		<part name="parameters"
				element="tns:SetArtPhoto"/>
	</message>
	<message name="SetArtPhotoResponseMessage">
		<part name="parameters"
				element="tns:SetArtPhotoResponse"/>
	</message>
	<message name="DeleteArtPhotoRequestMessage">
		<part name="parameters"
				element="tns:DeleteArtPhoto"/>
	</message>
	<message name="DeleteArtPhotoResponseMessage">
		<part name="parameters"
				element="tns:DeleteArtPhotoResponse"/>
	</message>
	<message name="GetArtEgaisDateBottlingRequestMessage">
		<part name="parameters"
				element="tns:GetArtEgaisDateBottling"/>
	</message>
	<message name="GetArtEgaisDateBottlingResponseMessage">
		<part name="parameters"
				element="tns:GetArtEgaisDateBottlingResponse"/>
	</message>
	<message name="GetArtQtyByScalesRequestMessage">
		<part name="parameters"
				element="tns:GetArtQtyByScales"/>
	</message>
	<message name="GetArtQtyByScalesResponseMessage">
		<part name="parameters"
				element="tns:GetArtQtyByScalesResponse"/>
	</message>
	<message name="GetArtsPhotosRequestMessage">
		<part name="parameters"
				element="tns:GetArtsPhotos"/>
	</message>
	<message name="GetArtsPhotosResponseMessage">
		<part name="parameters"
				element="tns:GetArtsPhotosResponse"/>
	</message>
	<message name="SendLogsRequestMessage">
		<part name="parameters"
				element="tns:SendLogs"/>
	</message>
	<message name="SendLogsResponseMessage">
		<part name="parameters"
				element="tns:SendLogsResponse"/>
	</message>
	<message name="GetCellsRequestMessage">
		<part name="parameters"
				element="tns:GetCells"/>
	</message>
	<message name="GetCellsResponseMessage">
		<part name="parameters"
				element="tns:GetCellsResponse"/>
	</message>
	<message name="ApproveGroupDocRowsRequestMessage">
		<part name="parameters"
				element="tns:ApproveGroupDocRows"/>
	</message>
	<message name="ApproveGroupDocRowsResponseMessage">
		<part name="parameters"
				element="tns:ApproveGroupDocRowsResponse"/>
	</message>
	<message name="GetVersionRequestMessage">
		<part name="parameters"
				element="tns:GetVersion"/>
	</message>
	<message name="GetVersionResponseMessage">
		<part name="parameters"
				element="tns:GetVersionResponse"/>
	</message>
	<message name="GetWarehousesRequestMessage">
		<part name="parameters"
				element="tns:GetWarehouses"/>
	</message>
	<message name="GetWarehousesResponseMessage">
		<part name="parameters"
				element="tns:GetWarehousesResponse"/>
	</message>
	<message name="SendArtToPrint2RequestMessage">
		<part name="parameters"
				element="tns:SendArtToPrint2"/>
	</message>
	<message name="SendArtToPrint2ResponseMessage">
		<part name="parameters"
				element="tns:SendArtToPrint2Response"/>
	</message>
	<message name="GetCellContentRequestMessage">
		<part name="parameters"
				element="tns:GetCellContent"/>
	</message>
	<message name="GetCellContentResponseMessage">
		<part name="parameters"
				element="tns:GetCellContentResponse"/>
	</message>
	<message name="SendArtToPrintKMRequestMessage">
		<part name="parameters"
				element="tns:SendArtToPrintKM"/>
	</message>
	<message name="SendArtToPrintKMResponseMessage">
		<part name="parameters"
				element="tns:SendArtToPrintKMResponse"/>
	</message>
	<message name="OnArtMarkScanSelectRequestMessage">
		<part name="parameters"
				element="tns:OnArtMarkScanSelect"/>
	</message>
	<message name="OnArtMarkScanSelectResponseMessage">
		<part name="parameters"
				element="tns:OnArtMarkScanSelectResponse"/>
	</message>
	<message name="OnArtMarkScanInsertRequestMessage">
		<part name="parameters"
				element="tns:OnArtMarkScanInsert"/>
	</message>
	<message name="OnArtMarkScanInsertResponseMessage">
		<part name="parameters"
				element="tns:OnArtMarkScanInsertResponse"/>
	</message>
	<message name="GetSelectedQtyGroupDocRowsRequestMessage">
		<part name="parameters"
				element="tns:GetSelectedQtyGroupDocRows"/>
	</message>
	<message name="GetSelectedQtyGroupDocRowsResponseMessage">
		<part name="parameters"
				element="tns:GetSelectedQtyGroupDocRowsResponse"/>
	</message>
	<message name="GetDocStepsRequestMessage">
		<part name="parameters"
				element="tns:GetDocSteps"/>
	</message>
	<message name="GetDocStepsResponseMessage">
		<part name="parameters"
				element="tns:GetDocStepsResponse"/>
	</message>
	<message name="GetStepsRequestMessage">
		<part name="parameters"
				element="tns:GetSteps"/>
	</message>
	<message name="GetStepsResponseMessage">
		<part name="parameters"
				element="tns:GetStepsResponse"/>
	</message>
	<message name="GetUserBooksRequestMessage">
		<part name="parameters"
				element="tns:GetUserBooks"/>
	</message>
	<message name="GetUserBooksResponseMessage">
		<part name="parameters"
				element="tns:GetUserBooksResponse"/>
	</message>
	<message name="OnWriteRowStepValuesRequestMessage">
		<part name="parameters"
				element="tns:OnWriteRowStepValues"/>
	</message>
	<message name="OnWriteRowStepValuesResponseMessage">
		<part name="parameters"
				element="tns:OnWriteRowStepValuesResponse"/>
	</message>
	<message name="GetBarcodeTemplatesRequestMessage">
		<part name="parameters"
				element="tns:GetBarcodeTemplates"/>
	</message>
	<message name="GetBarcodeTemplatesResponseMessage">
		<part name="parameters"
				element="tns:GetBarcodeTemplatesResponse"/>
	</message>
	<message name="GetArtMarksRequestMessage">
		<part name="parameters"
				element="tns:GetArtMarks"/>
	</message>
	<message name="GetArtMarksResponseMessage">
		<part name="parameters"
				element="tns:GetArtMarksResponse"/>
	</message>
	<message name="GetTemplates_EGAISRequestMessage">
		<part name="parameters"
				element="tns:GetTemplates_EGAIS"/>
	</message>
	<message name="GetTemplates_EGAISResponseMessage">
		<part name="parameters"
				element="tns:GetTemplates_EGAISResponse"/>
	</message>
	<message name="CreateDoc_EGAISRequestMessage">
		<part name="parameters"
				element="tns:CreateDoc_EGAIS"/>
	</message>
	<message name="CreateDoc_EGAISResponseMessage">
		<part name="parameters"
				element="tns:CreateDoc_EGAISResponse"/>
	</message>
	<message name="GetDocHeads_EGAISRequestMessage">
		<part name="parameters"
				element="tns:GetDocHeads_EGAIS"/>
	</message>
	<message name="GetDocHeads_EGAISResponseMessage">
		<part name="parameters"
				element="tns:GetDocHeads_EGAISResponse"/>
	</message>
	<message name="WriteDoc_EGAISRequestMessage">
		<part name="parameters"
				element="tns:WriteDoc_EGAIS"/>
	</message>
	<message name="WriteDoc_EGAISResponseMessage">
		<part name="parameters"
				element="tns:WriteDoc_EGAISResponse"/>
	</message>
	<message name="OnArtEgaisScan_EGAISRequestMessage">
		<part name="parameters"
				element="tns:OnArtEgaisScan_EGAIS"/>
	</message>
	<message name="OnArtEgaisScan_EGAISResponseMessage">
		<part name="parameters"
				element="tns:OnArtEgaisScan_EGAISResponse"/>
	</message>
	<message name="OnNewPack_EGAISRequestMessage">
		<part name="parameters"
				element="tns:OnNewPack_EGAIS"/>
	</message>
	<message name="OnNewPack_EGAISResponseMessage">
		<part name="parameters"
				element="tns:OnNewPack_EGAISResponse"/>
	</message>
	<message name="OnWritePackSelect_EGAISRequestMessage">
		<part name="parameters"
				element="tns:OnWritePackSelect_EGAIS"/>
	</message>
	<message name="OnWritePackSelect_EGAISResponseMessage">
		<part name="parameters"
				element="tns:OnWritePackSelect_EGAISResponse"/>
	</message>
	<message name="OnWriteBoxSelect_EGAISRequestMessage">
		<part name="parameters"
				element="tns:OnWriteBoxSelect_EGAIS"/>
	</message>
	<message name="OnWriteBoxSelect_EGAISResponseMessage">
		<part name="parameters"
				element="tns:OnWriteBoxSelect_EGAISResponse"/>
	</message>
	<message name="SetDocCarantin_EGAISRequestMessage">
		<part name="parameters"
				element="tns:SetDocCarantin_EGAIS"/>
	</message>
	<message name="SetDocCarantin_EGAISResponseMessage">
		<part name="parameters"
				element="tns:SetDocCarantin_EGAISResponse"/>
	</message>
	<message name="OnDocScan_EGAISRequestMessage">
		<part name="parameters"
				element="tns:OnDocScan_EGAIS"/>
	</message>
	<message name="OnDocScan_EGAISResponseMessage">
		<part name="parameters"
				element="tns:OnDocScan_EGAISResponse"/>
	</message>
	<message name="GetQtyInPackRequestMessage">
		<part name="parameters"
				element="tns:GetQtyInPack"/>
	</message>
	<message name="GetQtyInPackResponseMessage">
		<part name="parameters"
				element="tns:GetQtyInPackResponse"/>
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
		<operation name="SetRowPhoto">
			<input message="tns:SetRowPhotoRequestMessage"/>
			<output message="tns:SetRowPhotoResponseMessage"/>
		</operation>
		<operation name="GenerateNewBC">
			<input message="tns:GenerateNewBCRequestMessage"/>
			<output message="tns:GenerateNewBCResponseMessage"/>
		</operation>
		<operation name="GetArtCells">
			<input message="tns:GetArtCellsRequestMessage"/>
			<output message="tns:GetArtCellsResponseMessage"/>
		</operation>
		<operation name="GetArtCellsSelect">
			<input message="tns:GetArtCellsSelectRequestMessage"/>
			<output message="tns:GetArtCellsSelectResponseMessage"/>
		</operation>
		<operation name="FastAccessDoc">
			<input message="tns:FastAccessDocRequestMessage"/>
			<output message="tns:FastAccessDocResponseMessage"/>
		</operation>
		<operation name="GetUnits">
			<input message="tns:GetUnitsRequestMessage"/>
			<output message="tns:GetUnitsResponseMessage"/>
		</operation>
		<operation name="SetDocPhoto">
			<input message="tns:SetDocPhotoRequestMessage"/>
			<output message="tns:SetDocPhotoResponseMessage"/>
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
		<operation name="GetDocArtsEgais">
			<input message="tns:GetDocArtsEgaisRequestMessage"/>
			<output message="tns:GetDocArtsEgaisResponseMessage"/>
		</operation>
		<operation name="OnArtEgaisScan">
			<input message="tns:OnArtEgaisScanRequestMessage"/>
			<output message="tns:OnArtEgaisScanResponseMessage"/>
		</operation>
		<operation name="OnCellScanSelect">
			<input message="tns:OnCellScanSelectRequestMessage"/>
			<output message="tns:OnCellScanSelectResponseMessage"/>
		</operation>
		<operation name="OnCellScanInsert">
			<input message="tns:OnCellScanInsertRequestMessage"/>
			<output message="tns:OnCellScanInsertResponseMessage"/>
		</operation>
		<operation name="GetArtOnBC">
			<input message="tns:GetArtOnBCRequestMessage"/>
			<output message="tns:GetArtOnBCResponseMessage"/>
		</operation>
		<operation name="ReplaceDocRow">
			<input message="tns:ReplaceDocRowRequestMessage"/>
			<output message="tns:ReplaceDocRowResponseMessage"/>
		</operation>
		<operation name="SendEgaisBlankABToPrint">
			<input message="tns:SendEgaisBlankABToPrintRequestMessage"/>
			<output message="tns:SendEgaisBlankABToPrintResponseMessage"/>
		</operation>
		<operation name="CreateEgaisArt">
			<input message="tns:CreateEgaisArtRequestMessage"/>
			<output message="tns:CreateEgaisArtResponseMessage"/>
		</operation>
		<operation name="OnDocScan">
			<input message="tns:OnDocScanRequestMessage"/>
			<output message="tns:OnDocScanResponseMessage"/>
		</operation>
		<operation name="GetArtAttributesName">
			<input message="tns:GetArtAttributesNameRequestMessage"/>
			<output message="tns:GetArtAttributesNameResponseMessage"/>
		</operation>
		<operation name="GetArtCellsInsert">
			<input message="tns:GetArtCellsInsertRequestMessage"/>
			<output message="tns:GetArtCellsInsertResponseMessage"/>
		</operation>
		<operation name="GetNewGroupDocRows">
			<input message="tns:GetNewGroupDocRowsRequestMessage"/>
			<output message="tns:GetNewGroupDocRowsResponseMessage"/>
		</operation>
		<operation name="OnEgaisPalletScan">
			<input message="tns:OnEgaisPalletScanRequestMessage"/>
			<output message="tns:OnEgaisPalletScanResponseMessage"/>
		</operation>
		<operation name="GetEgaisArts">
			<input message="tns:GetEgaisArtsRequestMessage"/>
			<output message="tns:GetEgaisArtsResponseMessage"/>
		</operation>
		<operation name="GetEgaisMarks">
			<input message="tns:GetEgaisMarksRequestMessage"/>
			<output message="tns:GetEgaisMarksResponseMessage"/>
		</operation>
		<operation name="GetArtPhotos">
			<input message="tns:GetArtPhotosRequestMessage"/>
			<output message="tns:GetArtPhotosResponseMessage"/>
		</operation>
		<operation name="SetArtPhoto">
			<input message="tns:SetArtPhotoRequestMessage"/>
			<output message="tns:SetArtPhotoResponseMessage"/>
		</operation>
		<operation name="DeleteArtPhoto">
			<input message="tns:DeleteArtPhotoRequestMessage"/>
			<output message="tns:DeleteArtPhotoResponseMessage"/>
		</operation>
		<operation name="GetArtEgaisDateBottling">
			<input message="tns:GetArtEgaisDateBottlingRequestMessage"/>
			<output message="tns:GetArtEgaisDateBottlingResponseMessage"/>
		</operation>
		<operation name="GetArtQtyByScales">
			<input message="tns:GetArtQtyByScalesRequestMessage"/>
			<output message="tns:GetArtQtyByScalesResponseMessage"/>
		</operation>
		<operation name="GetArtsPhotos">
			<input message="tns:GetArtsPhotosRequestMessage"/>
			<output message="tns:GetArtsPhotosResponseMessage"/>
		</operation>
		<operation name="SendLogs">
			<input message="tns:SendLogsRequestMessage"/>
			<output message="tns:SendLogsResponseMessage"/>
		</operation>
		<operation name="GetCells">
			<input message="tns:GetCellsRequestMessage"/>
			<output message="tns:GetCellsResponseMessage"/>
		</operation>
		<operation name="ApproveGroupDocRows">
			<input message="tns:ApproveGroupDocRowsRequestMessage"/>
			<output message="tns:ApproveGroupDocRowsResponseMessage"/>
		</operation>
		<operation name="GetVersion">
			<input message="tns:GetVersionRequestMessage"/>
			<output message="tns:GetVersionResponseMessage"/>
		</operation>
		<operation name="GetWarehouses">
			<input message="tns:GetWarehousesRequestMessage"/>
			<output message="tns:GetWarehousesResponseMessage"/>
		</operation>
		<operation name="SendArtToPrint2">
			<input message="tns:SendArtToPrint2RequestMessage"/>
			<output message="tns:SendArtToPrint2ResponseMessage"/>
		</operation>
		<operation name="GetCellContent">
			<input message="tns:GetCellContentRequestMessage"/>
			<output message="tns:GetCellContentResponseMessage"/>
		</operation>
		<operation name="SendArtToPrintKM">
			<input message="tns:SendArtToPrintKMRequestMessage"/>
			<output message="tns:SendArtToPrintKMResponseMessage"/>
		</operation>
		<operation name="OnArtMarkScanSelect">
			<input message="tns:OnArtMarkScanSelectRequestMessage"/>
			<output message="tns:OnArtMarkScanSelectResponseMessage"/>
		</operation>
		<operation name="OnArtMarkScanInsert">
			<input message="tns:OnArtMarkScanInsertRequestMessage"/>
			<output message="tns:OnArtMarkScanInsertResponseMessage"/>
		</operation>
		<operation name="GetSelectedQtyGroupDocRows">
			<input message="tns:GetSelectedQtyGroupDocRowsRequestMessage"/>
			<output message="tns:GetSelectedQtyGroupDocRowsResponseMessage"/>
		</operation>
		<operation name="GetDocSteps">
			<input message="tns:GetDocStepsRequestMessage"/>
			<output message="tns:GetDocStepsResponseMessage"/>
		</operation>
		<operation name="GetSteps">
			<input message="tns:GetStepsRequestMessage"/>
			<output message="tns:GetStepsResponseMessage"/>
		</operation>
		<operation name="GetUserBooks">
			<input message="tns:GetUserBooksRequestMessage"/>
			<output message="tns:GetUserBooksResponseMessage"/>
		</operation>
		<operation name="OnWriteRowStepValues">
			<input message="tns:OnWriteRowStepValuesRequestMessage"/>
			<output message="tns:OnWriteRowStepValuesResponseMessage"/>
		</operation>
		<operation name="GetBarcodeTemplates">
			<input message="tns:GetBarcodeTemplatesRequestMessage"/>
			<output message="tns:GetBarcodeTemplatesResponseMessage"/>
		</operation>
		<operation name="GetArtMarks">
			<input message="tns:GetArtMarksRequestMessage"/>
			<output message="tns:GetArtMarksResponseMessage"/>
		</operation>
		<operation name="GetTemplates_EGAIS">
			<input message="tns:GetTemplates_EGAISRequestMessage"/>
			<output message="tns:GetTemplates_EGAISResponseMessage"/>
		</operation>
		<operation name="CreateDoc_EGAIS">
			<input message="tns:CreateDoc_EGAISRequestMessage"/>
			<output message="tns:CreateDoc_EGAISResponseMessage"/>
		</operation>
		<operation name="GetDocHeads_EGAIS">
			<input message="tns:GetDocHeads_EGAISRequestMessage"/>
			<output message="tns:GetDocHeads_EGAISResponseMessage"/>
		</operation>
		<operation name="WriteDoc_EGAIS">
			<input message="tns:WriteDoc_EGAISRequestMessage"/>
			<output message="tns:WriteDoc_EGAISResponseMessage"/>
		</operation>
		<operation name="OnArtEgaisScan_EGAIS">
			<input message="tns:OnArtEgaisScan_EGAISRequestMessage"/>
			<output message="tns:OnArtEgaisScan_EGAISResponseMessage"/>
		</operation>
		<operation name="OnNewPack_EGAIS">
			<input message="tns:OnNewPack_EGAISRequestMessage"/>
			<output message="tns:OnNewPack_EGAISResponseMessage"/>
		</operation>
		<operation name="OnWritePackSelect_EGAIS">
			<input message="tns:OnWritePackSelect_EGAISRequestMessage"/>
			<output message="tns:OnWritePackSelect_EGAISResponseMessage"/>
		</operation>
		<operation name="OnWriteBoxSelect_EGAIS">
			<input message="tns:OnWriteBoxSelect_EGAISRequestMessage"/>
			<output message="tns:OnWriteBoxSelect_EGAISResponseMessage"/>
		</operation>
		<operation name="SetDocCarantin_EGAIS">
			<input message="tns:SetDocCarantin_EGAISRequestMessage"/>
			<output message="tns:SetDocCarantin_EGAISResponseMessage"/>
		</operation>
		<operation name="OnDocScan_EGAIS">
			<input message="tns:OnDocScan_EGAISRequestMessage"/>
			<output message="tns:OnDocScan_EGAISResponseMessage"/>
		</operation>
		<operation name="GetQtyInPack">
			<input message="tns:GetQtyInPackRequestMessage"/>
			<output message="tns:GetQtyInPackResponseMessage"/>
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
		<operation name="GetArtCellsSelect">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtCellsSelect"/>
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
		<operation name="GetDocArtsEgais">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetDocArtsEgais"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnArtEgaisScan">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnArtEgaisScan"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnCellScanSelect">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnCellScanSelect"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnCellScanInsert">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnCellScanInsert"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtOnBC">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtOnBC"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="ReplaceDocRow">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:ReplaceDocRow"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="SendEgaisBlankABToPrint">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SendEgaisBlankABToPrint"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="CreateEgaisArt">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:CreateEgaisArt"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnDocScan">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnDocScan"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtAttributesName">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtAttributesName"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtCellsInsert">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtCellsInsert"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetNewGroupDocRows">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetNewGroupDocRows"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnEgaisPalletScan">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnEgaisPalletScan"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetEgaisArts">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetEgaisArts"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetEgaisMarks">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetEgaisMarks"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtPhotos">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtPhotos"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="SetArtPhoto">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SetArtPhoto"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="DeleteArtPhoto">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:DeleteArtPhoto"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtEgaisDateBottling">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtEgaisDateBottling"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtQtyByScales">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtQtyByScales"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtsPhotos">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtsPhotos"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="SendLogs">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SendLogs"/>
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
		<operation name="ApproveGroupDocRows">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:ApproveGroupDocRows"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetVersion">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetVersion"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetWarehouses">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetWarehouses"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="SendArtToPrint2">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SendArtToPrint2"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetCellContent">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetCellContent"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="SendArtToPrintKM">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SendArtToPrintKM"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnArtMarkScanSelect">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnArtMarkScanSelect"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnArtMarkScanInsert">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnArtMarkScanInsert"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetSelectedQtyGroupDocRows">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetSelectedQtyGroupDocRows"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetDocSteps">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetDocSteps"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetSteps">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetSteps"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetUserBooks">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetUserBooks"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnWriteRowStepValues">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnWriteRowStepValues"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetBarcodeTemplates">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetBarcodeTemplates"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtMarks">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtMarks"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetTemplates_EGAIS">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetTemplates_EGAIS"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="CreateDoc_EGAIS">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:CreateDoc_EGAIS"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetDocHeads_EGAIS">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetDocHeads_EGAIS"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="WriteDoc_EGAIS">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:WriteDoc_EGAIS"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnArtEgaisScan_EGAIS">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnArtEgaisScan_EGAIS"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnNewPack_EGAIS">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnNewPack_EGAIS"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnWritePackSelect_EGAIS">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnWritePackSelect_EGAIS"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnWriteBoxSelect_EGAIS">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnWriteBoxSelect_EGAIS"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="SetDocCarantin_EGAIS">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SetDocCarantin_EGAIS"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnDocScan_EGAIS">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnDocScan_EGAIS"/>
			<input>
				<soapbind:body use="literal"/>
			</input>
			<output>
				<soapbind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetQtyInPack">
			<soapbind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetQtyInPack"/>
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
		<operation name="GetArtCellsSelect">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtCellsSelect"/>
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
		<operation name="GetDocArtsEgais">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetDocArtsEgais"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnArtEgaisScan">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnArtEgaisScan"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnCellScanSelect">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnCellScanSelect"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnCellScanInsert">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnCellScanInsert"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtOnBC">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtOnBC"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="ReplaceDocRow">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:ReplaceDocRow"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="SendEgaisBlankABToPrint">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SendEgaisBlankABToPrint"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="CreateEgaisArt">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:CreateEgaisArt"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnDocScan">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnDocScan"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtAttributesName">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtAttributesName"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtCellsInsert">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtCellsInsert"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetNewGroupDocRows">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetNewGroupDocRows"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnEgaisPalletScan">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnEgaisPalletScan"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetEgaisArts">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetEgaisArts"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetEgaisMarks">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetEgaisMarks"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtPhotos">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtPhotos"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="SetArtPhoto">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SetArtPhoto"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="DeleteArtPhoto">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:DeleteArtPhoto"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtEgaisDateBottling">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtEgaisDateBottling"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtQtyByScales">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtQtyByScales"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtsPhotos">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtsPhotos"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="SendLogs">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SendLogs"/>
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
		<operation name="ApproveGroupDocRows">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:ApproveGroupDocRows"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetVersion">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetVersion"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetWarehouses">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetWarehouses"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="SendArtToPrint2">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SendArtToPrint2"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetCellContent">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetCellContent"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="SendArtToPrintKM">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SendArtToPrintKM"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnArtMarkScanSelect">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnArtMarkScanSelect"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnArtMarkScanInsert">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnArtMarkScanInsert"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetSelectedQtyGroupDocRows">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetSelectedQtyGroupDocRows"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetDocSteps">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetDocSteps"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetSteps">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetSteps"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetUserBooks">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetUserBooks"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnWriteRowStepValues">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnWriteRowStepValues"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetBarcodeTemplates">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetBarcodeTemplates"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetArtMarks">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetArtMarks"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetTemplates_EGAIS">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetTemplates_EGAIS"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="CreateDoc_EGAIS">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:CreateDoc_EGAIS"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetDocHeads_EGAIS">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetDocHeads_EGAIS"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="WriteDoc_EGAIS">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:WriteDoc_EGAIS"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnArtEgaisScan_EGAIS">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnArtEgaisScan_EGAIS"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnNewPack_EGAIS">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnNewPack_EGAIS"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnWritePackSelect_EGAIS">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnWritePackSelect_EGAIS"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnWriteBoxSelect_EGAIS">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnWriteBoxSelect_EGAIS"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="SetDocCarantin_EGAIS">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:SetDocCarantin_EGAIS"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="OnDocScan_EGAIS">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:OnDocScan_EGAIS"/>
			<input>
				<soap12bind:body use="literal"/>
			</input>
			<output>
				<soap12bind:body use="literal"/>
			</output>
		</operation>
		<operation name="GetQtyInPack">
			<soap12bind:operation style="document"
					soapAction="http://www.data-mobile.ru#DataMobileExch:GetQtyInPack"/>
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
