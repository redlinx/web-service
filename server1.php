<?php
/*
Created by Francis Rey Padao
Date Created December 31 2016
*/
require_once('class/service_class.php');

$soap_server_uri = "http://".SERVER_HOSTNAME."/webservice/server1.php";
$server = new SoapServer(NULL, array('uri' => $soap_server_uri));
$server->setClass('ServiceClass');
$server->handle();
<<<<<<< HEAD
=======



<<<<<<< HEAD



$server = new SoapServer(NULL, array('uri' => "http://10.53.48.11:8080/webservice/server1.php"));
$server->setClass('student');
$server->handle();
=======
// $function_list = $server->getFunctions();
// print_r($function_list);
>>>>>>> cf3c3ad4c40975c0fc4db7cea3cc291e8b4b1fa0
>>>>>>> 38cfbfb12ff4a6b19c45ea4a5c0c5c0e500d3baa
?>