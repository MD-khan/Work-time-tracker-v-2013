<?php 
session_start();

include_once('config.php');
include_once('functions/common_functions.php');


$uid = $_SESSION['uid'];

$sql='INSERT INTO addhours VALUES (NULL, "'. $uid .'", "' . $_REQUEST['com_id'] . '",
 "' . $_REQUEST['timein'] . '", "'.$_REQUEST['timeout'].'", "'.$_REQUEST['minute'].'", NOW())';

//exit($sql);

$con = connect_db();
$result = mysql_query($sql, $con);
if($result){
	
	header('location: add_hours.php?y=success');
	//header('location: add_company.php?user_id='.$_REQUEST ['com_name'].'&y=success');
}
else{
	header('location: add_hours.php?y=failed');
}


?>