<?php
// Database connection details
$servername = "localhost"; // Server name (usually 'localhost' for local development)
$username = "root";        // MySQL username (default is 'root' for local development)
$password = "";            // MySQL password (default is empty for local development)
$database = "DB";          // Name of the database

// Attempt to connect to the MySQL server
$conn = mysqli_connect($servername, $username, $password, $database);

// Check if the connection was successful
if (!$conn)
	die("Connection failed: " . mysqli_connect_error());


// SQL query to create a table
$sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL
)";

// Debug: Print the SQL query
echo "SQL Query: " . $sql . "<br>";

// Check if the table already exists
$checkTable = "SHOW TABLES LIKE 'users'";
$result = mysqli_query($conn, $checkTable);

if (mysqli_num_rows($result) == 0) {
	// Table does not exist, create it
	if (mysqli_query($conn, $sql)) {
		echo "Table 'users' created successfully<br>";
	} else {
		echo "Error creating table: " . mysqli_error($conn) . "<br>";
	}
} else {
	echo "Table 'users' already exists<br>";
}

// Close the database connection
mysqli_close($conn);
?>