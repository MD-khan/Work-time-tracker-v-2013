<?php
include_once('config.php');
include_once('functions/common_functions.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Prospect 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130902

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description"  content="" />
<link href='http://fonts.googleapis.com/css?family=Englebert|Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/login.js" type="text/javascript"> </script>
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<div id="header" class="container">
	<div id="logo">
		<h1> Hours keeper </h1>
	</div>
				
				<div align="center"> 
				<!-- Show Message to User agter Log out-->
				<?php
				if(isset($_REQUEST['l']) AND $_REQUEST['l'] == "logout") {
				?>
				<h2>You Successfully Log out</h2>
				<?php } ?>			
				
				<?php
				if(isset($_REQUEST['lg']) AND $_REQUEST['lg'] == "failed") {
				?>
				<h2 style="color:#FF0000">You are not Log in to Access this page</h2>
				<?php } ?>	
				</div>	
	
	<!-- main manue-->
 	 <?php include('manue/main_manue.php');?> 
</div>

<div id="wrapper" class="container">
	<div id="page"> <!-main page  -->	
	<div id="content"> <a href="#" class="image-style"> <!-- image can be add here--></a>
 <form action="login_action.php" method="post" name="frm" onsubmit="return ValidateLogin()">
 
 <h2>Login </h2>
     <?php
 // Display a Message if User is exist 
	if (isset($_REQUEST['n'])  AND $_REQUEST['n'] == "not_in" )  {
?>
<font color="#FF0000">You are not in this system. Please Sign Up on this site<a href="registration.php"> Click Here</a> </font >
  <?php }?>
  <!-- If Password and User Name incorrect-->
  <?php
 // Display a Message if User is exist 
	if (isset($_REQUEST['y'])  AND $_REQUEST['y'] == "failed" )  {
?>
<font color="#FF0000"> User Name or Password Incorect. Try Again</font >
  <?php }?> 

<table width="419">
  <tr>
  	 
    <td width="112">Your Email </td>
    <td width="295"><input name="email" type="text" id="email" size="30" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input name="pass" type="password" id="pass" size="30" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="lgnsbtn" type="submit" id="lgnsbtn" value="Login" /></td>
  </tr>
</table>
</form>
	<p> </p>
	<p> Forgot Your Password ? <a href="#">Click Here</a></p>			
					
	    </div> <!--end main page  -->		
		<div id="sidebar">
			<div id="sbox1">
				<h2>Not a Member ?</h2>
				<li class="first"><a href="registration.php">Click Here for Registration</a></li>
					
			
		  </div>
			<div id="sbox2">
				<h2> Contract us </h2>
					<ul class="list-style2">
					<p> Monir khan <br />
						email: monirkhan707@gmail.com <br />
						phone: 617-866-3824
					</p>	
						
					</ul>
			</div>
		</div>
	</div>
</div>
<div id="footer">
	<p>Copyright (c) 2013 monirkhan.net</a></p>
</div>
</body>
</html>
