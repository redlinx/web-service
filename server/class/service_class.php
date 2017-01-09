<?php
/*
Created by Francis Rey Padao
Date Created December 31 2016
*/
require_once('student.php');
require_once('teacher.php');

class ServiceClass{
	public function displayStudentInfo($id,$password){
		$student = new Student();
		$result = $student->displayStudentInfo($id,$password);
		return $result;
	}

	public function displayTeacherInfo(){
		$teacher = new Teacher();
		$result = $teacher->displayTeacherInfo();
		return $result;
	}

	public function insertStudentInfo($studinfo){
		$student = new Student();
		$student->insertStudentInfo($studinfo);
	}
}
?>