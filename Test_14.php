<form method="Post">
	<label>Select Country: </label>
	<select name="Country">
		<option disabled selected>Country</option>
		<option>India</option>
		<option>Pakistan</option>
		<option>China</option>
		<option>America</option>
	</select>
	<button name="Submit">Submit</button>
</form>

<?php

if (isset($_POST['Submit'])) 
{
	if (!isset($_POST['Country'])) 
		die("Please select country!");
	
	echo "You selected: " . htmlspecialchars($_POST['Country']);
}
?>