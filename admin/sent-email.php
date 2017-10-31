<?php
session_start();
if(isset($_POST['sent'])){
	// print_r($_POST);


	$fullname=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['msg'];
	$header="From :sumanadhikari406@yahoo.com";
	$header.="Dear".$fullname;
	$to=$email;
	$subject=$subject;
	$message=$message;
	$mail=mail($header,$to,$subject,$message);

	if($mail){
		$_SESSION['emailmsg']="email sent successfully ";
		header('location:contact.php');	
	}
	else
	{
		$_SESSION['errmsg']="email faild to  sent ";
		header('location:contact.php');

	}

}

?>