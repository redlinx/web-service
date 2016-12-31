<?php
    ini_set("soap.wsdl_cache_enabled", "0"); // disabling WSDL cache
    $client = new SoapClient("http://localhost/WebServiceSOAP2/inventory.wsdl");
    $return = $client->getItemCount('123456');
    print_r($return);
?>