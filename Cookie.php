<?php
// Delete the Cookie When User Clicks "Delete Cookie"
if (isset($_POST['delete_cookie'])) {
	setcookie("username", "", time() - 3600, "/"); // Set past time to delete
	$cookieMessage = "Cookie has been deleted!";
} else {
	// Create a cookie
	setcookie("username", "John", time() + 3600, "/"); // Expires in 1 hour
	$cookieMessage = "Cookie has been set!";
}
 
?>
<!DOCTYPE html>
<html>

<body>

	<?php
	echo $cookieMessage . "<br>";

	// Access (Read) the Cookie
	if (isset($_COOKIE['username'])) {
		echo "Welcome, " . $_COOKIE['username'] . "<br>";
	} else {
		echo "Cookie not set!<br>";
	}
	?>

	<form method="post">
		<button type="submit" name="delete_cookie">Delete Cookie</button>
	</form>

</body>

</html>