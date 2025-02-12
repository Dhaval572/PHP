<?php 

class Base
{
	function func()
	{
		echo "I am the function of Base class";
	}
};

class Derived extends Base
{
	// Calling the base class function
	function callBaseFunc()
	{
		parent::func();
	}
}

$obj = new Derived();

$obj->callBaseFunc();

?>