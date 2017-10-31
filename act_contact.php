<?php
include_once 'admin/include/connection.php';
include_once 'admin/include/function.php';

session_start();

if(isset($_POST['btn_submit'])){

$fname=input($_POST['fname']);
$lname=input($_POST['lname']);
$email=input($_POST['email']);
$subject=input($_POST['subject']);
$message=input($_POST['msg']);


if($fname!="" && $lname !="" && $email!="" && $subject!="" && $message!=""){
	$field=array(
		'firstname'=>$fname,
		'lastname'=>$lname,
		'email'=>$email,
		'subject'=>$subject,
		'message'=>$message,
		'status'=>0


		);

	$ins=insert_record('contact',$field);
	if($ins){
		$_SESSION['msg1']="message has been sent successfully ";
		header('location:project.php#contact');

	}else{
		$_SESSION['err1']="unable to sent message";
		header('location:project.php#contact');

	}


}else{
	$_SESSION['err']="please input all fields ";
	header('location:project.php#contact');
}


}

?>