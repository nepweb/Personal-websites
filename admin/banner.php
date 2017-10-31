<?php
session_start();
// include_once 'include/connection.php';
if(isset($_SESSION['login'])!=1){
  $_SESSION['err']="please login continue";
  $_SESSION['login']=0;
  header('location:index.php');
}

include_once 'include/header.php';

?>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">

			
		<a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
		 Add banner <i class="fa fa-plus"></i>
		</a>
		
		<div class="collapse" id="collapseExample">
		  <div class="well">
		 	<form action="act_banner.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">title</label>
					<input type="text" placeholder="bannertitle" name="banner_title" class="form-control">
				</div>	
				<div class="form-group">
					<label for="">Image</label>
					<input type="file" placeholder="banner_image" name="banner_image" class="form-control">
				</div> 	
				<div class="form-group">
					<label for="">short desc</label>
					<textarea name="banner_desc" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<input type="checkbox" value="1" name="banner_check" > check this field
				</div>	

				<div class="form-group">
					<input type="submit" value="submit" name="banner_submit" class="btn btn-success">

				</div>
	


		 	</form>
		  </div>
		</div>

	<div class="table-responsive">
				<table class="table">
					<tr>
						<th>S.N</th>
						<th>image</th>
						<th>title</th>
						<th>short desc</th>
						<th>action</th>
					</tr>


				<?php
				$sel="SELECT * FROM banner order by last_insert desc";
				$query=mysqli_query($link,$sel);
				if($query){
					$count=mysqli_num_rows($query);
					if($count>0){

					$i=1;		
					while($row=mysqli_fetch_array($query)){
				?>

					<tr>
						<td><?= $i?></td>
						<td><img src="images/banner/<?= $row['image'];?>" width="60"></td>
						<td><?= $row['title'];?></td>
						<td><?=substr($row['title_desc'],0,30);?>...</td>
						<td>
							<a href="" class="btn btn-success"> <i class="fa fa-pencil"></i></a>
							<a href="banner_delete.php?did=<?=$row['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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