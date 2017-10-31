<?php
session_start();
if(isset($_SESSION['login'])==0){
	$_SESSION['err']="invalid attempt to login";
	$_SESSION['login']=0;
	header('location:index.php');
}
include 'include/connection.php';

include 'include/header.php';
?>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
				<form action="act_change_password.php" method="POST">
					<div class="form-group">
						<label for="">Old password</label>
						<input type="password" name="opass" placeholder="enter your old password" class="form-control">
					</div>	

					<div class="form-group">
						<label for="">New Password</label>
						<input type="password" name="npass" placeholder="enter your old password" class="form-control">
					</div>	

					<div class="form-group">
						<label for="">confirm password</label>
						<input type="password" name="cpass" placeholder="enter your old password" class="form-control">
					</div>	

					<div class="from-group">
						<input type="submit" class="btn btn-success" name="btn_change" value="change password">

					</div>


				</form>

				<?php
					if(isset($_SESSION['err'])){
						echo "<div class='alert alert-danger' >".$_SESSION['err']."</div>";
						session_unset($_SESSION['err']);

					}
					if(isset($_SESSION['msg'])){
						echo "<div class='alert alert-success' >".$_SESSION['msg']."</div>";
						session_unset($_SESSION['msg']);

					}

				?>
		</div>
</div>
<?php
include 'include/footer.php';

?>