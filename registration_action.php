<?php 
include_once('config.php');
include_once('functions/common_functions.php');

if (isset($_REQUEST['sbmit'])) {
	// Connect to database 
	$con = connect_db(); 
	// 
	$check = mysql_query('SELECT email FROM users WHERE email = "'.$_REQUEST['email'].'"');
	if (mysql_num_rows($check) > 0 ) {
		header('location: registration.php?email='.$_REQUEST['email'].'&e=ext');
		
				}
	else {
		$sql='INSERT INTO users VALUES (NULL, "' . $_REQUEST['fst_name'] . '", "'.$_REQUEST['lst_name'].'", "'.$_REQUEST['email'].'", "'.MD5($_REQUEST['pass']).'", NOW())';
	
	   $result = mysql_query($sql,$con);
	   if($result) {
			header('location: registration_confirm.php?=success');
			}
			else {
			header('location: registration.php?=failed');	
			}
		
		}
 
}
?>