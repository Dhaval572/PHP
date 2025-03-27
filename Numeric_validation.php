<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$num = $_POST['no'];

	if (empty($num)) {
		echo "<script>alert('Field cannot be empty!');</script>";
	} elseif (!preg_match("/^[0-9]+$/", $num)) {
		echo "<script>alert('Only integers allowed!');</script>";
	} else {
		echo "Number is: " . htmlspecialchars($num);
	}
}
?>

<form action="#" method="POST">
	<label>Number: </label>
	<input type="text" name="no"> 
	<button type="submit">Submit</button>
</form>