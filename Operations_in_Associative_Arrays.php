<?php
	
// Method 1: Using array() function
$person = array("name" => "John", "age" => 25, "city" => "New York");

// Method 2: Using shorthand notation (PHP 5.4+)
$person = ["name" => "John", "age" => 25, "city" => "New York"];

// Insertion in Associative array
$elementsToAdd = ["email" => "john@example.com", "phone" => "123456789"];
$person = array_merge($person, $elementsToAdd);

// Remove the element from Associative array
unset($person["phone"]); // Removes specific key value pairs

// Traversal of Associative array
foreach ($person as $key => $value) 
{
    echo $key . ": " . $value . "<br>";
}

?>