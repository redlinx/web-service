<?php
/*
Created by Francis Rey Padao
Date Created December 31 2016
*/
require_once('server1.php');

$function_list = $server->getFunctions();

echo "Soap Server URI: ".$soap_server_uri;
echo "<pre>";
print_r($function_list);
echo "</pre>";
?>