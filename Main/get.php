
<?php
	
	$sev = "localhost";
	$user = "root";
	$pass = "korn1993";
	mysql_connect($sev,$user,$pass) or die("Cannot Connect to server");
	mysql_select_db("channel") or die("Cannot connect to database");
    mysql_query("SET CHARACTER SET UTF-8");
	$username = $_POST["username"];
	$cTemp = "c";
	$temp = $_POST["channel"];
	$ymd = date('Y-m-d');
	date_default_timezone_set ("Asia/Bangkok");
	$timest = date("H:i:s", time('now'));
    print "<div id='Userdata'><center><br><br>Welcome to Program :  '".$username."' </center></div>";
	if($temp == 0)
	{
		$temp = "";
		$snd = "";
		
	}
	else if($temp < 10)
	{
		$temp = 0+$temp;
		$snd = $cTemp."0".$temp;
		$output = json_encode($snd);
		$sql = "INSERT INTO channel.channel (channel,Userid,date,time) VALUES ('$snd','$username','$ymd','$timest')";
	}
	else 
	{
		$snd = $cTemp.$temp;
		$output = json_encode($snd);
		$sql = "INSERT INTO channel.channel (channel,Userid,date,time) VALUES ('$snd','$username','$ymd','$timest')";
	}
	if(mysql_query($sql))
	{
		print "<div id='Userdata'><center><br><br>Welcome to Program :  '".$username."' </center><br><br>
		<table align='center' valign='middle' border='1'> 
		 <tr height='30'>
		 <td>SEND CH = ".$output." </td></tr><tr height='30'>
		 <td>FROM: ".$username." </td></tr><tr height='30'>
		 <td> DATE :".$ymd." </td></tr><tr height='30'>
		 <td>TIME:".$timest."</td></tr></table></div>";
	}
	
	else
	{
		echo mysql_error();
	}

	
?>