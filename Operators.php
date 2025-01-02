<?php

/*

Operators in php:

	1. Arithmetic operators 	( +, -, /, * etc. )
	2. Assignment operators 	( =, +=, -= etc. )
	3. Comparision operators	( ==, <=, >=, != etc. )
	4. Logical operators		( and, or, not etc. )

*/

// Arithmetic operator
$a = 50; 
$b = 25;

echo "$a + $b = " . ($a + $b) . "<br>";
echo "$a - $b = " . ($a - $b) . "<br>";
echo "$a / $b = " . ($a / $b) . "<br>";
echo "$a * $b = " . ($a * $b) . "<br>";
echo "$a % $b = " . ($a % $b) . "<br>";
echo "$a ** $b = " . ($a ** $b) . "<br>";

echo "<br>";

// Assignment operator
$x = $b;

echo "x is: ".$x."<br>";

$x -= 5;
echo "Now x is: ".$x."<br>";

// Comparision operators
$y = 100;
$z = 100;

echo "$y == $z is: ";
print(var_dump($a == $b));
echo "<br>";

// Logical operators

$True = true;
$False =  false;

echo "true and false is: ";
print(var_dump($True && $False));
echo "<br>";

// So, this was basic php operators  

?>
