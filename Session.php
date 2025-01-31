<?php

session_start();

// Store data in the session
$_SESSION['username'] = 'JohnDoe';
$_SESSION['logged_in'] = true;

echo 'Hello, ' . $_SESSION['username']."<br>";  // Outputs: Hello, JohnDoe

// Check if the user is logged in
if ($_SESSION['logged_in']) {
    echo 'You are logged in!';
} else {
    echo 'Please log in!';
}

session_destroy();
?>