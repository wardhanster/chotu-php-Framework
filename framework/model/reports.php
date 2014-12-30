<?

function totalLogs($monthly=false){
	$con=creatConnection();
	if($monthly){
		$sql="";
	}else{
		$sql="SELECT COUNT(*) as total  FROM `logs` where customer_id=".$_SESSION['id'];
	}
	
	$result=mysqli_fetch_assoc(mysqli_query($con,$sql));

	if($result){
		return $result['total'];
	}else{
		return 0;
	}
	

}

function totalUser($monthly=false){
	$con=creatConnection();
	if($monthly){
		$sql="";
	}else{
		$sql="SELECT COUNT(*) as total  FROM `client_users` where customer_id=".$_SESSION['id'];
	}
	
	$result=mysqli_fetch_assoc(mysqli_query($con,$sql));

	if($result){
		return $result['total'];
	}else{
		return 0;
	}
	

}

function totalApps(){
		$con=creatConnection();
	
		$sql="SELECT COUNT(*) as total  FROM `app` where customer_id=".$_SESSION['id'];
	
	
	$result=mysqli_fetch_assoc(mysqli_query($con,$sql));

	if($result){
		return $result['total'];
	}else{
		return 0;
	}
	

}

function findUser($start=0,$rownos=10){
	$con=creatConnection();

	$sql=	"SELECT c . * , a.app_name
			FROM client_users c, app a
			WHERE c.app_id = a.id
			AND c.customer_id ={$_SESSION['id']}
			ORDER BY  `c`.`id` DESC 
			LIMIT {$start},{$rownos}";
	
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

function findLogs($start=0,$rownos=10){
	$con=creatConnection();

	$sql=	"SELECT l . * , a.app_name
			FROM logs l, app a
			WHERE l.app_id = a.id
			AND l.customer_id ={$_SESSION['id']}
			ORDER BY  `l`.`id` DESC 
			LIMIT {$start},{$rownos}";
	
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



?>