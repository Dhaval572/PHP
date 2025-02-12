<?php

function increment(&$n)
{
	$n++;
}

$n = 50;

echo "Before increment() call<br> n = " . $n;
echo "<br>-----------------------------<br>";

increment($n);

echo "After increment() call<br> n = " . $n;

?>