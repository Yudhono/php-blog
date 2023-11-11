<?php
namespace Views;
use Auth\Auth;

class Pages{
	
	public function __construct($page,$title){
		// Start the session automatic when pages loads
    session_name('PHPBlog');
		session_start();
		
    include 'templates/header.inc.php';
		$title = 'PHP Blog';
    include 'templates/'.$page.'.inc.php';
		include 'templates/footer.inc.php';

	}

	public function userId(){

		$auth = new Auth();
    $uid = null;
		
		if(isset($auth->logIn()->id) && !empty($auth->logIn()->id)){
			
			$auth->logIn()->id;
			$uid = $auth->logIn()->id;
			header('Location:./profile.php?uid='.$uid);//Redirect to profile page with user id that I get from database
			
		}
		
	}
	
	public function checkIfUserAuth(){
		
		$auth = new Auth();
		if(!isset($_GET['uid']) && empty($_GET['uid']) != $auth->logIn()->id){
			
			header('Location:./auth.php');
			
		}
		
	}
	
}
