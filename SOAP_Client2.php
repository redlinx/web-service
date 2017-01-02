<?php
/*
Created by Francis Rey Padao
Date Created January 1 2017
*/
$client = new SoapClient(null, array('location'   => "http://localhost/webservice/server1.php",
									 'uri'        => "http://localhost/webservice/server1.php",
									 'trace'      => 1,
									 'exceptions' => 0));

$return = $client->__soapCall('displayMessage',array());

echo $return;
?>