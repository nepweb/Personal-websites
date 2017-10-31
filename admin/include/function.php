<?php
include 'connection.php';

function insert_record($table,$field){
	global $link;	
	$keys=array_keys($field);
	$keys_string="`".implode("`,`", $keys)."`";
	$field_string="'".implode("','",$field)."'";


	$ins="INSERT INTO ".$table."(".$keys_string.")"."values($field_string)";

	
	$query=mysqli_query($link,$ins);
	// if($query){
	// 	echo "success";
	// }
	return $query;
}

// $field=array(
// 	'image'=>'abc.jpg',
// 	'title'=>'hello world',
// 	'short_desc'=>'this is text'

// 	);
// insert_record('banner',$field);


function upload_image($image,$distination,$location){
	$upd_dist=$distination;
	$img_name=$_FILES[$image]['name'];
	$img_tmp_name=$_FILES[$image]['tmp_name'];
	$img_size=$_FILES[$image]['size'];
	
	$ext=pathinfo($img_name,PATHINFO_EXTENSION);
	$name=strtolower(md5(time()).".".$ext);
	//echo $name;
	
	$img_ext=array('jpg','jpeg','png','gif');

	if(!is_dir($upd_dist)){

		mkdir($upd_dist);
	}


	if(in_array($ext, $img_ext)){

		if($img_size < (1024 * 1024 * 10)){
			if(move_uploaded_file($img_tmp_name, $upd_dist."/".$name)){
				$_SESSION['msg']="image successfully uplodate";
					header('location'.$location);
				return $name;

			}else{
					$_SESSION['error']="invalid image upload";
					header('location'.$location);
			}
		}
		else{
			$_SESSION['error']="your image size too large";
			header('location'.$location);
		}


	}
	else{
		$_SESSION['error']="invalid extension";
		header('location'.$location);
	}

}


function input($x){
	global $link;
	$test=trim($x);
	$test1=mysqli_real_escape_string($link,$test);
	return $test1;
}


function delete_record($id,$location){
	global $link;
	$delete="delete from contact where id='$id'";
	mysqli_query($link,$delete);
	header('location:'.$location);
}

function delete_banner($id,$location){
	global $link;
	$delete="delete from banner where id='$id'";
	mysqli_query($link,$delete);
	header('location:'.$location);
}

?>