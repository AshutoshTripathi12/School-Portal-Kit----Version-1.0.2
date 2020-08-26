<?php
	//////////Establishing Database connection
	$server = "remotemysql.com";
	$username = "bEK4JOm74t";
	$password = "wLGUm6ygpO";
	$dbname = "bEK4JOm74t";
	
	$connection = mysqli_connect($server, $username, $password, $dbname);
	
	if(!$connection){
		die("Awaiting Resources");
	}
?>
