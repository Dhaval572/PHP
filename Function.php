<?php

	// Without specified return type
	function greet($name)
	{
		print("hello " . $name);
	}

	// With specified return type 
	function add(int $a, int $b): int 
	{
		return $a + $b;
	}

	greet("😎"); 

	print("<br>Addition: ");
	
	echo add(27, 15);

?>
