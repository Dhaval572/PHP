<?php

$arr = ["Hello", "bro!"];

echo ord('a') . "<br>"; // Returns the ascii values
echo chr('97') . "<br>"; // Returns the character
echo strlen("Hello bro!") . "<br>"; // Return string length
echo trim(" **    Hello     **") . "<br>"; // Removes whitespace (or specified characters) from both sides of a string.
echo ltrim("**     Hello") . "<br>"; // Removes whitespace (or specified characters) from the left side only
echo rtrim("Hello      **") . "<br>"; // Removes whitespace (or specified characters) from the right side only.
echo join(" ", $arr) . "<br>"; // Joins array elements into a string using a separator.
echo substr("Hello World", 0, 5) . "<br>"; // Extracts a portion of a string.
echo str_replace("World", "bro!", "Hello world") . "<br>"; // Replaces all occurrences of a substring in a string.
print_r(str_split("Hello")); // Splits a string into an array of characters
echo "<br>";
echo str_word_count("Hello bro, How are you") . "<br>"; // Counts words in a string
echo strcmp("Hello", "hello") . "<br>"; // Compares two strings character by character. ( Case sensitive comparision )
echo strcasecmp("Hey", "hEY") . "<br>"; // // Compares two strings character by character. ( Not Case sensitive ) 
echo strrev("lavahD") . "<br>"; // Reverese the given string
echo strtolower("STRING CONVERTED INTO LOWER") . "<br>"; // Converts string to lower case
echo strtoupper("string converted into upper") . "<br>"; // Converts string to upper case 
echo str_shuffle("Hello"); // The str_shuffle() function randomly shuffles the characters in a string

?>
