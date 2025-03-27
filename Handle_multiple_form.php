<?php
if (isset($_POST["login_submit"]))
	echo empty($_POST["login_email"]) || empty($_POST["login_password"]) ? "Login: All fields required!" : "Login Successful!";

if (isset($_POST["reg_submit"]))
	echo empty($_POST["reg_name"]) || empty($_POST["reg_email"]) || empty($_POST["reg_password"]) ? "Register: All fields required!" : "Registration Successful!";
?>

<form method="POST">
	<h2>Login</h2>
	Email: <input type="text" name="login_email" autocomplete="off"><br>
	Password: <input type="password" name="login_password"><br>
	<input type="submit" name="login_submit" value="Login">
</form>

<form method="POST">
	<h2>Register</h2>
	Name: <input type="text" name="reg_name" autocomplete="off"><br>
	Email: <input type="text" name="reg_email" autocomplete="off"><br>
	Password: <input type="password" name="reg_password"><br>
	<input type="submit" name="reg_submit" value="Register">
</form>