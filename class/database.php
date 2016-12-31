<?php
/*
Created by Francis Rey Padao
Date Created December 31 2016
*/
require_once('config.php');
class Database{
	protected function connectDb(){
		$conn = mysql_connect(DB_HOSTNAME,USERNAME,PASSWORD);
		mysql_select_db(DATABASE,$conn);		
	}

	protected function authenticateUser($id,$password){
		$sql = "SELECT * FROM user_login WHERE login_username = '".$id."' AND 
											   login_password = '".$password."'";
		$this->connectDb();
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);

		if(isset($row[1]) AND isset($row[2])){
			return 1;
		}
		else{
			return 0;
		}
	}
}
?>