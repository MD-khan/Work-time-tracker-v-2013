<?php 
session_start();

if(!isset($_SESSION['is_logged_in'])){
header('location:index.php?not_log_in='.$_SESSION['is_logged_in'].'&lg=failed');
}
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
  <h3 align="right">Welcome:
    <?=ucfirst($_SESSION['lstname'])?>
    <?=ucfirst($_SESSION['fstname'])?>
  </h3>
  <div id="logo">
    <h1> Hours keeper </h1>
  </div>
  <!-- main manue-->
  <?php include('manue/main_manue.php');?>
</div>
<div id="wrapper" class="container">
<div class="error" id="page">
  <!--main page  -->
  <div id="content"> <a href="#" class="image-style">
    <!-- image can be add here-->
    </a>
    <?php if( isset($_REQUEST['y']) AND $_REQUEST['y'] == "success") {
	
	echo "Company has been inserted.";
	}
	else if( isset($_REQUEST['y']) == "failed"){
	  echo "Company  insertion failed.";
	  }
	?>
    <h4>Add Your Company </h4>
    <form action="add_company_action.php" method="post">
      <tr>
        <table width="337" cellpadding="2" cellspacing="2" id="table">
          <tr>
            <td width="179">Enter Your Company </td>
            <td width="142"><input name="com_name" type="text" id="com_name" /></td>
          </tr>
          <tr>
            <td>Company's Address </td>
            <td><input name="com_address" type="text" id="com_address" /></td>
          </tr>
		  <tr>
            <td>Hourly Pay </td>
            <td><input name="hourly_pay" type="text" id="hourly_pay" /></td>
          </tr>
          <tr>
            <td>Phone: </td>
            <td><input name="com_phone" type="text" id="com_phone" /></td>
          </tr>
          <tr>
            <td>Website:</td>
            <td><input name="com_web" type="text" id="com_web" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input name="Sbmt" type="submit" id="Sbmt" value="Add " /></td>
          </tr>
        </table>
    </form>
    <p> Forgot Your Password ? <a href="#">Click Here</a></p>
  </div>
  <!--end main page  -->
  <div id="sidebar">
    <div id="sbox1">
      
	   <?php 	  
$sql='SELECT * FROM company WHERE company.user_id = "'.$_SESSION['uid'].'" ORDER BY com_id'; 
	      //exit ($sql);
	       $con=connect_db();
	      $result = mysql_query ($sql, $con);
	       if ($result && mysql_num_rows ($result)>0) {
		   	echo "Your Company:";
			echo "<br />";
			echo "<br />";
	     while ($data = mysql_fetch_array ($result)){
		  
		 
	     ?>
		  <?php  
		   
		  echo $data['com_name'];
		  echo "<br />";
		  echo "Hourly Pay:$"; 
		  echo $data['hourly_pay'];
			echo "<br />";
			echo "<br />";  
		  ?>
		  
		 
		 <?php }
		 }
		 	else 
			echo "You can add more than one company where you work.";
		 ?>
		 
      <div id="sbox2">
	  
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <p>Copyright (c) 2013 monirkhan.net</a></p>
</div>
</body>
</html>
