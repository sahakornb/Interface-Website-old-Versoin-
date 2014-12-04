<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Document</title>
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
</style>
 </head>
 <body>
<?php
	require('ActiveLogin.php');
?>
  <div id="title"><left><img src="Register/Pic/sign-up-icon.png" width="50" height="50" /></left></div>
  <div id="Create">
  <form id="form2" method="post" action="ActiveLogin.php">
  <table align="center" valign="middle">
  <tr height="200" >
	<td></td>
  </tr>
  <tr height="30">
	<td><center><font size="4" >Sign In</font></center></td>
  </tr>
  </table>

	<table align="center" valign="bottom" >
  <tr height="40">
	<td>Username </td>
	<td><input type="text" name="username"></td>
  </tr>
  <tr height="40">
	<td>Password </td>
	<td><input type="password" name="password"></td>
  </tr>
  </table>


  <center><input type="submit" value="Sign In"></center>
  <center><a href="Register.php"><font size="2" color="">สมัครสมาชิก</font></center>

  </form>
  
  </div>
 </body>
</html>
