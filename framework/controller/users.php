<?php
function index(){
	$data= array('title'=>'Users',
				 'html'=>'some content');

	
	render_view('main.php',$data);
}
function user(){
	$data= array('title'=>'User Magement',
				 'html'=>'User');

	
	render_view('main.php',$data);
}

?>