<?php

class student{
	public function displayMessage($name){
		$message = "Hello ".$name."<br/> How are you now?";
		return $message;
	}

	public function add_values($x,$y){
		$result = $x + $y;
		return $result;
	}
}





$server = new SoapServer(NULL, array('uri' => "http://10.53.48.11:8080/webservice/server1.php"));
$server->setClass('student');
$server->handle();
?>