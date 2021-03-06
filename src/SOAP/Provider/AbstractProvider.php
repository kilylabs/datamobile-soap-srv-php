<?php

namespace Kily\DM\SOAP\Provider;

abstract class AbstractProvider
{
    abstract public function SOAP_DMServerInfo();
    abstract public function SOAP_IsNewData($SN, $UserName);
    abstract public function SOAP_GetNewArts($SN, $UserName);
    abstract public function SOAP_GetTemplates($SN, $UserName);
    abstract public function SOAP_GetUsers($SN, $UserName);
    abstract public function SOAP_GetDocHeads($SN, $UserName, $DMDocsIDs);
    abstract public function SOAP_GetDocRowsSelect($SN, $UserName, $DocOutID);
    abstract public function SOAP_GetDocRowsInsert($SN, $UserName, $DocOutID);
    abstract public function SOAP_OnArtScanSelect($SN, $UserName, $Barcode, $DocOutID, $Cell, $Params);
    abstract public function SOAP_OnArtScanInsert($SN, $UserName, $Barcode, $DocOutID, $Cell, $Params);
    abstract public function SOAP_OnWriteRecSelect($SN, $UserName, $DocOutID, $DocRec);
    abstract public function SOAP_OnWriteRecInsert($SN, $UserName, $DocOutID, $DocRec);
    abstract public function SOAP_OnCellScan($SN, $UserName, $Barcode, $DocOutID);
    abstract public function SOAP_OnNewPack($SN, $UserName, $DocOutID);
    abstract public function SOAP_DeleteDoc($SN, $UserName, $DocOutID);
    abstract public function SOAP_ClearDoc($SN, $UserName, $DocOutID);
    abstract public function SOAP_ReopenDoc($SN, $UserName, $DocOutID);
    abstract public function SOAP_SetDocComment($SN, $UserName, $DocOutID, $Comment);
    abstract public function SOAP_SetDocNumber($SN, $UserName, $DocOutID, $Number);
    abstract public function SOAP_WriteDoc($SN, $UserName, $DocHead, $DocRowsSelect, $DocRowsInsert);
    abstract public function SOAP_CreateDoc($SN, $UserName, $DocOutID, $TemplateID);
    abstract public function SOAP_GetArtRest($SN, $UserName, $ArtID, $Params);
    abstract public function SOAP_Login($SN, $UserName);
    abstract public function SOAP_GetDocArts($SN, $UserName, $DocOutID);
    abstract public function SOAP_GetClients($SN, $UserName);
    abstract public function SOAP_SetDocClient($SN, $UserName, $DocOutID, $ClientID);
    abstract public function SOAP_IsNewDocs($SN, $UserName);
    abstract public function SOAP_UpdateArt($SN, $UserName, $Art);
    abstract public function SOAP_UpdateBarcode($SN, $UserName, $ArtID, $Barcode);
    abstract public function SOAP_GetArtsDrafts($SN, $UserName);
    abstract public function SOAP_DeleteArt($SN, $UserName, $Art);
    abstract public function SOAP_DeleteBarcode($SN, $UserName, $ArtID, $Barcode);
    abstract public function SOAP_OnCommitAutoInsertOnSelect($SN, $UserName, $Barcode, $DocOutID);
    abstract public function SOAP_FastAccess($SN, $UserName, $Barcode);
    abstract public function SOAP_CountDiscount($SN, $UserName, $Barcode, $DocOutID);
    abstract public function SOAP_GetBalance($SN, $UserName, $ArtID);
    abstract public function SOAP_Logout($SN, $UserName);
    abstract public function SOAP_GetPicture($ArtID);
    abstract public function SOAP_OnPalletScan($SN, $UserName, $Barcode, $DocOutID, $Cell);
    abstract public function SOAP_SetRowPhoto($SN, $UserName, $DocID, $ArtID, $Barcode, $Byte);
    abstract public function SOAP_GenerateNewBC($SN, $UserName, $ArtID, $UnitID, $P1, $P2, $BarcodeQuant);
    abstract public function SOAP_GetArtCells($SN, $UserName, $DocID, $ArtID);
    abstract public function SOAP_GetArtCellsSelect($SN, $UserName, $DocID, $ArtID);
    abstract public function SOAP_FastAccessDoc($SN, $UserName, $DocID, $Barcode);
    abstract public function SOAP_GetUnits($SN, $UserName);
    abstract public function SOAP_SetDocPhoto($SN, $UserName, $DocID, $Byte);
    abstract public function SOAP_SendArtToPrint($SN, $UserName, $ArtID, $Barcode, $Count);
    abstract public function SOAP_SendDocToPrint($SN, $UserName, $DocID);
    abstract public function SOAP_SendPackToPrint($SN, $UserName, $DocID, $Pack);
    abstract public function SOAP_GetDocArtsEgais($SN, $UserName, $DocID);
    abstract public function SOAP_OnArtEgaisScan($SN, $UserName, $ArtID, $Barcode, $PDFBarcode, $DocOutID, $Cell);
    abstract public function SOAP_OnCellScanSelect($SN, $UserName, $DocOutID, $CellBC, $ArtID, $Barcode);
    abstract public function SOAP_OnCellScanInsert($SN, $UserName, $DocOutID, $CellBC, $ArtID, $Barcode);
    abstract public function SOAP_GetArtOnBC($SN, $UserName, $Barcode);
    abstract public function SOAP_ReplaceDocRow($SN, $UserName, $DocOutID, $DMDocRec);
    abstract public function SOAP_SendEgaisBlankABToPrint($SN, $UserName, $DocID, $ArtID, $Barcode, $Alcocode, $BlankA, $BlankB);
    abstract public function SOAP_CreateEgaisArt($SN, $UserName, $DMArt, $DMEgaisArt);
    abstract public function SOAP_OnDocScan($SN, $UserName, $Barcode, $TemplateID);
    abstract public function SOAP_GetArtAttributesName($SN, $UserName);
    abstract public function SOAP_GetArtCellsInsert($SN, $UserName, $DocID, $ArtID);
    abstract public function SOAP_GetNewGroupDocRows($SN, $UserName, $DocOutID);
    abstract public function SOAP_OnEgaisPalletScan($SN, $UserName, $Barcode, $DocOutID, $Cell);
    abstract public function SOAP_GetEgaisArts($SN, $UserName);
    abstract public function SOAP_GetEgaisMarks($SN, $UserName);
    abstract public function SOAP_GetArtPhotos($SN, $UserName, $ArtID);
    abstract public function SOAP_SetArtPhoto($SN, $UserName, $DMImage);
    abstract public function SOAP_DeleteArtPhoto($SN, $UserName, $ArtID, $DMImageID);
    abstract public function SOAP_GetArtEgaisDateBottling($SN, $UserName, $DocOutID, $ArtID, $Barcode, $PDFBarcode);
    abstract public function SOAP_GetArtQtyByScales($SN, $UserName, $DocOutID, $ArtID, $Cell, $ArtSN, $ScalesBarcode);
    abstract public function SOAP_GetArtsPhotos($SN, $UserName);
    abstract public function SOAP_SendLogs($SN, $UserName, $Logs);
    abstract public function SOAP_GetCells($SN, $UserName);
    abstract public function SOAP_ApproveGroupDocRows($SN, $UserName, $DocOutID, $DMDocsIDs);
    abstract public function SOAP_GetVersion();
    abstract public function SOAP_GetWarehouses($SN, $UserName);
    abstract public function SOAP_SendArtToPrint2($SN, $UserName, $ArtID, $Barcode, $Count, $QtyInt, $QtyFrac);
    abstract public function SOAP_GetCellContent($SN, $UserName, $CellBC);
    abstract public function SOAP_SendArtToPrintKM($SN, $UserName, $ArtID, $Barcode, $Count);
    abstract public function SOAP_OnArtMarkScanSelect($Params);
    abstract public function SOAP_OnArtMarkScanInsert($Params);
    abstract public function SOAP_GetSelectedQtyGroupDocRows($SN, $UserName, $DocOutID, $LastRequestDate);
    abstract public function SOAP_GetDocSteps($SN, $UserName);
    abstract public function SOAP_GetSteps($SN, $UserName);
    abstract public function SOAP_GetUserBooks($SN, $UserName, $DMStepId);
    abstract public function SOAP_OnWriteRowStepValues($SN, $UserName, $DMStepValueList);
    abstract public function SOAP_GetBarcodeTemplates($Params);
    abstract public function SOAP_GetArtMarks($SN, $UserName);
    abstract public function SOAP_GetTemplates_EGAIS($SN, $UserName);
    abstract public function SOAP_CreateDoc_EGAIS($SN, $UserName, $DocOutID, $TemplateID);
    abstract public function SOAP_GetDocHeads_EGAIS($SN, $UserName, $DMDocsIDs);
    abstract public function SOAP_WriteDoc_EGAIS($SN, $UserName, $DocHead_EGAIS, $DocRowsSelect);
    abstract public function SOAP_OnArtEgaisScan_EGAIS($SN, $UserName, $ArtID, $Barcode, $BarcodeBox, $PDFBarcode, $DocOutID, $Cell, $DataMatrix);
    abstract public function SOAP_OnNewPack_EGAIS($SN, $UserName, $DocOutID);
    abstract public function SOAP_OnWritePackSelect_EGAIS($SN, $UserName, $DocOutID, $DocRowsSelect);
    abstract public function SOAP_OnWriteBoxSelect_EGAIS($SN, $UserName, $DocOutID, $DocRowsSelect);
    abstract public function SOAP_SetDocCarantin_EGAIS($SN, $UserName, $DocOutID);
    abstract public function SOAP_OnDocScan_EGAIS($SN, $UserName, $Barcode);
    abstract public function SOAP_GetQtyInPack($Params);
}