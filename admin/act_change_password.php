
<?php
session_start();
include 'include/connection.php';
if($_SESSION['login']==0){
	$_SESSION['err']="please invalid attempt to login ";
	$_SESSION['login']=0;
	header('localhost:change_password.php');
}




if(isset($_POST['btn_change'])){

	$o_pass=mysqli_real_escape_string($link,trim($_POST['opass']));
	$n_pass=mysqli_real_escape_string($link,trim($_POST['npass']));
	$c_pass=mysqli_real_escape_string($link,trim($_POST['cpass']));


	if($o_pass!="" && $n_pass!="" && $c_pass!=""){
			$en_opass=sha1($o_pass);
			$en_npass=sha1($n_pass);
			$en_cpass=sha1($c_pass);


			// print_r($_POST);
			// print_r($_SESSION);
			if($en_opass==$_SESSION['pwd']){

				if($en_npass==$en_cpass){

					$update="UPDATE tbl_class230 set password='$en_npass' where 
					username='".$_SESSION['user']."' and email='".$_SESSION['email']."'";

					$res=mysqli_query($link,$update);
						if($res){
							$_SESSION['msg']="change successfully";
							header('location:change-password.php');
						}
						else{
							$_SESSION['err']="invalid number";
							header('location:change-password.php');
						}

				}
				else{
					$_SESSION['err']="new password does not match";
					header('location:change-password.php');
				}


			}
			else{
				$_SESSION['err']="old password does not match";
				header('location:change-password.php');

			}




	}
	else{
		$_SESSION['err']="please inpute all field";
		header('location:change-password.php');
	}



}




?>