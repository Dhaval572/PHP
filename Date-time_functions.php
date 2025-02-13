<?php

// Date / Time function in php
print_r(getdate()) ; echo "<br>"; // Returns an array with the current date and time details.

$date1 = date_create("2025-02-13");
$date2 = date_create("2024-02-13");
$diff = date_diff($date1, $date2);
echo $diff->format("%y years, %m months, %d days") . "<br>";

// checkdate() - Checks if a given date is valid.
echo checkdate(2, 29, 2024) ? "Valid" : "Invalid";
echo "<br>";

// Returns the current Unix timestamp	
echo time() . "<br>";

// Returns the Unix timestamp for a given date and time.
echo mktime(14, 30, 0, 2, 13, 2025) . "<br>";

?>