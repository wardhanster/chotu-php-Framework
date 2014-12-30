<?
	function index(){
	load_model('app.php');



	$data= array('title'=>'App Management :'.SITENAME,
				 'myapps'=>findMyApps());
	
		render_view('app-mangement.php',$data);
	}

	function addApp(){
		//function creatNewApp($appName,$description,$image)
		load_model('app.php');
		$_POST = sanatizeArray($_POST);
		

		// check if we have a possible file upload
		// skip to createNewApp when encontered no files.
		$image = uploadImage('icon',getcwd().UPLOAD_LOCATION_ICONS);// pocket name, location

		if($image=='Failed'){
			$image='';
		}else{

		}
		// check if we have a possible file upload ends


		
		if(creatNewApp($_POST['appname'],$_POST['desc'],$image)){
			echo 'App Creation done!';
			//header('location:?c=app&success=True');
		}else{
			echo 'App Creation Faile!';
			//header('location:?c=app&success=False');
		}

		

	}
?>

