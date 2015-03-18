<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "widget_cms";
	$dbpass = "secretpassword";
	$dbname = "widget_corp";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Test if the connection occured.
	if(mysqli_connect_errno()){
		die("Database connection failed: " .
			mysqli_connect_error() . 
			" (" . mysqli_connect_errno() . ")"
			);
	}
?>

<?php
	// 2. Perform database query

	$query = "SELECT * ";
	$query .= "FROM subjects ";
	$query .= "WHERE visible = 1 ";
	$query .= "ORDER BY position ASC";
	$result = mysqli_query($connection, $query);
	// Test if there was a query error
	if (!$result){
		die("Database query failed.");
	}
/*
	
// 2. Perform database query
$query = "SELECT * FROM subjects";
$result = mysqli_query($connection, $query);
// Test if there was a query error
if (!$result){
die("Database query failed.");
}
*/

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<title></title>

</head>

<body>
	 <?php
	// 3. Use returned data (if any)
	while($row = mysqli_fetch_row($result)){
		// output data from each row
		var_dump($row);
		echo "<hr />";
	}
	?>

	<?php
	// 4. Release returned data
	mysqli_free_result($result);
	?>
</body>

</html>


<?php
	// 5. Close database connection
	mysqli_close($connection);
	
?>
