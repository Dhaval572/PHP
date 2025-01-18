<?php

/*
	Nowdoc syntax is similar to Heredoc, but it does not parse variables. It is essentially treated as a literal string, so the variables are not replaced by their values.
*/

$name = "John";
$age = 25;

echo <<<'TEXT'
Hello, my name is $name and I am $age years old.
This is a multi-line string example.
The variables $name and $age will not be parsed here.
TEXT;
?>
