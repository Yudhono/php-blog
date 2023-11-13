<?php
namespace Views;
use Auth\Auth;

class Pages{
	
	public function __construct($page,$title){

		session_name('PHPBlog');
    session_start();
		
    include 'templates/header.inc.php';
		$title = 'PHP Blog';
    include 'templates/'.$page.'.inc.php';
		include 'templates/footer.inc.php';

	}
	
}
