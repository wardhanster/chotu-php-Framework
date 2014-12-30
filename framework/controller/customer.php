<?php
function index(){
	load_model('reports.php');

	$userdata = findUser(0,5);
	$logs = findLogs(0,5);
	$data= array('title'=>'Dashboard',
				 'total_query'=>totalLogs(),
				 'total_users'=>totalUser(),
				 'total_apps'=>totalApps(),
				 'users_recent'=>$userdata,
				 'logs'			=> $logs);
	
	
	render_view('main.php',$data);
}
function user(){
	$data= array('title'=>'User Magement',
				 'html'=>'User');

	
	render_view('main.php',$data);
}

?>