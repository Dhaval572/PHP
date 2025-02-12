<?php 

// You can use multiple return types in php
function func() : float | int | string
{
	$a = "<h1 style='text-align: center;'>Good Afternoon"; // string
	return $a;
}

echo func();
?>