<!--Created by Francis Rey Padao-->
<!--Date Created December 31 2016-->
<?php
class Database{
	protected function connectDb(){
		$db_name = 'aku';
		$hostname = 'localhost';
		$username = 'root';
		$password = '';

		$conn = mysql_connect($hostname,$username,$password);
		mysql_select_db($db_name,$conn);		
	}
}

class Student extends Database{
	public function displayStudentInfo(){
		$sql = 'SELECT * FROM student';
		$this->connectDb();
		$result = mysql_query($sql);
		$ctr = 0;
		while($row = mysql_fetch_array($result)){
			$student_info[0][$ctr] = $row[0];
			$student_info[1][$ctr] = $row[1];
			$student_info[2][$ctr] = $row[2];
			$student_info[3][$ctr] = $row[3];
			$student_info[4][$ctr] = $row[4];
			$student_info[5][$ctr] = $row[5];
			$ctr++;
		}
		return $student_info;
	}
}

$student = new Student();
$result = $student->displayStudentInfo();
echo "<pre>";
print_r($result);
echo "</pre>";
?>