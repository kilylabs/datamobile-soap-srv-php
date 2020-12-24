<?php

namespace Kily\DM\SOAP\Tests\Provider;

use Kily\DM\SOAP\Tests\TestCase;
use Kily\DM\SOAP\Provider\Dummy;

class DummyTest extends TestCase
{
    protected function setUp()
    {
        $this->provider = new Dummy();
    }

    public function testSOAP_DMServerInfo()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_DMServerInfo());
    }

    public function testSOAP_IsNewData()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_IsNewData(123, 'Dummy'));
    }

    public function testSOAP_GetCells()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_GetCells(123, 'Dummy'));
    }

    public function testSOAP_GetNewArts()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_GetNewArts(123, 'Dummy'));
    }

    public function testSOAP_GetTemplates()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_GetTemplates(123, 'Dummy'));
    }

    public function testSOAP_GetUsers()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_GetUsers(123, 'Dummy'));
    }

    public function testSOAP_GetDocHeads()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_GetDocHeads(123, 'Dummy'));
    }

    public function testSOAP_GetDocRowsSelect()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_GetDocRowsSelect(123, 'Dummy', 1));
    }

    public function testSOAP_GetDocRowsInsert()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_GetDocRowsInsert(123, 'Dummy', 1));
    }

    public function testSOAP_OnArtScanSelect()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_OnArtScanSelect(123, 'Dummy', 1234561234567, 1, 'CELL-1'));
    }

    public function testSOAP_OnArtScanInsert()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_OnArtScanInsert(123, 'Dummy', 1234561234567, 1, 'CELL-1'));
    }

    public function testSOAP_OnWriteRecSelect()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_OnWriteRecSelect(123, 'Dummy', 1, []));
    }

    public function testSOAP_OnWriteRecInsert()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_OnWriteRecInsert(123, 'Dummy', 1, []));
    }

    /**
     * @expectedException \SoapFault
     */
    public function testSOAP_OnCellScan()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_OnCellScan(123, 'Dummy', 1234561234567, 1));
    }

    public function testSOAP_OnNewPack()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_OnNewPack(123, 'Dummy', 1));
    }

    public function testSOAP_DeleteDoc()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_DeleteDoc(123, 'Dummy', 1));
    }

    public function testSOAP_ClearDoc()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_ClearDoc(123, 'Dummy', 1));
    }

    public function testSOAP_ReopenDoc()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_ReopenDoc(123, 'Dummy', 1));
    }

    public function testSOAP_SetDocComment()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_SetDocComment(123, 'Dummy', 1, ''));
    }

    public function testSOAP_SetDocNumber()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_SetDocNumber(123, 'Dummy', 1, 2));
    }

    public function testSOAP_WriteDoc()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_WriteDoc(123, 'Dummy', [], [], []));
    }

    public function testSOAP_CreateDoc()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_CreateDoc(123, 'Dummy', 1, 35));
    }

    public function testSOAP_GetArtRest()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_GetArtRest(123, 'Dummy', 123));
    }

    public function testSOAP_Login()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_Login(123, 'Dummy'));
    }

    public function testSOAP_GetDocArts()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_GetDocArts(123, 'Dummy', 1));
    }

    public function testSOAP_GetClients()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_GetClients(123, 'Dummy'));
    }

    public function testSOAP_SetDocClient()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_SetDocClient(123, 'Dummy', 1, 1));
    }

    /**
     * @expectedException \SoapFault
     */
    public function testSOAP_IsNewDocs()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_IsNewDocs(123, 'Dummy'));
    }

    public function testSOAP_UpdateArt()
    {
        $art = new \stdClass();
        $art->DMArtID = 123;
        $this->assertArrayHasKey('return', $this->provider->SOAP_UpdateArt(123, 'Dummy', $art));
    }

    public function testSOAP_UpdateBarcode()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_UpdateBarcode(123, 'Dummy', 123, 1234561234567));
    }

    /**
     * @expectedException \SoapFault
     */
    public function testSOAP_GetArtsDrafts()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_GetArtsDrafts(123, 'Dummy'));
    }

    public function testSOAP_DeleteArt()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_DeleteArt(123, 'Dummy', 123));
    }

    public function testSOAP_DeleteBarcode()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_DeleteBarcode(123, 'Dummy', 123, 1234561234567));
    }

    public function testSOAP_OnCommitAutoInsertOnSelect()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_OnCommitAutoInsertOnSelect(123, 'Dummy', 1234561234567, 1));
    }

    public function testSOAP_FastAccess()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_FastAccess(123, 'Dummy', 1234561234567));
    }

    /**
     * @expectedException \SoapFault
     */
    public function testSOAP_CountDiscount()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_CountDiscount(123, 'Dummy', 1234561234567, 1));
    }

    /**
     * @expectedException \SoapFault
     */
    public function testSOAP_GetBalance()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_GetBalance(123, 'Dummy', 123));
    }

    /**
     * @expectedException \SoapFault
     */
    public function testSOAP_Logout()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_Logout(123, 'Dummy'));
    }

    public function testSOAP_GetPicture()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_GetPicture(123));
    }

    /**
     * @expectedException \SoapFault
     */
    public function testSOAP_OnPalletScan()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_OnPalletScan(123, 'Dummy', 1));
    }

    /**
     * @expectedException \SoapFault
     */
    public function testSOAP_IsNewOnlineDocData()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_IsNewOnlineDocData(123, 'Dummy', 1));
    }

    /**
     * @expectedException \SoapFault
     */
    public function testSOAP_SetRowPhoto()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_SetRowPhoto(123, 'Dummy', 1, 123, 1234561234567, ''));
    }

    /**
     * @expectedException \SoapFault
     */
    public function testSOAP_SetDocPhoto()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_SetDocPhoto(123, 'Dummy', 1, ''));
    }

    public function testSOAP_GenerateNewBC()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_GenerateNewBC(123, 'Dummy', 123, '', '', ''));
    }

    public function testSOAP_GetArtCells()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_GetArtCells(123, 'Dummy', 123, 1));
    }

    public function testSOAP_FastAccessDoc()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_FastAccessDoc(123, 'Dummy', 1, 1234561234567));
    }

    public function testSOAP_GetUnits()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_GetUnits(123, 'Dummy'));
    }

    public function testSOAP_SendArtToPrint()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_SendArtToPrint(123, 'Dummy', 123, 1234561234567, 1));
    }

    public function testSOAP_SendDocToPrint()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_SendDocToPrint(123, 'Dummy', 1));
    }

    public function testSOAP_SendPackToPrint()
    {
        $this->assertArrayHasKey('return', $this->provider->SOAP_SendPackToPrint(123, 'Dummy', 1, '1'));
    }
}
