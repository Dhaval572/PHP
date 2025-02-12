<?php

function power($base, $exponent)
{
	$result = 1;
	$absExponent = abs($exponent); 

	for($i = 0; $i < $absExponent; $i++)
		$result *= $base;

	return ($exponent < 0) ? 1 / $result : $result;
}

$var = "power";
echo $var(2, 3);

?>