<?php
	class Grnadfather
	{
		function intro()
		{
			echo "I am father with Grand😁" . "<br>";
		}
	}

	class Father extends Grnadfather
	{
		function intro()
		{
			echo "I am Father without Grand😁😅" . "<br>";
		}
	}

	class Son extends Father
	{
		function intro()
		{
			echo "I can't become Father ... I mean ... 😐😐";
		}
	}

	$father_with_grand = new Grnadfather();
	$father_with_grand->intro();

	$father_without_grand = new Father();
	$father_without_grand->intro();

	$ekdam_nallaa = new Son();
	$ekdam_nallaa->intro();
?>