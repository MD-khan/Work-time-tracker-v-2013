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
<meta name="description" content="" />
<link href='http://fonts.googleapis.com/css?family=Englebert|Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
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
	 <?php include('manue/main_manue.php');?> 

</div>
<div id="wrapper" class="container">
	<div id="page"> <!-main page  -->	
		<div id="content"> <a href="#" class="image-style"> <!-- image can be add here--></a>
  
 <h2>Congratulation!</h2>
 <?php 
		
		$sql = 'SELECT * FROM users ORDER BY user_id DESC LIMIT 1';
		$con =connect_db();
		$result = mysql_query($sql, $con);
		if ( $result && mysql_num_rows($result)>0) {
			$data = mysql_fetch_array($result)
					 	
		?>
 	 	<h1> <?=ucfirst($data['lst_name'])?></h1>
		 <?php 
		 	}
		 ?>
	<p> </p>
	<p> Login Now <a href="index.php">Click Here</a></p>			
					
	    </div> <!-end main page  -->		
		<div id="sidebar">
			<div id="sbox1">
				<h2>...................................</h2>
				 
					
			
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
