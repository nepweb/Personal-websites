<?php
session_start();
include 'include/connection.php';

if(isset($_POST['btn-login'])){

	$user = isset($_POST['uname']) ? $_POST['uname'] : null;
	$pass = isset($_POST['upass']) ? $_POST['upass'] : null;

	if(is_null($user) && is_null($pass)){
		$_SESSION['err']="plese input all fields";
		$_SESSION['login']=0;
		header('location:index.php'); 
		die;
	}

	$user=mysqli_real_escape_string($link,trim($user));
	$pass=mysqli_real_escape_string($link,trim($pass));

	$encpass=sha1($pass);
// echo $encpass;

		$sel="SELECT username,email,password,status from tbl_class230 where (username=? or email=?) and password=?";
		$stmt=mysqli_prepare($link,$sel);
		mysqli_stmt_bind_param($stmt,"sss",$user,$user,$encpass);
		mysqli_stmt_bind_result($stmt,$user,$email,$pass,$status);
		$exec=mysqli_execute($stmt);
			if($exec){
				mysqli_stmt_store_result($stmt);
				
				$count=mysqli_stmt_num_rows($stmt);
				if($count==1){
					mysqli_stmt_fetch($stmt);
					if($status==1){
						$_SESSION['login']=1;
						if(isset($_SESSION['login'])==1){
						$_SESSION['user']=$user;
						$_SESSION['email']=$email;
						$_SESSION['pwd']=$pass;
						header('location:dashboard.php');
							}
					}
					else{
						$_SESSION['err']="plese contact administrator ";
						$_SESSION['login']=0;
						header('location:index.php');


					}


				}
				else{
				$_SESSION['err']="please username and password not found";
				$_SESSION['login']=0;
				header('location:index.php');
				}

			}


}


else {
			$_SESSION['err']="invalid attempt to login";
		$_SESSION['login']=0;
		header('location:index.php');
	}


?>