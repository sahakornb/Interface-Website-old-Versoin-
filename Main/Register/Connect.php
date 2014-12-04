<?php
$sev = "localhost";
	$user = "root";
	$pass = "korn1993";
	mysql_connect($sev,$user,$pass) or die("Cannot Connect to server");
	mysql_select_db("channel") or die("Cannot connect to database");
	mysql_select_db("register") or die("Cannot connect to database");
    mysql_query("SET CHARACTER SET UTF-8");
?>