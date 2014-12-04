<?php
	$sev = "localhost";
	$user = "root";
	$pass = "korn1993";
	mysql_connect($sev,$user,$pass) or die("Cannot Connect to server");
	mysql_select_db("channel") or die("Cannot connect to database");
	$username = "";
	$channel = "";
	$date = "";
	$time = "";
	$sql = "SELECT channel,Userid,date,time FROM channel";
	$rs = mysql_query($sql);
	if(mysql_num_rows($rs) >0)
		{
		while($row = mysql_fetch_assoc($rs)) {
        print "<div id='Userdata' style= 'width: 100%; height: 50%;top:75%'><center><br><br>Your Control. :  '".$row['Userid']."' </center><br>
		<table align='center' valign='middle' border='1'> 
		 <tr height='30'>
		 <td>SEND CH = ".$row['channel']." </td></tr><tr height='30'>
		 <td>FROM: ".$row['Userid']." </td></tr><tr height='30'>
		 <td> DATE :".$row['date']." </td></tr><tr height='30'>
		 <td>TIME:".$row['time']."</td></tr></table></div>";
		 break;
    }
	}
	else
	{
	
	}
	?>