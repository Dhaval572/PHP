<?php
$conn = mysqli_connect("localhost", "root", "", "mydatabase");

$sql = "UPDATE users SET email='newemail@example.com' WHERE id=1";
if (mysqli_query($conn, $sql)) {
	echo "Record updated successfully";
} else {
	echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>