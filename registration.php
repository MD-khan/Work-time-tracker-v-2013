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
<meta name="description" content="" />
<link href='http://fonts.googleapis.com/css?family=Englebert|Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/fuctions.js" type="text/javascript"> </script>
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<div id="header" class="container">
	<div id="logo">
		<h1><a href="#">Work Time Money </a></h1>
	</div>
	 <!-- main manue-->
	   <!-- main manue-->
	 <?php include('manue/main_manue.php');?> 

	</div>

</div>
<div id="wrapper" class="container">
	<div id="page"> <!-main page  -->	
		<div id="content"> <a href="#" class="image-style"> <!-- image can be add here--></a>
 <form action="registration_action.php" name="frm" method="post" onsubmit="return ValidateForm()">
 <h2>Sign Up </h2>
   
<table width="419" cellspacing="2">
  <tr>
  	<?php 
	// Display a Message if User is exist 
	if (isset($_REQUEST['e'])  AND $_REQUEST['e'] == "ext" )  {
	?>
   <td colspan="2" align="center" style="color:#FF0000">
   <p>The User <?=$_REQUEST['email']?> </em> is already exists </p>
   	Please Log in to <a href="index.php">Click here</a>	</td>
   <?php } ?>
    </tr>
  <tr>
  
    <td width="112">First Name </td>
    <td width="295"><input name="fst_name" type="text" id="fst_name" size="30" /> </td>
  </tr>
  <tr>
    <td>Last Name </td>
    <td><input name="lst_name" type="text" id="lst_name" size="30" /></td>
  </tr>
  <tr>
    <td>E-mail Address </td>
    <td><input name="email" type="text" id="email" size="30" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input name="pass" type="password" id="pass" size="30" /></td>
  </tr>
  <tr>
    <td>Retype Password </td>
    <td><input name="repass" type="password" id="repass" size="30" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="sbmit" type="submit" id="sbmit" value="Sign Up" /></td>
  </tr>
</table>
</form>
	<p> </p>
	<p> Forgot Your Password ? <a href="#">Click Here</a></p>			
					
	    </div> <!-end main page  -->		
		<div id="sidebar">
			<div id="sbox1">
				
			
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
