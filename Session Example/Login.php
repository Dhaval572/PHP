<?php
	session_start();

	$_SESSION['username'] = "John";
	$_SESSION['email'] = "John@gmail.com";

	header("Location: Dashboard.php");
	exit(); 
?>