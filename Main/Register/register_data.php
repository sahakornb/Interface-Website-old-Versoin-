<html>
<head>
<meta charset = "utf-8">
</head>
<body>
<?php
	$sev = "localhost";
	$user = "root";
	$pass = "korn1993";
	mysql_connect($sev,$user,$pass) or die("Cannot Connect to server");
	mysql_select_db("register") or die("Cannot connect to database");
    mysql_query("SET CHARACTER SET UTF-8");
	
	// parameter for use
	$name = $_POST["name"];
	$email = $_POST["email"];
	$pass = $_POST["pass"];
	$repass = $_POST["repass"];
	$username =  $_POST["username"];
	$date = date('Y-m-d');
	date_default_timezone_set ("Asia/Bangkok");
	$time = date("H:i:s", time('now'));
	
	// Check username and email 
	$sql = "SELECT * FROM register";
	$rs = mysql_query($sql);
	while($show = mysql_fetch_array($rs))
	{
	$output = $show['username'];
	$output1 = $show['email'];
	if($username == $output)
	{
		echo "<center><font size='4' color='#FF0000'> USERNAME มีคนใช้อยู่แล้ว<a href='../Register.php'>Back";
		break;
	}else{
	if($email == $output1)
	{
		echo "<center><font size='4' color='#FF0000'> Email นี้มีคนใช้อยู่แล้ว <a href='../Register.php'>Back";
		break;
	}else{
		// Check textbox agian 
	if($name == "" || $email == "" || $pass == "" || $repass == "" || $username == "")
	{
	echo "<font size='4' color='#FF0000' > โปรดระบุข้อมูลให้ครบทุกช่อง <a href='../Register.php'>Back";
	break;
	}else{
	 if($pass != $repass)
	{
		echo "<center><font size='4' color='#FF0000'> ข้อมูลไม่ถูกต้อง<a href='../Register.php'>Back";
		break;
	}
	}
	}
	}
	}
	if(!mysql_fetch_array($rs)){
		// push value 	
		$sql = "INSERT INTO register.register (name,email,password,username,Date,Time) VALUES('$name','$email','$pass','$username','$date','$time')";
	if(mysql_query($sql))
	{
		print "<center><font  color='green' size='5'>  Created Your Account.\n";
		print "<center><font  color='gray' size='3'>  ทำการ <a href= '../login.php'>Login .\n";
		
	}
	else
	{
		echo mysql_error();
	}
	}
	else
	{
		echo "<center><font size='4' color='#FF0000'> ข้อมูลไม่ถูกต้อง<a href='../Register.php'>Back";
		
	}
	
	/*
	$output = json_encode($snd);
	$sql = "INSERT INTO channel (channel,date,time) VALUES ('$snd','$ymd','$timest')";
	if(mysql_query($sql))
	{
		print "<font  color='red' size='5'> Channel = ".$output."  ".$ymd." ".$timest;
	}
	else
	{
		echo mysql_error();
	}
	
	*/
?>
</body>
</html>