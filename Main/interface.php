<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Control Program.</title>
<script src="jquery-1.11.1.min.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://jwpsrv.com/library/C1yN3lzfEeSSOCIACxmInQ.js"></script>
<style type="text/css">
#Background {
	position: absolute;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	background-color: #FFA07A;
	z-index: 1;
	background-image: url(Picture/1.jpg);
}
#bottom {
	position: absolute;
	left: 0px;
	top: 85%;
	width: 100%;
	height: 15%;
	background-color: #FFFFE0;
	z-index: 2;
	background-image: url(Picture/light_gray_bricks_pattern.jpg);
}
#left {
	position: absolute;
	left: 0px;
	top: 0px;
	width: 15%;
	height: 85%;
	background-color: #F0E1ED;
	z-index: 3;
	background-image: url(Picture/curves-orange-and-white-backgrounds-powerpoint.jpg);
}
#right {
	position: absolute;
	left: 85%;
	top: 0px;
	width: 15%;
	height: 85%;
	background-color: #F0E1ED;
	z-index: 4;
}
#Show_Video{
	position: absolute;
	left: 15%;
	top: 0px;
	width: 70%;
	height: 85%;
	background-color: #95BDCC;
	z-index: 5;
	background-image: url(Picture/31.jpg);
}
#Userdata {
	position: absolute;
	left: 0px;
	top: 10%;
	width: 15%;
	height: 20%;
	background-color: #F0E1ED;
	z-index: 6;
	background-image: url(Picture/1.jpg);
}
#topright {
	position: absolute;
	left: 0px;
	top: 0%;
	width: 15%;
	height: 10%;
	background-color: #CCC;
	z-index: 6;
	background-image: url(Picture/p685993893-3.jpg);
}
#button{
	position: absolute;
	left: 15%;
	top: 89%;
	width:30%;
	height: 10%;

	z-index: 7;
}
#bottomLeft {
	position: absolute;
	left: 0px;
	top: 85%;
	width: 15%;
	height: 15%;
	background-color: #FCC;
	z-index: 7;
	background-image: url(Picture/light_gray_bricks_pattern.jpg);
}
#bottom_home {
	position: absolute;
	left: 85%;
	top: 85%;
	width: 15%;
	height: 15%;
	background-color: #F06;
	z-index: 8;
	background-image: url(Picture/light_gray_bricks_pattern.jpg);
}
#dimmer {
	position: absolute;
	left: 889px;
	top: 85%;
	width: 116px;
	height: 15%;
	background-color: #636;
	z-index: 9;
	background-image: url(Picture/light_gray_bricks_pattern.jpg);
}
#Lighting{
	position: absolute;
	left: 50%;
	top: 85%;
	width: 91px;
	height: 15%;
	background-color: #3F9;
	z-index: 10;
	background-image: url(Picture/light_gray_bricks_pattern.jpg);
}
</style>
<script type="text/javascript">
$( "forme" ).submit(function( event ) {
  alert("test");
});

	$(document).ready(function(){	
	    jwplayer('Show_Video').setup({
        file: 'rtmp://10.46.30.125/oflaDemo/test',
       image: 'rtmp://10.46.30.125/teststream/test.png',
        title: 'PLAY',
        width: '100%',
        height:'100%',
		aspectratio: '4:2',
        mute: 'false',
        autostart: 'true',
        repeat: 'true'
    });

    });
	

var temp = 0;
function checkH()
{
	
	if(temp == 0)
	{
		 alert("คลิ๊กที่ปุ่ม HOME อีกครั้งถ้าต้องการ Logout!");
		 temp = temp + 1;
	
	}
	else
	{
		temp = 0;
		window.location.assign("index.php")
	}
	

}

</script>



</head>

<body>
<div id = "php_SHOW">
<?php
	
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
	}
	else 
	{
		$snd = $cTemp.$temp;
		$output = json_encode($snd);
		
	}
		print "<div id='Userdata'><center><br><br>Welcome to Program :  '".$username."' </center><br><br>"
	

        
?>
</div>
<div id="Background"></div>

<div id="right"><center>
  <FONT FACE="Calibri Light" color="#6495ED" size="+4">Select Sreaming</font><center><br>
  <form id="form1" name="form1" method="post" action="">
    <input type="image" name="imageField" id="imageField" src="Picture/sub_1.png" width="50%" height="50%" /><br />
    <FONT FACE="Ms Sans Serif" color="#4A708B"> Stream 1</FONT>
  </form><br />
  <form id="form2" name="form2" method="post" action="">
    <input type="image" name="imageField2" id="imageField2" src="Picture/sub_3.png" width="50%" height="50%"/><br />
    <FONT FACE="Ms Sans Serif" color="#4A708B"> Stream 2</FONT>
  </form><br />
  <form id="form3" name="form3" method="post" action="">
    <input type="image" name="imageField3" id="imageField3" src="Picture/sub_2.png" width="50%" height="50%"/><br />
    <FONT FACE="Ms Sans Serif" color="#4A708B"> Stream 3</FONT>
  </form>
  <p>&nbsp;</p>
</div>
<div id="Show_Video"> 
<marquee>test</marquee>


</div> 
<div id="topright"><br /><center><FONT FACE="Calibri Light" color="FFFFFF" size="+2">Control Program</FONT></center></div>
<div id = "bottom"></div>
<div id="bottomLeft"><center><br><FONT FACE="Calibri Light" color="#FF7256" size="+3"> SELECT CHANEL</FONT></center></div>

<div id='button'>
<input name='username' id = 'username' type='hidden' value='<? echo $username ?>' />
<input name='date' type= 'hidden'  />
<input name='date' type= 'hidden' />
		<input type = "button" value= "next" id  = "next"/><input type = "button" value ="prev" id = "prev"/>
    <select name = 'channel' id='newUrl' style='width:80%;height:50px;background-color:#CCC' onchange="">
		<option >Select Channel</option>
        <option value = '1'>CH 01</option><option value = '2'>CH 02</option><option value = '3'>CH 03</option><option value = '4'>CH 04</option>
		<option value = '5'>CH 05</option><option value = '6'>CH 06</option><option value = '7'>CH 07</option>
		<option value = '8'>CH 08</option><option value = '9'>CH 09</option ><option value = '10'>CH 10</option><option value = '11'>CH 11</option>
		<option value = '12'>CH 12</option><option value = '13'>CH 13</option><option value = '14'>CH 14</option>
		<option value = '15'>CH 15</option><option value = '16'>CH 16</option><option value = '17'>CH 17</option><option value = '18'>CH 18</option>
		<option value = '19'>CH 19</option><option value = '20'>CH 20</option><option value = '21'>CH 21</option> <option value = '22'>CH 22</option>
		<option value = '23'>CH 23</option><option value = '24'>CH 24</option><option value = '25'>CH 25</option><option value = '26'>CH 26</option>
		<option value = '27'>CH 27</option><option value = '28'>CH 28</option> <option value = '29'>CH 29</option><option value = '30'>CH 30</option>
		<option value = '31'>CH 31</option><option value = '32'>CH 32</option><option value = '33'>CH 33</option><option value = '34'>CH 34</option>
		<option value = '35'>CH 35</option><option value = '36'>CH 36</option><option value = '37'>CH 37</option><option value = '38'>CH 38</option>
		<option value = '39'>CH 39</option><option value = '40'>CH 40</option><option value = '41'>CH 41</option><option value = '42'>CH 42</option>
		<option value = '43'>CH 43</option><option value = '44'>CH 44</option><option value = '45'>CH 45</option><option value = '46'>CH 46</option>
		<option value = '47'>CH 47</option><option value = '48'>CH 48</option><option value = '49'>CH 49</option><option value = '50'>CH 50</option>
		<option value = '51'>CH 51</option><option value = '52'>CH 52</option><option value = '53'>CH 53</option><option value = '54'>CH 54</option>
		<option value = '55'>CH 55</option><option value = '56'>CH 56</option> <option value = '57'>CH 57</option><option value = '58'>CH 58</option>
		<option value = '59'>CH 59</option><option value = '60'>CH 60</option><option value = '61'>CH 61</option><option value = '62'>CH 62</option>
		<option value = '63'>CH 63</option> <option value = '64'>CH 64</option><option value = '65'>CH 65</option><option value = '66'>CH 66</option>
		<option value = '67'>CH 67</option><option value = '68'>CH 68</option>
		</font></select>
		
</div>
<script>
 $("#newUrl").on('change',function(e){
	 $.ajax({
        url: "get.php",
        type: 'POST',
        data:{username: $("#username").val(),channel:$("#newUrl").val()},
        success: function(data) {
		//alert("Submitted");
		$("#Userdata").hide().load("UpdateUserdate.php").fadeIn(50);
		}
    });
	});

 
			</script>
<div id="bottom_home"><br><center><input name="home" type="image" src="Picture/1413257197_home-128.png" width="76" height="82" onclick = "checkH()"/></center></div>
<div id="dimmer"><BR><img src="Picture/volume-128.png" width="76" height="76" /><br><center></center></div>
<div id="Lighting"><br><center>
<img src="Picture/control-128.png" width="76" height="76" /><center></div>
<div id = "div1"></div>
</body>
</html>