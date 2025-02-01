<?php
	$severname = "localhost";
	$username = "root";
	$password = "";
	
	$conn = mysqli_connect($severname, $username, $password);

	if(!$conn) 
		die("Failed to connect"); 
	else 
		echo "Successfully connected";
?>