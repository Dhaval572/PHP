<?php
    $servername = "localhost"; 
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error()); 
    }

    echo "MySQL successfully connected<br>";

    $sql = "DROP DATABASE IF EXISTS db";

    if (mysqli_query($conn, $sql)) {
        echo "Database deleted successfully!";
    } else {
        die("Error deleting database: " . mysqli_error($conn)); 
    }

    mysqli_close($conn);
?>
