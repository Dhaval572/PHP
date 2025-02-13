<?php
function binarySearch($arr, $target): float|int
{
	$low = 0;
	$high = count($arr) - 1;

	while ($low <= $high) {
		$mid = floor(($low + $high) / 2); 

		if ($arr[$mid] == $target) 
		{
			return $mid;  
		}
		elseif($arr[$mid] < $target) 
		{
			$low = $mid + 1;  
		} 
		else 
		{
			$high = $mid - 1;  
		}
	}

	return -1;
}

$arr = [1, 3, 5, 7, 9, 11, 13, 15];
$target = 7;
$result = binarySearch($arr, $target);

if ($result != -1) 
{
	echo "Element found at index: " . $result;
} 
else 
{
	echo "Element not found!";
}

?>