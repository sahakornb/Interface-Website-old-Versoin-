<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#Background {
	position: absolute;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	background-color: #636;
	z-index: 1;
}
#bottom {
	position: absolute;
	left: 0px;
	top: 90%;
	width: 100%;
	height: 10%;
	background-color:#faaeae;
	z-index: 2;
}
#right {
	position: absolute;
	left: 78%;
	top: 0px;
	width: 22%;
	height: 90%;
	background-color:#DFDFDF;
	z-index: 3;
}
#Show_pic {
	position: absolute;
	left: 0px;
	top: 0px;
	width: 78%;
	height: 90%;
	z-index: 4;
	background-color:#C06;
}
#topright{
	position: absolute;
	left: 78%;
	top: 5%;
	width: 22%;
	height: 5%;
	z-index: 5;
}
#bottom_right {
	position: absolute;
	left: 80%;
	top: 90%;
	width: 20%;
	height: 10%;
	z-index: 6;
}
#Ontop_page {
	position: absolute;
	left:0px;
	top: 0px;
	width: 100%;
	height:5%;
	background-color:#faaeae;
	z-index: 7;
}

</style>
</head>

<body>
<div id="Background"></div>

<div id="bottom"><br />&nbsp &nbsp &nbsp Test Program. Ver1.2.0 (September - October)<br />
</div>
<div id="right"></div>
<div id="Show_pic"><img src="Picture/Picture_home.jpg" width="100%" height="100%" /></div>
<div id="topright"><p align = "center"><font size = "6" color = "Gray"> Program</p></font><br />
<center>
 <form action="interface.php">
  <input type="image" src="Picture/B_W_Cartoon_Computer_Base_Monitor_clip_art_hight.png" width="20%" height="45%"  alt="Submit">
</form><a href="interface.php">Program 1</a> <br><br><br>
<form action="interface.php">
 <input type="image" src="Picture/B_W_Cartoon_Computer_Base_Monitor_clip_art_hight.png" width="20%" height="45%" alt="Submit">
 </form><a href="interface.php"> Program 2</a><br><br><br>
 <form action="interface.php">
 <input type="image" src="Picture/B_W_Cartoon_Computer_Base_Monitor_clip_art_hight.png" width="20%" height="45%" alt="Submit">
 </form><a href="interface.php"> Program 3</a><br><br><br>
<form action="interface.php">
 <input type="image" src="Picture/B_W_Cartoon_Computer_Base_Monitor_clip_art_hight.png" width="20%" height="45%" alt="Submit">
 </form><a href="interface.php">Program 4</a><br><br><br>
</center>
</div>
<div id="bottom_right"><br /><center>
<img src="Picture/$RNW4RJ7.png" width="10%" height="35%" />
<img src="Picture/$RG5JNF7.png" width="10%" height="35%" />
<img src="Picture/$RSJTV9Q.png" width="10%" height="35%" />
<img src="Picture/$R5C5BWS.png" width="10%" height="35%" />
</Center>
</div>
<div id="Menu">
<div id="Ontop_page"> <br />&nbsp &nbsp&nbsp &nbsp 
<?php 
  echo date("j F Y"); 
 
?>
</body>
</html>