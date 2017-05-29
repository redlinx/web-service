<?php
require_once('config.php');

class Database extends DB_config{
	
	public function connectDb(){
		$db_config = $this->db_connection_details();
		$x=0;

		while ( $x < count($db_config)) {
			$db[$x]["connect"] = new mysqli($db_config[$x]["host_address"],$db_config[$x]["username"],$db_config[$x]["password"],$db_config[$x]["db_name"]);
			
			if ($db[$x]["connect"]->connect_errno) {
			    $x++;
			}
			else{
				break;
			}
		}
		return $db[$x]["connect"];
	}

	protected function authenticateUser($id,$password){
		$sql = "SELECT * FROM user_login WHERE login_username = '".$id."' AND 
											   login_password = '".$password."'";
	
		$db = $this->connectDb();

		$db->real_query($sql);
		$result = $db->use_result();
		$row = $result->fetch_row();

		if(isset($row[1]) AND isset($row[2])){
			return 1;
		}
		else{
			return 0;
		}
		
	}
}
?>