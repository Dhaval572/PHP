<?php
class Person 
{
	// Data
    public $name;
    public $age;

    // Default constructor
    function __construct(){}
	// Method
    function greet() 
	{
        echo "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}

$person1 = new Person(); // Creating object of person1

// Setting the values of data
$person1->name = "John"; 
$person1->age = 25;

echo "Name: " . $person1->name . "<br>";
echo "Age: " . $person1->age . "<br>";

$person1->greet(); 
?>
