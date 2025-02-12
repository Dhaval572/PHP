<?php
class Person
{
	public function introduce()
	{
		echo "I am a person.\n";
	}
}

class Thief extends Person
{
	public function task()
	{
		echo "I am stealing something!\n";
	}
}

class PoliceOfficer extends Person
{
	public function task()
	{
		echo "I am chasing the thief!\n";
	}
}

$thief = new Thief();
$thief->introduce();
$thief->task();

echo "<br>";

$officer = new PoliceOfficer();
$officer->introduce();
$officer->task();

?>