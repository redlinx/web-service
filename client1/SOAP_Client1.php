<?php
/*
Created by Francis Rey Padao
Date Created December 31 2016
*/
$client = new SoapClient(null, array('location'   => "http://localhost/webservice/server/server1.php",
									 'uri'        => "http://localhost/webservice/server/server1.php",
									 'trace'      => 1,
									 'exceptions' => 0));

$return = $client->__soapCall('displayStudentInfo',array('user1','1234abcd'));

echo "<br>";
echo "<pre>";
print_r($return);
echo "</pre>";
?>