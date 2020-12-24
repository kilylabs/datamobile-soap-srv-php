#!/bin/sh

DIR=`dirname $0`

php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy"}' IsNewData
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy"}' GetCells
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy"}' GetNewArts
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy"}' GetTemplates
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy"}' GetUsers
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy"}' GetDocHeads
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","DocOutID":"1"}' GetDocRowsSelect
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","DocOutID":"1"}' GetDocRowsInsert
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","Barcode":"123","DocOutID":"1","Cell":"CELL-1"}' OnArtScanSelect
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","Barcode":"123","DocOutID":"1","Cell":"CELL-1"}' OnArtScanInsert
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","DocOutID":1,"DocRec":{"DMBarcode":123,"DMSN":null,"DMCell":null,"DMArtID":"111","DMPackID":null,"DMQuant":1,"DMArtName":"Test Product","DMLimit":1}}' OnWriteRecSelect
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","DocOutID":1,"DocRec":{"DMBarcode":123,"DMSN":null,"DMCell":null,"DMArtID":"111","DMPackID":null,"DMQuant":1,"DMArtName":"Test Product","DMLimit":1}}' OnWriteRecInsert
#php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl OnCellScan
#php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl OnNewPack
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","DocOutID":"1"}' DeleteDoc
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","DocOutID":"1"}' ClearDoc
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","DocOutID":"1"}' ReopenDoc
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","DocOutID":"1","Comment":"test comment"}' SetDocComment
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","DocOutID":"1","Number":123}' SetDocNumber
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","DocHead":{"DMDocOutID":"1","DMNumber":"1","DMDate":"2016-03-07T14:08:27","DMComment":"test comment","DMBarcode":"094e2308835da80d9a259b7dca9aa014","DMTemplate":{"DMTemplateID":35,"DMIsMark":false,"DMTemplateName":"\u0418\u043d\u0432\u0435\u043d\u0442\u0430\u0440\u0438\u0437\u0430\u0446\u0438\u044f (\u043f\u0440\u043e\u0441\u0442\u0430\u044f)","DMEnableNew":true,"DMLoadArtsWithRows":false,"DMLoadRowsOnOpen":false,"DMDisableManualChangeClient":true,"DMDisableReaderChangeClient":false,"DMreaderTrack1Use":false,"DMreaderTrack2Use":false,"DMreaderTrack3Use":false,"DMnewPackOnWS":false,"DMuseBCTemplates":false,"DMuseSelectLogAsInsertTask":false,"DMonUploadIncorrectDoc":0,"DMuseArt_Insert":false,"DMuseAllBarcode":true,"DMuse_Select":true,"DMonArtScan_Select":1,"DMonTaskQty_Select":0,"DMonLimitQty_Select":0,"DMuseCell_Select":0,"DMuseSN_Select":0,"DMusePack_Select":0,"DMuseCellOnTask_Select":false,"DMuseSNOnTask_Select":false,"DMquantEnable_Select":false,"DMenterToCommit_Select":false,"DMwriteRecordToWS_Select":false,"DMuse_Insert":false,"DMonArtScan_Insert":0,"DMonTaskQty_Insert":0,"DMonLimitQty_Insert":0,"DMuseCell_Insert":0,"DMuseSN_Insert":0,"DMusePack_Insert":0,"DMuseCellOnTask_Insert":false,"DMuseSNOnTask_Insert":false,"DMquantEnable_Insert":false,"DMenterToCommit_Insert":false,"DMwriteRecordToWS_Insert":false,"DMPrintLabel_Insert":0,"DMPrintLabel_Select":0,"DMonNewArt":0,"DMoneArtReplaceMode":false,"DMuniquebarcodedoc":false,"DMMultiDoc":false,"DMMultiDocSound":false,"DMMultiDocTimeout":0,"DMEnterCell_Select":0,"DMEnterCell_Insert":0,"UsePhotofixationSelect":false,"UsePhotofixationInsert":false},"DMisMark":false,"DMisLoaded":false,"DMClient":{"DMName":"","DMClientID":"1","DMBarcode":""},"DMClientSelectDate":null},"DocRowsSelect":[{"DMBarcode":"ABC-abc-1234","DMSN":"","DMCell":"","DMArtID":"4149A-70334-XS","DMPackID":"","DMQuant":"1","DMArtName":"BASK ROUTE V2 WHITE : XS","DMLimit":"0"}],"DocRowsInsert":[]}' WriteDoc
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","DocOutID":"new","TemplateID":35}' CreateDoc
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","ArtID":"123"}' GetArtRest
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy"}' Login
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","DocOutID":"1"}' GetDocArts
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy"}' GetClients
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","DocOutID":1,"ClientID":1}' SetDocClient
#php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl IsNewDocs
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","Art":{"DMArtName":"BASK HEAVEN V2 GREY : 52","DMArtID":"3945A-70360-052","DMArtAttr1":"","DMArtAttr2":"","DMArtPrice":"0","DMisMark":false,"DMArtAttr3":"","DMArtAttr4":"","DMArtAttr5":"","DMArtAttr6":"","DMArtAttr7":"","DMArtAttr8":"","DMArtAttr9":"","DMArtAttr10":"","DMUseSN":false}}' UpdateArt
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","ArtID":"3945A-70360-052","Barcode":{"DMBarcode":"7654321654321","DMMeasureName":"шт.","DMMeasureK":"1","DMisMark":false}}' UpdateBarcode
#php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl GetArtsDrafts
#php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl DeleteArt
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","ArtID":"3945A-70360-052","Barcode":"7654321654321"}' DeleteBarcode
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","Barcode":"Barcode","DocOutID":"1"}' OnCommitAutoInsertOnSelect
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","Barcode":"8809000510005"}' FastAccess
#php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl CountDiscount
#php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl GetBalance
#php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl Logout
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","ArtID":"123"}' GetPicture
#php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl OnPalletScan
#php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl IsNewOnlineDocData
#php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl SetRowPhoto
#php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl SetDocPhoto
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","ArtID":"123","UnitID":"1","P1":"01-03-2016 15:06","P2":"123"}' GenerateNewBC
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","ArtID":"123","DocID":1}' GetArtCells
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","DocID":1,"Barcode":"8809000510005"}' FastAccessDoc
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy"}' GetUnits
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","ArtID":"123","Barcode":"123","Count":1}' SendArtToPrint
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","DocID":"1"}' SendDocToPrint
php $DIR/client.php -w http://0.0.0.0:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","DocID":"1","Pack":123}' SendPackToPrint
