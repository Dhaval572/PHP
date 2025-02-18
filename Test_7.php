<?php

class Crazy
{
	public $name;
	
	function __construct($name)
	{
		$this->name = $name;
		echo "Hello, $name";
	}

	function __destruct()
	{
		echo "<br>Bhad me jao $this->name";
	}
}

$crazyMan = new Crazy("Bro");

?>