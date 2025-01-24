<?php

/* Title: calculate the length of a string and count the
number of words in the given string without using string
functions */

function calculateLength($str): int 
{
    $length = 0;
    
	// Counts the characters
    while (isset($str[$length])) 
		$length++;

    return $length;
}

// Counts the number of words
function countWords($str): int 
{
    $wordCount = 0;
    $inWord = false;
    
    for ($i = 0; isset($str[$i]); $i++) 
	{
        // Check if the current character is a space or not
        if ($str[$i] != ' ' && !$inWord) 
		{
            $wordCount++;
            $inWord = true;  
        } 
		else if($str[$i] == ' ') 
		{
            $inWord = false; 
        }
    }
    
    return $wordCount;
}

$str = "This is an example string";

$length = calculateLength($str);

$words = countWords($str);

echo "Length of the string: " . $length . "\n";
echo "Number of words: " . $words . "\n";

?>