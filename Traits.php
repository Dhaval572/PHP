<?php
	trait Demo
	{
		function trait_func()
		{
			echo "I am demo function of trait";
		}
	}

	class DemoClass
	{
		use Demo;
	}

	$obj = new DemoClass();
	$obj->trait_func();
?>