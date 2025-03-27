<form method="GET">
	<label>Name: </label>
	<input type="text" name="un">
	<button type="submit" >Submit</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	echo empty($_GET['un']) ? "Name is not set" : "Name: " . $_GET['un'];
}
?>