<?php

$un = $_POST['un'];

if (!preg_match("/^[a-zA-Z ]*$/", $un)) {
	echo "<script> alert('Only alphabets and whitespace are allowed.')</script>";
} else {
	echo "Entered Name: " . htmlspecialchars($un);
}

?>

<form action="#" method="post">
	<label>Name:</label>
	<input type="text" name="un">
	<button type="submit">Click</button>
</form>