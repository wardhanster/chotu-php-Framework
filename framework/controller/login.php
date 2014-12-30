<?php 
// default function loaded if no function is supplied

function index(){

	$mydata= array( 'title'=>	'Backend Login',
				 	'scripts'=>	'<script type="text/javascript">
				 					// no script at the moment
				 			    </script>');


	render_view('login.php',$mydata);
}

function tryLogin(){
	load_model('customer.php');
	$mydata= array( 'title'=>	'Backend Login :'.SITENAME,
				 	'scripts'=>	'<script type="text/javascript">
				 					// no script at the moment
				 			     </script>');

// check if login is successfull 
// if it is successfull redirect to backend-controller

	if(checkLogin()){
		header('location:?c=customer');	
	}
	

	render_view('login.php',$mydata);
}

?>