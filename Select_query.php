<?php
$conn = mysqli_connect("localhost", "root", "", "mydatabase");

$sql = "SELECT name FROM users";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "Name: " . $row["name"] . "<br>";
}

mysqli_close($conn);
?>