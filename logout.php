<?php 
session_start();
$_SESSION = array(); 
session_destroy();
header('location: index.php');
header('location:index.php?logout='.$_SESSION['uid'].'&l=logout');

?>