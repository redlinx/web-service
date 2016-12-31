<?php
    $client = new SoapClient(null, array('location' => "http://10.53.48.12/webservice/server1.php",
    									 'uri'      => "http://10.53.48.12/webservice/server1.php",
    									 'trace'    => 1));
    $return = $client->__soapCall('displayStudentInfo',array());
    print_r($return);
?>