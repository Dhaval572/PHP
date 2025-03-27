<?php
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

$num_rows = mysqli_num_rows($result);
echo "Total users: " . $num_rows;

mysqli_close($conn); 
?>