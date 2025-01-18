<?php
class Person 
{
    public $name;
    public $age;

    function __construct($name, $age) 
	{
        $this->name = $name;
        $this->age = $age;
        echo "Constructor called. Object created for " . $this->name . "<br>";
    }

    function __destruct() 
	{
        echo "Object destroyed for " . $this->name . "<br>";
    }
}

$person1 = new Person("John", 25);
?>
