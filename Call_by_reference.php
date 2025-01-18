<?php

function swap(&$a, &$b)
{
	$temp = $a;
	$a = $b;
	$b = $temp;
}

$a = 5;
$b = 10;

echo "Before swapping:<br>";
echo "a = $a, b = $b<br>";

// Call the swap function (by reference)
swap($a, $b);

echo "After swapping:<br>";
echo "a = $a, b = $b<br>";

?>