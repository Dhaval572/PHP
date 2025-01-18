<?php
	$fruits[] = "Orange";  

	// Insert elements in Indexed array
	array_push($fruits, "Grapes");
	array_push($fruits, "Banana");
	array_push($fruits, "Apple");

	// Traverse using for loop
	for($i = 0; $i < count($fruits); $i++)
	{
		echo $fruits[$i] . "<br>";
	}

	// Remove elements in Indexed array
	array_pop($fruits); // Removes last element

	// Searching the element in array
	$key = array_search("Banana", $fruits);

	echo "<br>Banana found at index: " . $key;
?>