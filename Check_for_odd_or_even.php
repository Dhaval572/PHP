<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Odd or Even</title>
</head>
<body>
	<form action="#" method="post">
		<label>Enter the number: </label>
		<input type="number" name="num" require><br><br>
		<button type="submit">Submit</button>
	</form>

<?php
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$num = $_POST['num'];

		if($num % 2 == 0)
		{
			echo "<p>Given number is even</p><br>";
		}
		else
		{
			echo "<p>Given number is odd</p>";
		}
	}
?>

</body>
</html>