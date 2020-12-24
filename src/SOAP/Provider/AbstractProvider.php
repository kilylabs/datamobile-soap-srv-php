<?php

namespace Kily\DM\SOAP\Provider;

abstract class AbstractProvider
{
    public function SOAP_DMServerInfo()
    {
        return ['return' => 'Соединение с сервером установлено'];
    }

    abstract public function SOAP_IsNewData($SN, $UserName);
    abstract public function SOAP_GetCells($SN, $UserName);
    abstract public function SOAP_GetNewArts($SN, $UserName);
    abstract public function SOAP_GetTemplates($SN, $UserName);
    abstract public function SOAP_GetUsers($SN, $UserName);
    abstract public function SOAP_GetDocHeads($SN, $UserName);
    abstract public function SOAP_GetDocRowsSelect($SN, $UserName, $DocOutID);
    abstract public function SOAP_GetDocRowsInsert($SN, $UserName, $DocOutID);
    abstract public function SOAP_OnArtScanSelect($SN, $UserName, $Barcode, $DocOutID, $Cell);
    abstract public function SOAP_OnArtScanInsert($SN, $UserName, $Barcode, $DocOutID, $Cell);
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
    abstract public function SOAP_GetArtRest($SN, $UserName, $ArtID);
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
    abstract public function SOAP_OnPalletScan($SN, $UserName, $DocOutID);
    abstract public function SOAP_IsNewOnlineDocData($SN, $UserName, $DocOutID);
    abstract public function SOAP_SetRowPhoto($SN, $UserName, $DocID, $ArtID, $Barcode, $Byte);
    abstract public function SOAP_SetDocPhoto($SN, $UserName, $DocID, $Byte);
    abstract public function SOAP_GenerateNewBC($SN, $UserName, $ArtID, $UnitID, $P1, $P2);
    abstract public function SOAP_GetArtCells($SN, $UserName, $ArtID, $DocID);
    abstract public function SOAP_FastAccessDoc($SN, $UserName, $DocID, $Barcode);
    abstract public function SOAP_GetUnits($SN, $UserName);
    abstract public function SOAP_SendArtToPrint($SN, $UserName, $ArtID, $Barcode, $Count);
    abstract public function SOAP_SendDocToPrint($SN, $UserName, $DocID);
    abstract public function SOAP_SendPackToPrint($SN, $UserName, $DocID, $Pack);
}
