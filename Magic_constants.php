<?php
namespace MyNamespace;

// Global scope magic constants
echo "__LINE__: " . __LINE__ . "<br>";       // Current line number
echo "__FILE__: " . __FILE__ . "<br>";       // Full path and filename
echo "__DIR__: " . __DIR__ . "<br>";         // Directory of the file
echo "<hr>";

// Function to demonstrate __FUNCTION__
function myFunction()
{
	echo "__FUNCTION__: " . __FUNCTION__ . "<br>";
}
myFunction();
echo "<hr>";

// Trait to demonstrate __TRAIT__
trait MyTrait
{
	public function showTraitName()
	{
		echo "__TRAIT__: " . __TRAIT__ . "<br>";
	}
}

// Class to demonstrate __CLASS__, __METHOD__, ClassName::class
class MyClass
{
	use MyTrait;

	public function showClassName()
	{
		echo "__CLASS__: " . __CLASS__ . "<br>";
	}

	public function showMethodName()
	{
		echo "__METHOD__: " . __METHOD__ . "<br>";
	}
}

$object = new MyClass();
$object->showTraitName();
$object->showClassName();
$object->showMethodName();

echo "MyClass::class: " . MyClass::class . "<br>";
echo "<hr>";

// Namespace magic constant
echo "__NAMESPACE__: " . __NAMESPACE__ . "<br>";

// Another class in the same namespace
class Test
{
	public function whoAmI()
	{
		echo "__CLASS__ in namespace: " . __CLASS__ . "<br>";
		echo "__METHOD__ in namespace: " . __METHOD__ . "<br>";
		echo "Test::class: " . Test::class . "<br>";
	}
}

$t = new Test();
$t->whoAmI();
echo "<hr>";

// Count of user-defined functions
$definedFunctions = get_defined_functions();
$userFunctions = $definedFunctions['user'];
echo "Number of user-defined functions: " . count($userFunctions) . "<br>";
?>