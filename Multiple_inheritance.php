<?php
	interface Animal 
	{
		public function speak();
	}

	interface Swimmer 
	{
		public function swim();
	}

	class Dolphin implements Swimmer, Animal 
	{
		public function speak() 
		{
			echo "Click-click<br>";
		}

		public function swim() 
		{
			echo "Swimming in the ocean";
		}
	}

	$dolphin = new Dolphin();
	$dolphin->speak();  // Output: Click-click
	$dolphin->swim();   // Output: Swimming in the ocean
?>