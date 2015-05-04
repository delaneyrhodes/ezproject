<?php
	$db_host = "198.71.225.53:3306";
	$db_user = "newuser";
	$db_pass = "NewUser2015";
	$db_name = "ezracdatabase";

	$db_connect = mysql_connect($db_host, $db_user, $db_pass) 
		or die ("Could not connect to MySQL");
	$db_select = @mysql_select_db($db_name) or die ("Could not connect to database");
?>
