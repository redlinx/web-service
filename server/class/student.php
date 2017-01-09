<?php
/*
Created by Francis Rey Padao
Date Created December 31 2016
*/
require_once('database.php');
class Student extends Database{
	public function displayStudentInfo($id,$password){
		$autheticate_result = $this->authenticateUser($id,$password);
		if($autheticate_result == 1){
			$sql = 'SELECT * FROM student';
			$this->connectDb();
			$result = mysql_query($sql);
			$ctr = 0;
			while($row = mysql_fetch_array($result)){
				$student_info[$ctr][0] = $row[0];
				$student_info[$ctr][1] = $row[1];
				$student_info[$ctr][2] = $row[2];
				$student_info[$ctr][3] = $row[3];
				$student_info[$ctr][4] = $row[4];
				$student_info[$ctr][5] = $row[5];
				$ctr++;
			}
		}
		else{
			$student_info[0][0] = "Error: Unable to access remote method due to authetication issues: invalid user ID or password";
		}
		return $student_info;
	}

	public function insertStudentInfo($studinfo){
		$sql = "INSERT INTO student(Stud_fname,Stud_lname,Stud_bday,Stud_mobile,Stud_address)
				VALUES('".$studinfo[0]."','".$studinfo[1]."','".$studinfo[2]."','".$studinfo[3]."','".$studinfo[4]."')";
		$this->connectDb();
		mysql_query($sql);
	}
}
?>