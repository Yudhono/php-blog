<?php

namespace DB;

use \mysqli;

class DB{
  
	private $host;
	private $user;
	private $pass;
	private $dbname;
	public $dbcon;
	
  public function __construct(){
		
		require 'config/database.php';
		
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->dbname = $dbname;
		
		$this->dbcon = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
		
	}
}
