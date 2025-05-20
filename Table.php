<form method="POST">
	<label>Number: </label>
	<input type="number" name="num" required>
	<button>Make table</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$n = intval($_POST['num']); // safely cast input to integer

	if ($n > 0) 
	{
		for ($i = 1; $i <= 10; $i++) 
			echo "$n x $i = " . ($n * $i) . "<br>";
	} 	
	else
		echo "<p>Please enter a positive number.</p>";
}
?>