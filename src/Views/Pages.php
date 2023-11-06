<?php
namespace Views;

class Pages{

	public function __construct($page){

    include 'templates/header.inc.php';
    include 'templates/'.$page.'.inc.php';
		include 'templates/footer.inc.php';

	}

}
