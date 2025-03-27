<form method="post">
	Select your known languages:
	<select name="languages">
		<option value="Hindi">Hindi</option>
		<option value="Gujarati">Gujarati</option>
		<option value="English">English</option>
		<option value="Sanskrit">Sanskrit</option>
	</select>
	<button type="submit">Submit</button>
</form>

<?php

if (isset($_POST['languages'])) {
	$lang = $_POST['languages'];
	echo "Selected Language: " . $lang;
} else {
	echo "<b>Do you know any language?</b>";
}

?>