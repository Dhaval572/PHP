<?php

echo  "Continue statement: ";
for($i = 0; $i < 10; $i++)
{
	// Continue
	if($i == 4)
	{
		continue;
	}

	echo "$i ";
}
echo "<br><br>";

echo  "Break statement: ";
for($j = 0; $j < 10; $j++)
{
	// Break
	if($j == 4)
	{
		break;
	}

	echo "$j ";
}
?>