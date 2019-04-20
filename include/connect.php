<?php

// MySQL connection file along with necessary functions for DB access.
session_start();
# For Ubuntu
$username = 'shrikrishna';
$password = 'root';

#For Windows
// $username = 'root';
// $password = '';

$host = 'localhost';
$database = 'test';

$conn = mysqli_connect($host,$username,$password,$database) or die("Error: Could not access DB.");

// PHP functions for validations and quick repetitive tasks 

function validateLogin(){
	if(!isset($_SESSION['USER-NAME']) || $_SESSION['USER-NAME']==""){
		# User login not set up
		header("Location: index.php");
	}
}

function setError($ename,$emsg){
	$_SESSION[$ename] = $emsg;
}

function showError($ename){
	
	if(isset($_SESSION[$ename])){
		$error_msg = $_SESSION[$ename];
		unset($_SESSION[$ename]);
		session_destroy();
		return $error_msg;
	}
	else{
		return "";
	}
}

?>