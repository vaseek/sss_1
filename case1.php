<?php
	session_start();
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		if(!isset($_POST['token']) || ($_POST['token'] !== $_SESSION['CSRF_token'])){
			die('invalid CSRF token');
		}
	}
	
	  $_SESSION['CSRF_token'] =  bin2hex(openssl_random_pseudo_bytes(16));
	
	
	if(isset($_REQUEST["user"])){
		
	$user=$_REQUEST["user"];
	$_SESSION['session']= $user;
	$cookie_name = "session";
	$cookie_value = $_SESSION['session'];
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
	
	}
?>	