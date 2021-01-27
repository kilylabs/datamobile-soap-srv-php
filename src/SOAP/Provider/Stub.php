<?php

namespace Kily\DM\SOAP\Provider;

use SoapFault;

class Stub extends AbstractProvider
{
    public function SOAP_DMServerInfo()
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_IsNewData($SN, $UserName)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetNewArts($SN, $UserName)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetTemplates($SN, $UserName)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetUsers($SN, $UserName)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetDocHeads($SN, $UserName, $DMDocsIDs)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetDocRowsSelect($SN, $UserName, $DocOutID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetDocRowsInsert($SN, $UserName, $DocOutID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_OnArtScanSelect($SN, $UserName, $Barcode, $DocOutID, $Cell, $Params)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_OnArtScanInsert($SN, $UserName, $Barcode, $DocOutID, $Cell, $Params)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_OnWriteRecSelect($SN, $UserName, $DocOutID, $DocRec)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_OnWriteRecInsert($SN, $UserName, $DocOutID, $DocRec)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_OnCellScan($SN, $UserName, $Barcode, $DocOutID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_OnNewPack($SN, $UserName, $DocOutID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_DeleteDoc($SN, $UserName, $DocOutID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_ClearDoc($SN, $UserName, $DocOutID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_ReopenDoc($SN, $UserName, $DocOutID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_SetDocComment($SN, $UserName, $DocOutID, $Comment)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_SetDocNumber($SN, $UserName, $DocOutID, $Number)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_WriteDoc($SN, $UserName, $DocHead, $DocRowsSelect, $DocRowsInsert, $Params)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_CreateDoc($SN, $UserName, $DocOutID, $TemplateID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetArtRest($SN, $UserName, $ArtID, $Params)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_Login($SN, $UserName)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetDocArts($SN, $UserName, $DocOutID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetClients($SN, $UserName)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_SetDocClient($SN, $UserName, $DocOutID, $ClientID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_IsNewDocs($SN, $UserName)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_UpdateArt($SN, $UserName, $Art)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_UpdateBarcode($SN, $UserName, $ArtID, $Barcode)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetArtsDrafts($SN, $UserName)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_DeleteArt($SN, $UserName, $Art)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_DeleteBarcode($SN, $UserName, $ArtID, $Barcode)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_OnCommitAutoInsertOnSelect($SN, $UserName, $Barcode, $DocOutID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_FastAccess($SN, $UserName, $Barcode, $Params)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_CountDiscount($SN, $UserName, $Barcode, $DocOutID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetBalance($SN, $UserName, $ArtID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_Logout($SN, $UserName)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetPicture($ArtID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_OnPalletScan($SN, $UserName, $Barcode, $DocOutID, $Cell, $Params)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_SetRowPhoto($SN, $UserName, $DocID, $ArtID, $Barcode, $Byte)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GenerateNewBC($SN, $UserName, $ArtID, $UnitID, $P1, $P2, $BarcodeQuant, $Params)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetArtCells($SN, $UserName, $DocID, $ArtID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetArtCellsSelect($SN, $UserName, $DocID, $ArtID, $Params)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_FastAccessDoc($SN, $UserName, $DocID, $Barcode, $Params)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetUnits($SN, $UserName)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_SetDocPhoto($SN, $UserName, $DocID, $Byte)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_SendArtToPrint($SN, $UserName, $ArtID, $Barcode, $Count, $Params)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_SendDocToPrint($SN, $UserName, $DocID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_SendPackToPrint($SN, $UserName, $DocID, $Pack)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetDocArtsEgais($SN, $UserName, $DocID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_OnArtEgaisScan($SN, $UserName, $ArtID, $Barcode, $PDFBarcode, $DocOutID, $Cell)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_OnCellScanSelect($SN, $UserName, $DocOutID, $CellBC, $ArtID, $Barcode)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_OnCellScanInsert($SN, $UserName, $DocOutID, $CellBC, $ArtID, $Barcode)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetArtOnBC($SN, $UserName, $Barcode)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_ReplaceDocRow($SN, $UserName, $DocOutID, $DMDocRec)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_SendEgaisBlankABToPrint($SN, $UserName, $DocID, $ArtID, $Barcode, $Alcocode, $BlankA, $BlankB)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_CreateEgaisArt($SN, $UserName, $DMArt, $DMEgaisArt)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_OnDocScan($SN, $UserName, $Barcode, $TemplateID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetArtAttributesName($SN, $UserName)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetArtCellsInsert($SN, $UserName, $DocID, $ArtID, $Params)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetNewGroupDocRows($SN, $UserName, $DocOutID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_OnEgaisPalletScan($SN, $UserName, $Barcode, $DocOutID, $Cell)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetEgaisArts($SN, $UserName)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetEgaisMarks($SN, $UserName)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetArtPhotos($SN, $UserName, $ArtID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_SetArtPhoto($SN, $UserName, $DMImage)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_DeleteArtPhoto($SN, $UserName, $ArtID, $DMImageID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetArtEgaisDateBottling($SN, $UserName, $DocOutID, $ArtID, $Barcode, $PDFBarcode)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetArtQtyByScales($SN, $UserName, $DocOutID, $ArtID, $Cell, $ArtSN, $ScalesBarcode)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetArtsPhotos($SN, $UserName)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_SendLogs($SN, $UserName, $Logs)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetCells($SN, $UserName)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_ApproveGroupDocRows($SN, $UserName, $DocOutID, $DMDocsIDs)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetVersion()
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetWarehouses($SN, $UserName)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_SendArtToPrint2($SN, $UserName, $ArtID, $Barcode, $Count, $QtyInt, $QtyFrac)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetCellContent($SN, $UserName, $CellBC)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_SendArtToPrintKM($SN, $UserName, $ArtID, $Barcode, $Count)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_OnArtMarkScanSelect($Params)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_OnArtMarkScanInsert($Params)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetSelectedQtyGroupDocRows($SN, $UserName, $DocOutID, $LastRequestDate)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetDocSteps($SN, $UserName)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetSteps($SN, $UserName)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetUserBooks($SN, $UserName, $DMStepId)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_OnWriteRowStepValues($SN, $UserName, $DMStepValueList)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetBarcodeTemplates($Params)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetArtMarks($SN, $UserName)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetTemplates_EGAIS($SN, $UserName)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_CreateDoc_EGAIS($SN, $UserName, $DocOutID, $TemplateID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetDocHeads_EGAIS($SN, $UserName, $DMDocsIDs)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_WriteDoc_EGAIS($SN, $UserName, $DocHead_EGAIS, $DocRowsSelect)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_OnArtEgaisScan_EGAIS($SN, $UserName, $ArtID, $Barcode, $BarcodeBox, $PDFBarcode, $DocOutID, $Cell, $DataMatrix)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_OnNewPack_EGAIS($SN, $UserName, $DocOutID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_OnWritePackSelect_EGAIS($SN, $UserName, $DocOutID, $DocRowsSelect)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_OnWriteBoxSelect_EGAIS($SN, $UserName, $DocOutID, $DocRowsSelect)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_SetDocCarantin_EGAIS($SN, $UserName, $DocOutID)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_OnDocScan_EGAIS($SN, $UserName, $Barcode)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetQtyInPack($Params)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetSNTypes($Params)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }

    public function SOAP_GetSNList($Params)
    {
        throw new SoapFault("Sender", "Need to implement ".__METHOD__." method");
    }
}
