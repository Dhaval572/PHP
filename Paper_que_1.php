<?php
/* Write a PHP script to find the largest number from three numbers and find
 the longest string from three strings using function overloading */
function findLargest($a, $b, $c) 
{
    // Check if all arguments are numbers
    if (is_numeric($a) && is_numeric($b) && is_numeric($c)) 
    {
        $max = $a;
        if ($b > $max) $max = $b;
        if ($c > $max) $max = $c;
        return $max;
    }
    // Otherwise treat as strings
    else 
    {
        $longest = $a;
        if (strlen($b) > strlen($longest)) $longest = $b;
        if (strlen($c) > strlen($longest)) $longest = $c;
        return $longest;
    }
}

echo "Largest number: " . findLargest(10, 50, 30) . "<br>";
echo "Longest string: " . findLargest("cat", "elephant", "dog") . "<br>"

?>