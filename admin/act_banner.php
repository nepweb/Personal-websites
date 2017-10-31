<?php
session_start();


include_once 'include/function.php';
include_once 'include/connection.php';


if(isset($_POST['banner_submit'])){
	$banner_title=$_POST['banner_title'];
	$banner_desc=$_POST['banner_desc'];
	@$banner_check=$_POST['banner_check'];

	$image_name=upload_image('banner_image','images/banner','banner.php');
	if(!empty($image_name)){
		$fields=array(
			
			'image'=>$image_name,
			'title'=>$banner_title,
			'title_desc'=>$banner_desc,
			'status'=>$banner_check

			);

		$ins=insert_record('banner',$fields);
		if($ins){
			$_SESSION['msg']="image successfully uploded";
			header('location:banner.php');
		}else{
			$_SESSION['errmsg']="image faild to  uploded";
			header('location:banner.php');
		}
	}

}

?>