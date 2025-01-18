<?php
class Animal 
{
    public function speak() 
	{
        echo "Animal sound";
    }
}

class Dog extends Animal 
{
    public function speak() 
	{
        echo "Bark";
    }
}

$dog = new Dog();
$dog->speak();  // Output: Bark

/** In this example, the Dog class extends the Animal class. The Dog class inherits the speak method from the Animal class but can override it with its own version. */
?>