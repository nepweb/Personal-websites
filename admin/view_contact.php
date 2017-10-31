<?php

include_once 'include/header.php';
include_once 'include/connection.php';

if(isset($_GET['vid']) && isset($_GET['view']) && $_GET['view']==1 ){
	
$id=$_GET['vid'];
$view=$_GET['view'];
$select="select * from contact where id='$id'";
$query=mysqli_query($link,$select);
if($query){
	$fetch=mysqli_fetch_array($query);
	if($view==1){
	$upd="update contact set status='1' where id='$id'";
	$query=mysqli_query($link,$upd);
	}
}

}else{
	header('location:contact.php');
}



?>


<div class="container">
	<div class="row">
		<div class="cpl-md-12">
			<p>
				Full NAME : <?= $fetch['firstname']." ".$fetch['lastname'];?>
			</p>
			<p>
				email : <?= $fetch['email'];?>
			</p>
			<p>
				subject : <?= $fetch['subject'];?>
			</p>
			<p>
				message : <?= $fetch['message'];?>
			</p>

			<a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
			Reply <i class="fa fa-send"></i>
			</a>
			
			<div class="collapse" id="collapseExample">
			  <div class="well">
					<form action="sent-email.php" method="post">

						<input type="text" hidden name="name" value="<?=$fetch['firstname'].' '.$fetch['lastname']; ?>" placeholder="">
						<div class="form-group">
							<label for="">To</label>
							<input type="text" name="email" value="<?=$fetch['email'];?>" class="form-control">
						</div>
						<div class="form-group">
							<label for="">subject</label>
							<input type="text" name="subject"  class="form-control">
						</div>

						<div class="form-group">
							<label for="">message</label>
							<textarea name="msg" class="form-control"></textarea> 
						</div>

						<div class="form-group">
							<input type="submit" name="sent"  class="btn btn-success">
							
						</div>



					</form>		   	
	

			  </div>
			</div>
		</div>
	</div>
</div>



<?php
include 'include/footer.php';
?>