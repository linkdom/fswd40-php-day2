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
	$sql = "CREATE TABLE employee(
		employee_ID INT NOT NULL PRIMARY KEY,
		employeeName VARCHAR(100)
	)";
	if (mysqli_query($conn, $sql)) {
	   echo "Table created successfully \n";
	} else {
	   echo "Error creating Table!";
	}
	mysqli_close($conn);
?>
  </body>
</html>
