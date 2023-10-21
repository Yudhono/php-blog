<?php
require_once 'config/database.php';

function dbCon(){

	global $dbcon, $host,$user,$pass,$dbname;
	$dbcon = mysqli_connect($host,$user,$pass,$dbname);

	if($dbcon){

		return $dbcon;

	}else{

		return die('You have a problem with your database connection, please try again');

	}
}
dbCon();

function signUp(){




}
