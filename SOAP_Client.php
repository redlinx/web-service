<?php
    $client = new SoapClient(null, array('location' => "http://10.53.48.11:8080/webservice/server1.php",
    									 'uri'      => "http://10.53.48.12:8080/webservice/server1.php",
    									 'trace'    => 1));

    $return = $client->__soapCall('displayMessage',array('Francis'));
    print_r($return);
?>