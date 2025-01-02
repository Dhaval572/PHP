<?php

/*

If else statements in php:

	# syntax: 

		if(condition1)
		{
			// Statements
		}
		else if(condition2)
		{
			// Statements
		}
		else
		{
			// Statements
		}

*/

// Example 

	$marrige = true;

	if($marrige == false)
	{
		print("Me jukega nahi sala");
	}
	else
	{
		print("🤐🤐🤐");
	}

	echo "<br><br>";

	$age = 80;

	if($age > 18 && $age < 70)	
	{
		print("Focus on career");
	}
	else if($age < 13)
	{
		print("Oh you must enjoy your life");
	}
	else if($age > 70)
	{
		print("Go to hell!");
	}
	else 
	{
		print("😶");
	}

	// So, this was basic conditional statments
?>
