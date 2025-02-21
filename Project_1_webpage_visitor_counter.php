<?php

// Title Webpage visitor count

$filename = "counter.txt";

// Check if file exists, else create it
if (!file_exists($filename)) {
    file_put_contents($filename, 0);
}

// Read, increment, and update counter
$visits = file_get_contents($filename);
$visits++;
file_put_contents($filename, $visits);

echo "This page has been visited $visits times.";