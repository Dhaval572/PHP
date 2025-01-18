<?php

/*
	Heredoc syntax allows you to create multi-line strings without worrying about escaping quotes or newlines. It’s often used for large blocks of text like HTML or SQL queries.
*/ 

$name = "John";
$age = 25;

echo <<<TEXT
Hello, my name is $name and I am $age years old.
This is a multi-line string example.
It preserves line breaks.
TEXT;
?>
