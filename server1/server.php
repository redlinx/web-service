<?php
/*
Created by Francis Rey Padao
Date Created December 31 2016
Modified January 9 2017
*/

//error_reporting(0);
require_once('class/service_class.php');

$soap_server_uri = "http://".SERVER_HOSTNAME."/webservice/server1/server.php";
$server = new SoapServer(NULL, array('uri' => $soap_server_uri));
$server->setClass('ServiceClass');
$server->handle();
?>