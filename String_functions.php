<?php

/*

String function in php:

	1. strlen 								: Returns string length
	2. strrev								: Reverse the given string
	3. str_word_count 						: Counts the words 
	4. strpos 								: Returns the positions of given string
	5. str_replace							: Replaces the word
	6. str_repeat()							: Repeats the string for count times

*/
	
	// Example:
	
	$sentence = "Pushpa is the wild fire!";
	$name = "Pushpa";
	
	// ( Note: To join two string you can use (.) operator. )

	// 1. strlen() 
	print("1. strlen():<br>");
	print("Length of name $name is: ". strlen($name)); 
	echo "<br>";
	echo "<br>";

	// 2. strrev() 
	print("2. strrev():<br>");
	print("String reversed!  now $name is ".strrev($name));
	echo "<br>";
	echo "<br>";

	// 3. str_word_count()
	print("3. str_word_count:<br>");
	print("There are " . str_word_count($sentence) . " words in the \"$sentence\"");
	echo "<br>";
	echo "<br>";

	// 4. strpos()
	print("4. strpos():<br>");
	print("\"wild\" is starts from index no. ". strpos($sentence, "wild"). " in the sentence: ". $sentence);
	echo "<br>";
	echo "<br>";

	// Index: 		0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19  20 21 22 23
	// sentence: 	P u s h p a   i s   t  h  e     w  i  l  d      f  i  r  e  !
	// so you can see that wild starts from indez 14

	// 5 str_replace()
	print("5. str_replace():<br>");
	print("Before replace:<br>");
	echo $sentence."<br>";

	print("After replace:<br>");
	echo str_replace("wild","tame", $sentence);
	echo "<br>";
	echo "<br>";

	// 6 str_repeat()
	print("6. str_repeat():<br>");
	echo str_repeat("Hello ", 5);
	echo "<br>";
	echo "<br>";

	// So, this was basic string functions in php

	// I hope you are enjoying coding!
?>	
