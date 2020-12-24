<?php

namespace Kily\DM\SOAP\Tests;

use Kily\DM\SOAP\Provider\Dummy;
use Kily\DM\SOAP\Handler;

class HandlerTest extends TestCase
{
    protected $handler;

    protected function setUp()
    {
        $tempname = tempnam('log_', sys_get_temp_dir());
        register_shutdown_function(function () use ($tempname) {
            if (file_exists($tempname)) {
                unlink($tempname);
            }
        });
        $logger = new \Wa72\SimpleLogger\FileLogger($tempname);
        $this->handler = new Handler(new Dummy(), $logger);
    }

    public function test__call()
    {
        $expected = ['return' => 'Соединение с сервером установлено'];
        $this->assertEquals($expected, $this->handler->DMServerInfo());

        $expected = ['return' => true];
        $args = new \stdClass();
        $args->SN = 123;
        $args->UserName = 'DUmmy';
        $args->DocOutID = 1;
        $this->assertEquals($expected, $this->handler->ClearDoc($args));

        $expected = ['return' => true];
        $args = json_decode('{"SN":"123","UserName":"Dummy","DocHead":{"DMDocOutID":"1","DMNumber":"1","DMDate":"2016-03-07T14:08:27","DMComment":"test comment","DMBarcode":"094e2308835da80d9a259b7dca9aa014","DMTemplate":{"DMTemplateID":35,"DMIsMark":false,"DMTemplateName":"\u0418\u043d\u0432\u0435\u043d\u0442\u0430\u0440\u0438\u0437\u0430\u0446\u0438\u044f (\u043f\u0440\u043e\u0441\u0442\u0430\u044f)","DMEnableNew":true,"DMLoadArtsWithRows":false,"DMLoadRowsOnOpen":false,"DMDisableManualChangeClient":true,"DMDisableReaderChangeClient":false,"DMreaderTrack1Use":false,"DMreaderTrack2Use":false,"DMreaderTrack3Use":false,"DMnewPackOnWS":false,"DMuseBCTemplates":false,"DMuseSelectLogAsInsertTask":false,"DMonUploadIncorrectDoc":0,"DMuseArt_Insert":false,"DMuseAllBarcode":true,"DMuse_Select":true,"DMonArtScan_Select":1,"DMonTaskQty_Select":0,"DMonLimitQty_Select":0,"DMuseCell_Select":0,"DMuseSN_Select":0,"DMusePack_Select":0,"DMuseCellOnTask_Select":false,"DMuseSNOnTask_Select":false,"DMquantEnable_Select":false,"DMenterToCommit_Select":false,"DMwriteRecordToWS_Select":false,"DMuse_Insert":false,"DMonArtScan_Insert":0,"DMonTaskQty_Insert":0,"DMonLimitQty_Insert":0,"DMuseCell_Insert":0,"DMuseSN_Insert":0,"DMusePack_Insert":0,"DMuseCellOnTask_Insert":false,"DMuseSNOnTask_Insert":false,"DMquantEnable_Insert":false,"DMenterToCommit_Insert":false,"DMwriteRecordToWS_Insert":false,"DMPrintLabel_Insert":0,"DMPrintLabel_Select":0,"DMonNewArt":0,"DMoneArtReplaceMode":false,"DMuniquebarcodedoc":false,"DMMultiDoc":false,"DMMultiDocSound":false,"DMMultiDocTimeout":0,"DMEnterCell_Select":0,"DMEnterCell_Insert":0,"UsePhotofixationSelect":false,"UsePhotofixationInsert":false},"DMisMark":false,"DMisLoaded":false,"DMClient":{"DMName":"","DMClientID":"1","DMBarcode":""},"DMClientSelectDate":null},"DocRowsSelect":[{"DMBarcode":"ABC-abc-1234","DMSN":"","DMCell":"","DMArtID":"4149A-70334-XS","DMPackID":"","DMQuant":"1","DMArtName":"BASK ROUTE V2 WHITE : XS","DMLimit":"0"}],"DocRowsInsert":[]}');
        $this->assertEquals($expected, $this->handler->WriteDoc($args));
    }
}
