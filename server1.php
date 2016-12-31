<?php
require_once('student.php');

$server = new SoapServer(NULL, array('uri' => "http://10.53.48.12/webservice/server1.php"));
$server->setClass('Student');
$server->handle();



<<<<<<< HEAD



$server = new SoapServer(NULL, array('uri' => "http://10.53.48.11:8080/webservice/server1.php"));
$server->setClass('student');
$server->handle();
=======
// $function_list = $server->getFunctions();
// print_r($function_list);
>>>>>>> cf3c3ad4c40975c0fc4db7cea3cc291e8b4b1fa0
?>