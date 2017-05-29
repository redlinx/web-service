<?php

define("SERVER_HOSTNAME", "192.168.10.3");

class DB_config{
	protected function db_connection_details(){
		$db_config[0]["db_name"] = "aku";
		$db_config[0]["host_address"] = "192.168.0.101";
		$db_config[0]["username"] = "user1";
		$db_config[0]["password"] = "user1";

		/*
		$db_config[1]["db_name"] = "aku";
		$db_config[1]["host_address"] = "192.168.10.6";
		$db_config[1]["username"] = "pc5";
		$db_config[1]["password"] = "pc5";

		$db_config[2]["db_name"] = "aku";
		$db_config[2]["host_address"] = "192.168.10.11";
		$db_config[2]["username"] = "pc11";
		$db_config[2]["password"] = "pc11";
		*/

		return $db_config;
	}
}

?>
