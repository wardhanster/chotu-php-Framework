<?
session_start();
?>
<?php require_once('configure.php');?>

<?

	if(debuging){

	}else{
		error_reporting(0);
	}
?>
<?php

// find the appropriate controller
	if( empty($_GET['c']) || $_GET['c']==''){
		$mb_c_File = DEFAULT_C;
	}else{
		$mb_c_File = $_GET['c'].'.php';
	}	
// find the supplied function 
	if(empty($_GET['f'])||$_GET['f']==''){
		$mb_c_Func = DEFAULT_F;
	}else{
		$mb_c_Func = $_GET['f'];
	}

// include the processed controller 
	include('controller/'.$mb_c_File);
// execute the asked function 	
	$mb_c_Func();


function render_view($filename,$data){
	if(include('views/'.$filename)){

	}else{
		echo '<h2 class="text-danger">NO VIEW FILE PRESENT NAMED:'.$filename.'</h2>';
	}
}
function load_model($filename){
	if(include('model/'.$filename)){

	}else{
		echo '<h2 class="text-danger">NO MODEL FILE PRESENT NAMED:'.$filename.'</h2>';

	}
}

	function sanatizeArray($variable,$allowHtml='no'){
		$con = creatConnection();
		if($allowHtml == 'no'){
			foreach ($variable as $key=>$value){
				$variable[$key]	= mysqli_real_escape_string($con,strip_tags($value));
				//mysqli_real_escape_string ( mysqli $link , string $escapestr )
			}
		}
		return $variable;

	}

	function uploadImage($pocketName,$location){

	$generatedName = date("Ymd_His");
	$filename=$_FILES[$pocketName]['name'];

	$extension=strtolower(substr($filename, strpos($filename, '.')+1));
	$generatedName = $generatedName.'.'.$extension;


	$allowedMimes = array('image/png', 'image/jpg', 'image/gif', 'image/pjpeg');
	

	
	$allowedExtentions = array('jpg','png','PNG','JPG');

		if(in_array($_FILES[$pocketName]['type'], $allowedMimes) && ($_FILES[$pocketName]['size']<MAX_IMAGE_SIZE)){

		

			if(!exif_imagetype($_FILES[$pocketName]['tmp_name']) == IMAGETYPE_PNG){
				$error = 'In Valid File Format!';
			}
			if(!exif_imagetype($_FILES[$pocketName]['tmp_name']) == IMAGETYPE_JPEG){
				$error = 'In Valid File Format!';
			}

		}else{
			$error='Invalid File Type Attempted';
		}

		if(empty($error)){

			// do the actual upload!

			if(move_uploaded_file($_FILES[$pocketName]['tmp_name'], $location.$generatedName)){
				return $generatedName;	
			}else{
				return 'Failed';
			}



			
		}else{
			return $error;
		}

	}

?>