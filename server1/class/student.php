<?php
/*
Created by Francis Rey Padao
Date Created December 31 2016
*/
require_once('database.php');

class Student extends Database{

	public function displayStudentInfo(){

		$sql = 'SELECT * FROM student';
		$db = $this->connectDb_slave();
		$db->real_query($sql);
		$result = $db->use_result();

		$student["host_info"] = $db->host_info;
		$student["host_stat"] = $this->connectDb_slave()->stat;
		
		$ctr = 0;
		while($row = $result->fetch_row()){
			$student["student_info"][$ctr][0] = $row[0];
			$student["student_info"][$ctr][1] = $row[1];
			$student["student_info"][$ctr][2] = $row[2];
			$student["student_info"][$ctr][3] = $row[3];
			$student["student_info"][$ctr][4] = $row[4];
			$student["student_info"][$ctr][5] = $row[5];
			$ctr++;
		}
		
		return $student;
	}

	public function insertStudentInfo($studinfo){

		$sql = "INSERT INTO student(Stud_fname,Stud_lname,Stud_bday,Stud_mobile,Stud_address)
				VALUES('".$studinfo[0]."','".$studinfo[1]."','".$studinfo[2]."','".$studinfo[3]."','".$studinfo[4]."')";
		$db = $this->connectDb_master();
		$db->real_query($sql);
	}
}
?>