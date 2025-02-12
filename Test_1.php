<?php

class Test
{
	public $name;

	function __construct($name)
	{
		$this->name = $name;
	}

	function greet()
	{
		echo "Hello, $this->name";
	}
};

$obj = new Test("John");
$obj->greet();

?>