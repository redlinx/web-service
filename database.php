<!--Created by Francis Rey Padao-->
<!--Date Created December 31 2016-->
<?php
class Database{
	protected function connectDb(){
		$db_name = 'aku';
		$hostname = '127.0.0.1';
		$username = 'root';
		$password = '';

		$conn = mysql_connect($hostname,$username,$password);
		mysql_select_db($db_name,$conn);		
	}
}
?>