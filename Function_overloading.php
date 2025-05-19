<?php
	// Instead of overloading, PHP relies on Default paramerters
	function greet($name = "Guest")
	{
		echo "Hello, $name!" . "<br>";
	}

	greet();
	greet("Mr. Majnu");
?>	