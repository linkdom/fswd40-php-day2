<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercise 4</title>
  </head>
  <body>

<?php
	$servername = "localhost";
	$username = "root";
	$password = ""; 
	$dbname = "phpday2";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	   die("Connection failed: " . mysqli_connect_error());
	}
	// Create database
	$sql = "Insert into employee(employee_ID, employeeName) VALUES
	(1, 'Kathrin Renz')";
	if (mysqli_query($conn, $sql)) {
	   echo "Data inserted successfully \n";
	} else {
	   echo "Error Inserting Data";
	}
	mysqli_close($conn);
?>
  </body>
</html>
