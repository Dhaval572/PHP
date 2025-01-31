<?php
    $servername = "localhost"; 
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) 
	{
        die("Connection failed: " . mysqli_connect_error()); 
    }

    echo "MySQL successfully connected<br>";

    $sql = "CREATE DATABASE IF NOT EXISTS db";

    if (mysqli_query($conn, $sql)) 
	{
        echo "Database created successfully!";
    }
	else
	{
        die("Error creating database: " . mysqli_error($conn)); 
    }

    mysqli_close($conn);
?>
