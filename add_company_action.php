<?php 
session_start();

include_once('config.php');
include_once('functions/common_functions.php');


$uid = $_SESSION['uid'];

$sql='INSERT INTO company VALUES (NULL, "'. $uid .'", "' . $_REQUEST['com_name'] . '","'.$_REQUEST['hourly_pay'].'", "'.$_REQUEST['com_address'].'", "'.$_REQUEST['com_phone'].'", "'.$_REQUEST['com_web'].'")';

//exit($sql);

$con = connect_db();
$result = mysql_query($sql, $con);
if($result){
	
	header('location: add_company.php?user_id=' . $uid . '&y=success');
	//header('location: add_company.php?user_id='.$_REQUEST ['com_name'].'&y=success');
}
else{
	header('location: add_company.php?com_name='.$_REQUEST ['com_name'].'&y=failed');
}


?>