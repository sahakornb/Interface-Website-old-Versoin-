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
	background-color: #DAFEE7;
	z-index: 1;
}
#bottom {
	position: absolute;
	left: 0px;
	top: 90%;
	width: 100%;
	height: 10%;
	background-color:#FFFBF8;
	z-index: 2;
}
#right {
	position: absolute;
	left: 78%;
	top: 0px;
	width: 22%;
	height: 90%;
	background-color: #FEE3C7;
	z-index: 3;
	color: #FCFCFC;
}
#Show_pic {
	position: absolute;
	left: 0px;
	top: 0px;
	width: 78%;
	height: 92%;
	z-index: 4;
	background-color: #FDF4D9;
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
	background-color: #FCFCFC;
}
#Ontop_page {
	position: absolute;
	left:0px;
	top: 0px;
	width: 100%;
	height:3%;
	background-color:#FEE3C7;
	z-index: 7;
}

body {
	background-color: #FCFCFC;
}
#robot_im {
	position: absolute;
	left: 78%;
	top: 65%;
	width: 22%;
	height: 30%;
	
	color: #FCFCFC;
	z-index: 7;
}
</style>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onload="MM_preloadImages('Picture/home2.png','Picture/register2.png','Picture/login2.png')">
<div id="Background"></div>

<div id="bottom"><br />&nbsp &nbsp &nbsp Test Program. Ver1.2.0 (September - October)<br />
</div>
<div id="right" >

</div>
<div id="Show_pic"><br><tr><td colspan="5" align="center" valign="middle" bgcolor="#FF6666"><h1><marquee behavior="alternate"><marquee direction="left" width="440">
     <FONT FACE="Calibri Light" color="#6495ED" size="+5">Welcome to NU Robot</FONT>
    </marquee></marquee></h1></td></tr><img src="Picture/Picture_home.jpg" width="99%" height="99%" /></div>
<div id="topright"><p align = "center"><FONT FACE="Calligraph421 BT" color="#BDB76B" size="+5"> Menu</p></FONT><br />
<center>
 <form action="interface.php">
  <a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','Picture/home2.png',1)"><img src="Picture/home.png" width="20%" height="45%" id="Image6" /></a>
 </form><FONT FACE="Ms Sans Serif" color="#FFA07A">Home</FONT><br><br><br>
<form action="interface.php">
  <a href="register.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7','','Picture/register2.png',1)"><img src="Picture/register.png" width="20%" height="45%" id="Image7" /></a>
  
 </form><FONT FACE="Ms Sans Serif" color="#00FA9B">Register</FONT><br><br><br>
 <form action="interface.php">
   <a href="login.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8','','Picture/login2.png',1)"><img src="Picture/login.png" width="20%" height="45%" id="Image8" /></a>
 </form><FONT FACE="Ms Sans Serif" color="#FF7256">Login</FONT> <br><br>
<br><br><br>
</center>
</div>
<div id="bottom_right"><br /><center>
<img src="Picture/$RNW4RJ7.png" width="14%" height="51%" />
<img src="Picture/$RG5JNF7.png" width="14%" height="51%" />
<img src="Picture/$RSJTV9Q.png" width="14%" height="51%" />
<img src="Picture/$R5C5BWS.png" width="14%" height="51%" />
</Center>
</div>
<div id="robot_im">
<center><img src="Picture/waving.gif" width="40%" height="55%"></center></div>
<div id="Menu">
<div id="Ontop_page">
<?php 
  echo date("j F Y"); 
 
?>
</body>
</html>