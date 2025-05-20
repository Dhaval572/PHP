<?php

$conn = mysqli_connect("localhost", "root", "", "testdb");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

$num_rows = mysqli_num_rows($result);

echo "Total Records: " . $num_rows . "<br>";

if ($num_rows > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "Name: " . $row["name"] . "<br>";
	}
} else {
	echo "No records found.";
}

mysqli_close($conn);
?>