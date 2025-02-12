<?php
class A
{
    function __construct()
    {
        echo "Welcome to the class A<br>";
    }
}

class B extends A
{
    function __construct()
    {
        parent::__construct(); 
        echo "Welcome to the class B<br>";
    }
}

class C extends B
{
    function __construct()
    {
        parent::__construct(); 
        echo "Welcome to the class C<br>";
    }
}

$obj = new C();  

?>