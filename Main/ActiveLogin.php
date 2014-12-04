<html>
<head>
 <meta charset="UTF-8">
 <script language="JavaScript" type="text/javascript"> 
 var t = setTimeout("document.myform.submit();",1000); 
 </script>
<style>
#Ontop_page {
	position: absolute;
	left:0px;
	top: 0px;
	width: 100%;
	height:50px;
	background-color:#FEE3C7;
	z-index: 7;
}
</style>

</head>
<body>
<?php
		
		$username = $_POST["username"];
	if($_POST["username"]!="" ||  $_POST["password"]!=""){
		$password = $_POST["password"];

		$sev = "localhost";
			$user = "root";
			$pass = "korn1993";
			mysql_connect($sev,$user,$pass) or die("Cannot Connect to server");
			mysql_select_db("register") or die("Cannot connect to database");

		$login = mysql_query("SELECT * FROM register WHERE username = '$username' AND password = '$password'")or die(mysql_error);

		if(mysql_num_rows($login) == 0)
		{
			print "<div id ='Ontop_page'><center><font  color='green' size='5'>  `ไม่พบข้อมูลของท่าน.\n</font></div>";
			echo "<meta http-equiv='refresh' content='2;URL=login.php/'>";
		}
		else{
			
			echo "<div id ='Ontop_page'><center><font  color='green' size='5'>  ยินดีต้อนรับคุณ \n".$username."</font> <form name= 'myform' action='interface.php' method='post'>
			<input type='hidden' name='username' value='$username'/>
			<input type='submit' value='Please wait...' onmouseover='this.style.cursor='hand'></form></div>";
		}
	}

?>
</body>
</html>