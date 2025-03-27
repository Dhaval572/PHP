<form method="post">
	<label>Name:</label>
	<input type="text" name="name1" autocomplete="off">
	<button type="submit" name="submit1">Click</button>
</form>

<form method="post">
	<label>Name:</label>
	<input type="text" name="name2" autocomplete="off">
	<button type="submit" name="submit2">Click</button>
</form>

<?php
if (isset($_POST['submit1']) && isset($_POST['name1'])) {
	echo "Name of form1 is: " . $_POST['name1'];
}

if (isset($_POST['submit2']) && isset($_POST['name2'])) {
	echo "Name of form2 is: " . $_POST['name2'];
}
?>