<?php 
include_once('config.php');
include_once('functions/common_functions.php');

 
$userid = $_REQUEST['email'];
$password = $_REQUEST['pass'];

$con = connect_db();
$check = mysql_query('SELECT email FROM users WHERE email = "'.$_REQUEST['email'].'"');
	if (mysql_num_rows($check) == 0 ) {
		header('location: index.php?email='.$_REQUEST['email'].'&n=not_in');
				exit();
				}

else {
// To protect MySQL injection (more detail about MySQL injection)
$userid = stripslashes($userid);
$password = stripslashes($password);
$userid = mysql_real_escape_string($userid);
$password = mysql_real_escape_string($password);

 
$sql = 'SELECT * FROM users WHERE email = "' . $userid . '" AND pass = "' .MD5($password) . '" ';

$result = mysql_query($sql, $con);
$data = mysql_fetch_array($result);
session_start();

if($result) {
		if( mysql_num_rows($result) == 1 ) {
			  $_SESSION['login'] = 1;
			  $_SESSION['user_id'] = $userid;
			  $_SESSION['MM_Username'] = $userid;
			
			 $_SESSION['username']= $data['email'];
			 $_SESSION['lstname']= $data['lst_name'];
			 $_SESSION['fstname']= $data['fst_name'];
			 $_SESSION['uid']= $data['user_id'];
			//$_SESSION['pwd']= $password;
			$_SESSION['is_logged_in'] = 1;


			 
header('location:add_hours.php?success='.$_SESSION['username'].'&y=success');
}
else {
header('location:index.php?failed='.$_GET['pass'].'&y=failed');
}
}
}
?>

