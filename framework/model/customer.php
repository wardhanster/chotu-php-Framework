<?
	function checkLogin(){
		$con = creatConnection();

		foreach ($_POST as $key => $value) {
			$_POST[$key]=mysqli_real_escape_string($con,$value);
		}
		
		$sql= "SELECT * FROM customers 
				WHERE email='{$_POST['user']}' AND
				pass='".md5($_POST['password'])."'";

		$result = mysqli_fetch_assoc((mysqli_query($con,$sql)));
		if($result){
			foreach ($result as $pocket => $value) {
				if($pocket=='pass'){

				}else{
					$_SESSION[$pocket]=$value;	
				}
				
			}
			$founduser= true;

		}else{
			$founduser= false;
		}

		

		
		if($founduser){
			return true;
		}else{
			return false;
		}
		
	}
?>