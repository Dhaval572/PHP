<?php
$conn = mysqli_connect("localhost", "root", "", "mydatabase");

$sql = "DELETE FROM users WHERE id=1";
if (mysqli_query($conn, $sql)) {
	echo "Record deleted successfully";
} else {
	echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>