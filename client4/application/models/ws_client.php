<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ws_client extends CI_Model {

	public function getStudentInfo(){
		$client = new SoapClient(null, array('location'   => "http://localhost/webservice/server1/server.php",
										 'uri'        => "http://localhost/webservice/server1/server.php",
										 'trace'      => 1,
										 'exceptions' => 0));
		
		$studentInfo = $client->__soapCall('displayStudentInfo',array());
	
		return $studentInfo;
	}
	public function inStudentInfo($studentInfo){
		$client = new SoapClient(null, array('location'   => "http://localhost/webservice/server1/server.php",
										 'uri'        => "http://localhost/webservice/server1/server.php",
										 'trace'      => 1,
										 'exceptions' => 0));
		

	
	 	$client->__soapCall('insertStudentInfo',array($studentInfo));	
		
	}
}
?>