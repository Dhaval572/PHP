<form method="post">
	<label >Enter the feedback</label>
	<input type="textarea" name="feedback">
	<button>Submit</button>
</form>
<?php
	if($_POST['feedback'] == null)
	{
		echo "Plese give me a feedback";
	}
	else
		echo "<h3>Thanks for feedback!";
?>