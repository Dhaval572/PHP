<?php
class Example
{
	public $a, $b;
}

$o1 = new Example();

$o1->a = 10;
$o1->b = 15;

$o2 = clone $o1;

print_r($o2);
?>