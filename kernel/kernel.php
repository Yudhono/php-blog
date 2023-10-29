<?php
require_once 'config/database.php';

$dbcon = null;

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

  global $dbcon;
  $inputs = $_POST;

	if(isset($_POST['signUp'])){

    if(isset($inputs) && !empty($inputs) && is_array($inputs)){

			$inputs['username'] = filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
			$inputs['email'] = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
			$inputs['password'] = filter_input(INPUT_POST,'password');
			$prepare = mysqli_prepare($dbcon, "INSERT INTO users(username,email,password) VALUES(?,?,?)");
			mysqli_stmt_bind_param($prepare,"sss",$inputs['username'],$inputs['email'],password_hash($inputs['password'],PASSWORD_DEFAULT));

			if(mysqli_stmt_execute($prepare)){

				header('Location:auth.php#login');
				exit;

			}else{

				return false;

			}

		}

	}

}

function logIn(){

	global $dbcon;
	$inputs = $_POST;

	if(isset($inputs['login'])){

		if(isset($inputs) && !empty($inputs) && is_array($inputs)){

			$inputs['email'] = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
			$inputs['password'] = filter_input(INPUT_POST,'password');

			$result = mysqli_query($dbcon,"SELECT * FROM users");

			while($rows = mysqli_fetch_assoc($result)){

				 if($rows['email'] == $inputs['email'] && password_verify($inputs['password'],$rows['password'])){

					$_SESSION['uid'] = $rows['id'];
					$_SESSION['username'] = $rows['username'];
					$_SESSION['success'] = $_SESSION['username'].' logged in successfully';

					header('Location:profile.php?uid='.$rows['id']);

				}else if($rows['email'] != $inputs['email'] && !password_verify($inputs['password'],$rows['password'])){

					$_SESSION['error'] = 'The password or email is not correct, please try again';
					exit;

				}

			}

		}

	}

}
