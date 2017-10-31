<?php

include_once 'include/function.php';
include_once 'include/connection.php';
if(isset($_GET['did'])){
	$id=$_GET['did'];
	delete_banner($id,'banner.php');
}


?>