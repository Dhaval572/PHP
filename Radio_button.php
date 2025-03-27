<form method="POST">
	<input type="radio" name="gender" value="male"> Male<br>
	<input type="radio" name="gender" value="female"> Female<br>
	<button type="submit">Submit</button>
</form>

<?php

if (isset($_POST['gender'])) {
	$selectedGender = $_POST['gender'];
	echo "Selected Gender: " . htmlspecialchars($selectedGender);
} else {
	echo "Please select a gender.";
}

?>