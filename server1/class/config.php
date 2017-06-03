<?php

define("SERVER_HOSTNAME", "localhost");

class DB_master_config{

	protected function db_master_connection_details(){
		$db_config[0]["db_name"] = "aku";
		$db_config[0]["host_address"] = "192.168.0.101";
		$db_config[0]["username"] = "user1";
		$db_config[0]["password"] = "user1";

		return $db_config;
	}
}

class DB_slave_config extends DB_master_config{

	protected function db_slave_connection_details(){
		$db_config[0]["db_name"] = "aku";
		$db_config[0]["host_address"] = "127.0.0.1";
		$db_config[0]["username"] = "root";
		$db_config[0]["password"] = "root";

		$db_config[1]["db_name"] = "aku";
		$db_config[1]["host_address"] = "192.168.0.101";
		$db_config[1]["username"] = "user1";
		$db_config[1]["password"] = "user1";

		return $db_config;
	}
}

?>
