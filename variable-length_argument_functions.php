<?php
	// The func_get_arg() function in PHP is used to retrieve a specific argument passed to a function.
	
	// func_get_arg() 
	function exampleFunction(): void 
	{
		echo "First argument: " . func_get_arg(0) . "<br>";
		echo "Second argument: " . func_get_arg(1) ;
	}

	exampleFunction("Hello", "World"); 	

	echo "<br>"."<hr>";

	function invalid()
	{
		// echo "Second argument: " . func_get_arg(1) ; // Invalid because second argument is not available
	}

	// func_get_args() 
	function sum() 
	{
		$args = func_get_args();  // Get all passed arguments as an array
		return array_sum($args);  // Calculate the sum
	}

	echo "Sum of 10 and 20: " . sum(10, 20) . "<br>";
	echo "Sum of 10 and 20 and 30: " . sum(10, 20, 30) . "<br>" . "<hr>";

	// Splat Operator:

	function printArguments(...$args): void 
	{
		foreach ($args as $arg) 
		{
			echo $arg . "<br>";
		}
	}

	printArguments(2, 7, "Kitkat", 'c');

	echo "<hr>";

	// func_num_args()
	function countArguments() 
	{
		$numArgs = func_num_args();
		echo "Number of arguments: $numArgs\n";
	}
	
	countArguments("Kitkat", "perk", "Dairy milk");

	echo "<br><hr>";

	// call_user_func_array()
	function greet($name, $message)
	{
		echo "Hello $name, $message<br>";
	}

	call_user_func_array('greet', ['Manthan', 'Are you want to chocolate?😁']);	
?>