<?php
/*
Created by Francis Rey Padao
Date Created December 31 2016
*/
require_once('student.php');

class ServiceClass{
	public function displayMessage(){
		return "Hello world";
	}

	public function displayStudentInfo($id,$password){
		$student = new Student();
		$result = $student->displayStudentInfo($id,$password);
		return $result;
	}
}
?>