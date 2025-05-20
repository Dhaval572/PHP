<form action="#" method="post">
	<label >Enter the Name:</label>
	<input type="text" name="insname">
	<button name="insert">Submit</button>
</form>

<form method="post">
	<label >Enter record to delete: </label>
	<input type="text" name="dltname">
	<button name="delete">Delete</button>
</form>

<?php
	$conn = mysqli_connect("localhost", "root", "", "test_database");
	
	if(isset($_POST['insert']) && !empty($_POST['insname']))
	{
		$insname = $_POST['insname'];
		$sql = "INSERT INTO test (name) VALUES ('$insname')";
		mysqli_query($conn, $sql);
	}

	if(isset($_POST['delete']) && !empty($_POST['dltname']))
	{
		$dltname = $_POST['dltname'];
		$delete = "DELETE FROM test WHERE name='$dltname' ";
		mysqli_query($conn, $delete);
	}
?>