<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">

#title {
	position: absolute;
	border: 1px solid;
	border-color: #666;
	box-shadow: 5px 5px 2px #888888;
	left:1%;
	top: 0px;
	width: 98%;
	height: 50px;
	z-index: 2;
	visibility: visible;
}
#pic_t {
	position: absolute;
	left:40%;
	top: 0px;
	width: 20%;
	height: 50px;
	z-index: 2;
	visibility: visible;
}
#message_t {
	position: absolute;
	left: 85%;
	top: 0px;
	width: 175px;
	height: 60px;
	z-index: 3;
}
#Create {
	position: absolute;
	border: 1px solid;
	border-radius: 10px;
	box-shadow: 5px 5px 2px #888888;
	left: 20%;
	top: 102px;
	width: 60%;
	height: 80%;
	z-index: 3;
	background-color: #F7F7F7;
}
#Message {
	position: absolute;
	left: 10%;
	top:2%;
	width: 250px;
	height: 50px;
	z-index: 4;
}
#_input {
	position: absolute;
	left: 20%;
	top: 11%;
	width: 709px;
	height: 477px;
	z-index: 4;
}
body {
	background-color: #FEEEE99;
}
#label1 {
	position: absolute;
	left: 57%;
	top: 32%;
	width: 20%;
	height: 5%;
	background-color: #CF0;
	z-index: 4;
	
}

#ShowE {
	position: absolute;
	left: 60%;
	top: 65%;
	width: 25%;
	height: 20%;
	z-index: 4;
}
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="Register/Check.js" type="text/javascript"></script>
<title>Create Account.</title>
<?php
	$sev = "localhost";
	$user = "root";
	$pass = "korn1993";
	mysql_connect($sev,$user,$pass) or die("Cannot Connect to server");
	mysql_select_db("register") or die("Cannot connect to database");
    mysql_query("SET CHARACTER SET UTF-8");
	
	$countU = 0;
	$countE = 0;
	$countP = 0;
	
	
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
		$countU = $countU+1;
	}else{
	if($email == $output1)
	{
		$countE = $countE+1;
	}else{
	 if($pass != $repass)
	{
		$countP=$countP+1;
	}
	}
	}
	}
	

		// Check textbox agian 
	if($name == "" || $email == "" || $pass == "" || $repass == "" || $username == "")
	{			
			echo "<div id='ShowE'>***กรอกข้อมูลให้ครบทุกช่อง</div>";
		
	}
	else if($name != "" || $email != "" || $pass != "" || $repass != "" || $username != "")
	{
		if($countU>0)
		{echo "<div id='ShowE'> - USERNAME มีผู้ใช้อยู่แล้ว <br></div>";
		$countU = 0;
		}
		else{
			 if($countE>0)
			  {echo "<div id='ShowE'> - Email นี้เป็นสมาชิกอยู่แล้ว <br></div>";
			  $countE = 0;}
			  else{
				if($countP>0)
				{echo "<div id='ShowE'> - Password ไม่ตรงกัน <br></div>";
				$countP = 0;
				}
				else
				{
					
					$sql = "INSERT INTO register.register (name,email,password,username,Date,Time) VALUES('$name','$email','$pass','$username','$date','$time')";
					if(mysql_query($sql))
					{
					echo "<div id='ShowE'> Account Created! Please Waite... <br></div>";
					echo "<meta http-equiv='refresh' content='1;URL=login.php/'>";
					}
					else
						{
					echo mysql_error();
							}
				}
			  }
		}
	}/*
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
	}*/
	
?>
</head>
<body>
<div id="title"><left><img src="../Register-PHP/sign-up-icon.png" width="50" height="50" /></left></div>
<div id="pic_t"><center>
  <img src = "Register/Pic/NU_LOGO.png" width="50" height="50" /> 
<img src="Register/Pic/eng_logo.png" width="50" height="50" /><img src="Register/Pic/nurobot_logo.png" width="50" height="50" />
</center>
</div>
<div id="message_t"><p style="top:50%;" >Have an account?<a href="login.php"/>
	 Login.</a></center></div>
     
<div id="Create">
 <form id="form1" name="form1" method="post" action="Register.php" onsubmit="Checkbtn(this)">
<div id="Message"><p style ="font-size:24px;" align="CENTER"><b> Create your account.</b></p></div>
<div id="_input">
  <p> Full-Name.</p>
  <input type = "text" style= "width:300px;height:20px" id = "name-full" name = "name" maxlength = "20" aria-required="true" autocomplete="off" 
  onchange = "Check_name(this.value)"/> 
  <p> Email-Address. </p>
  <input  type = "text" style= "width:300px;height:20px" id = "email" name = "email" onchange = "CheckEmail(this.value)" /> 
   <p> Create password.</p>
  <input  type = "password" style= "width:300px;height:20px" name = "pass" id = "pass" maxlength = "16" onchange = "Pass(this.value)"/> 
   <p> Repassword.</p>
  <input  type = "password" style= "width:300px;height:20px" id = "repass" name = "repass" maxlength = "16" onchange = "CheckPass(this.value)"/> 
   <p> Create username.</p>
  <input  type = "text" style= "width:300px;height:20px" id = "username"  name = "username" maxlength = "20"  onchange = "CheckUser(this.value)"/> 
  <br /> 
  <button type = "submit" style = "background-color:#6F9;border-radius:15px;" name "btn" ><p> Create my aacount. </p></button>
  </form>
</div>
</body>
</html>