<?php
namespace Auth;
use DB\DB;

class Auth{
  public $username;
	public $email;
	public $password;
  public $db;
	
	public function signUp(){

	  
		if(isset($_POST['signUp']) && !empty($_POST['signUp'])){

			$this->username = $_POST['username'];
			$this->email = $_POST['email'];
			$this->password = $_POST['password'];
			
			if((isset($this->username) && !empty($this->username)) && (isset($this->email) && !empty($this->email))
				&& (isset($this->password) && !empty($this->password))){
			
				$this->username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
			  $this->email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
			  $this->password = filter_input(INPUT_POST,'password');
			
			  $this->db = new DB();
			
			  $prepare = $this->db->dbcon->prepare("INSERT INTO users(username,email,password) VALUES(?,?,?);");
			  $prepare->bind_param('sss',$this->username,$this->email,password_hash($this->password,PASSWORD_DEFAULT));
			
			  if($prepare->execute()){

				  header('Location:./auth.php#login');
				
			  }
			}
		}
  }
  
  public function logIn(){
		
		if(isset($_POST['login']) && !empty($_POST['login'])){

			$this->email = $_POST['email'];
			$this->password = $_POST['password'];
			
			if((isset($this->email) && !empty($this->email)) && (isset($this->password) && !empty($this->password))){
			
			  $this->email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
			  $this->password = filter_input(INPUT_POST,'password');
			
			  $this->db = new DB();
				
				
			}
		}
	}
}
