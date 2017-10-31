<?php
session_start();
include 'include/connection.php';
if(isset($_SESSION['login'])!=1){
  $_SESSION['err']="please login continue";
  $_SESSION['login']=0;
  header('location:index.php');
}
include 'include/header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<?php
			if(isset($_SESSION['emailmsg'])){
						echo "<div class='alert alert-success' >".$_SESSION['emailmsg']."</div>";
						unset($_SESSION['emailmsg']);

					}
					if(isset($_SESSION['errmag'])){
						echo "<div class='alert alert-danger' >".$_SESSION['errmsg']."</div>";
						unset($_SESSION['errmsg']);

					}

		?>
			<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<th>S.N</th>
						<th>Full Name</th>
						<th>email</th>
						<th>subject</th>
						<th>message</th>
						<th>status</th>
						<th width="100">action</th>
					</tr>

					<?php
						$sel="SELECT * from contact order by id desc";
						$res=mysqli_query($link,$sel);
						if($res){
							$count=mysqli_num_rows($res);
							if($count>0){
								$i=1;
								while($row=mysqli_fetch_assoc($res)){
									?>
										
								<tr>
									<td><?= $i ?></td>
									<td><?=$row['firstname']." ".$row['lastname']; ?></td>
									<td><?=$row['email']; ?></td>
									<td><?= $row['subject'];?></td>
									<td><?=substr($row['subject'],0,30)?></td>
									<td>
									<?php 
										if($row['status']=='1'){
											echo "<label class='label label-success'>read</label>";
										}else{
											echo  "<label class='label label-danger'>unread</label>";
										}
									?>
								

									</td>
									<td>
										<a href="view_contact.php?vid=<?= $row['id'];?>&view=1" class="btn btn-success"><i class="fa fa-eye"></i></a>
										<a href="cont_delete.php?did=<?=$row['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>

									</td>
								</tr>
									<?php
									$i++;

								}
							}
						}


					?>


				</table>
			</div>
		</div>

	</div>
</div>



<?php
include 'include/footer.php';
?>