<?php

/*
	Multidimensional arrays are arrays that contain one or more arrays as their elements.
*/

// Multidimensional Array
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

echo $matrix[0][0] . "<br>";  // Output: 1
echo $matrix[1][1] . "<br>";  // Output: 5
echo $matrix[2][2] . "<br>";  // Output: 9
?>
