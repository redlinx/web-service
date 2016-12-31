<?php
require_once('student.php');

$server = new SoapServer(NULL, array('uri' => "http://10.53.48.12/webservice/server1.php"));
$server->setClass('Student');
$server->handle();



// $function_list = $server->getFunctions();
// print_r($function_list);
?>