<?php
if(isset($_POST['Clicked']))
{
	echo "Button clicked";
}
?>

<form method="POST">
	<button type="submit" name="Clicked">Click</button>
</form>