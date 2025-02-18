<?php

// Multidimensional associative array
$company = [
    "employee1" => [
        "name" => "Alice",
        "position" => "Manager",
        "salary" => 5000
    ],
    "employee2" => [
        "name" => "Bob",
        "position" => "Developer",
        "salary" => 4000
    ],
    "employee3" => [
        "name" => "Charlie",
        "position" => "Designer",
        "salary" => 3500
    ]
];

// Printing specific element of array
echo $company["employee1"]["name"] . "<br>";      
echo $company["employee2"]["position"] . "<br>";  
echo $company["employee3"]["salary"] . "<br>";    

echo "<br><hr><br>";

// Traversing whole array
foreach($company as $employee => $details)
{
	echo "<b>$employee:<br>";
	foreach ($details as $key => $value)
	{
		echo "<b>$key: $value<br>";
	}

	echo "<br>";
}

?>