<?php
	session_start();

	if(isset($_SESSION['username']))
	{
		echo htmlspecialchars($_SESSION["username"]) . "<br>";
		echo htmlspecialchars($_SESSION["email"]) . "<br>";
	}
?>