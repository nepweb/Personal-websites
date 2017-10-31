<?php

session_start();
include_once 'include/connection.php';
//include_once 'function.php';

if($_SERVER['REQUEST_METHOD'] != 'POST') {
	header('location:dashboard.php');die;
}


// if($_SESSION['login']==0){
// 	$_SESSION['err']="invalid attempt to login";
// 	$_SESSION['login']=0;
// 	header('location:index.php');

// }

$siteTitle = isset($_POST['personal-name']) ? $_POST['personal-name'] : 'Untitled';

$query = "UPDATE settings SET name='$siteTitle'";
mysqli_query($link, $query);
header('location:dashboard.php');


?>