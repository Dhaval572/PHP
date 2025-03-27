<form method="post">
	<label>Name: </label>
	<input type="text" name="un">
	<button type="submit" >Submit</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	echo empty($_POST['un']) ? "Name is not set" : "Name: " . $_POST['un'];
}
?>