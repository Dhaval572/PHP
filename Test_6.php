<?php

class Animal
{
	public function sound()
	{
		echo "Animal makes a sound.\n";
	}
}

class Dog extends Animal
{
	public function bark()
	{
		echo "Dog barks.\n";
	}
}

class Cat extends Animal
{
	public function meow()
	{
		echo "Cat meows.\n";
	}
}

$dog = new Dog();
$dog->sound();
$dog->bark();

echo "\n";

$cat = new Cat();
$cat->sound();
$cat->meow();

?>