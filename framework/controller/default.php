<?php 
// default controller
function index(){
	$data= array('title'=>'THIS WORKS!',
				 'html'=>'BUT THE PAGE YOU ARE LOOKING FOR IS NOT AVAILABLE');


	render_view('main.php',$data);
}

?>