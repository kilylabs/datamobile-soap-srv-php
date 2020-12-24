# DataMobile SOAP server
DataMobile PHP implementation of SOAP server for DataMobile application

Installation
------------

The recommended way to install it is through
[Composer](http://getcomposer.org):

```
$ composer require kilylabs/datamobile-soap-srv-php
```

Usage
-----

Ones installed using composer run SOAP server:

```
$ cd datamobile-soap-srv-php
$ php vendor/kilylabs/datamobile-soap-srv-php/bin/server.php
Listening on http://0.0.0.0:8080
```

It will run SOAP server on http://0.0.0.0:8080/service

After, setup your Android DataMobile device to use SOAP API device see what's happening. 

There is also console client to emulate device requests:

```
$ php bin/client.php -w http://127.0.0.1:8080/datamobile.wsdl -d '{"SN":"123","UserName":"Dummy","DocOutID":"1"}' ClearDoc
object(stdClass)#7 (1) {
  ["return"]=>
  bool(true)
}
```

After playing a lot, implement your own Provider by extending [AbstractProvider](https://github.com/kilylabs/datamobile-soap-srv-php/blob/develop/src/SOAP/Provider/AbstractProvider.php). 
A good starting point is the [Dummy provider](https://github.com/kilylabs/datamobile-soap-srv-php/blob/develop/src/SOAP/Provider/Dummy.php). And don't forget to give some feedback! :-)

TODO
-----
Implement fully working service with data storing and manipulation based on SQLite or MongoDB.
