<?php
    ini_set("soap.wsdl_cache_enabled", "0"); // disabling WSDL cache
    $client = new SoapClient("http://10.53.48.12/webservice/server1.php");
    $return = $client->displayStudentInfo();
    print_r($return);
?>