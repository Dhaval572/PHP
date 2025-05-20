<form action="" method="post">
	Search: 
	<input type="text" name="search">
	<button name="btn">Search</button>
</form>

<?php
	$conn = mysqli_connect("localhost", "root", "", "test_database");

	$sql = "SELECT * FROM test";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_num_rows($result);

	echo "Printing All everything from database: <br>";
	while($row > 0)
	{
		$data = mysqli_fetch_assoc($result);
		echo " Name: " . $data['Name'] . "<br>";
		$row--;
	}

	if(isset($_POST['search']) && isset($_POST['btn']))
	{
		$nameToSearch = $_POST['search'];
		$search = "SELECT Name FROM test WHERE name LIKE '%$nameToSearch%'";
		$searchResult = mysqli_query($conn, $search);
		$searchRow = mysqli_num_rows($searchResult);

		echo "<br>Search results:<br>";
		while($searchRow > 0) {
			$searchData = mysqli_fetch_assoc($searchResult);
			echo "Name: " . $searchData['Name'] . "<br>";
			$searchRow--;	
		}		
	}
?>