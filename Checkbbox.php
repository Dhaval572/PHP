<form method="post">
	<input type="checkbox" name="c"> C
	<input type="checkbox" name="cpp"> C++
	<input type="checkbox" name="php"> PHP
	<button type="submit">Submit</button>
</form>

<?php
echo "You selected: " . "<br>";
if (isset($_POST['c']))
	echo "C <br>";
if (isset($_POST['cpp']))
	echo "C++ <br>";
if (isset($_POST['php']))
	echo "PHP <br>";
?>