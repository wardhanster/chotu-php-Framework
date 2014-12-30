<?

function findMyApps(){
	$con = creatConnection();
	$sql= "SELECT * FROM app WHERE customer_id={$_SESSION['id']} ORDER BY id DESC";
	$result = mysqli_query($con,$sql);
		if($result){

			$response=array();
			
			while($row = mysqli_fetch_assoc($result)){

				$response[]=$row;
			}
			return $response;
	}else{
		$response=false;
	}	
}

function creatNewApp($appName,$description='No Description Provided',$image=''){
	// $appName is mandatory
	$con = creatConnection();

	$sql = "INSERT INTO app (customer_id,app_name,id_hash,description,logo)
			VALUES ({$_SESSION['id']},
					'{$appName}',
					'".md5(date("Y-m-d H:i:s"))."',
					'$description','$image')";
		
	
	$result = mysqli_query($con,$sql);
	
	

	
	if($result){
		return true;
	}else{
		return false;
	}
	


}




?>