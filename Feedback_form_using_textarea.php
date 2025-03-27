<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$feedback = $_POST['feedback'] ?? '';
	echo "<br><b>Your Feedback: " . htmlspecialchars($feedback);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Feedback Form</title>
</head>

<body>
	<form method="post">
		<label>Feedback:</label>
		<textarea name="feedback"></textarea>
		<button type="submit">Submit</button>
	</form>
</body>

</html>