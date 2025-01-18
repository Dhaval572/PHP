<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Square root</title>

</head>
<body>

	<form action="#" method="POST">
        <label>Enter the number</label>
        <input type="number" name="number" required><br><br>
        <button type="submit">Submit</button>
    </form>

	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$num = $_POST['number'];

			if($num < 0)
			{
				echo "<p>Number is nagative so can't calculate square root.</p>";
			}
			else
			{
				$sqrt = sqrt($num);

				echo "<p>The square root of " .$num. " is: " .$sqrt;
			}
		}
	?>
</body>
</html>