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
	$conn = mysqli_connect($servername, $username, $password);
	// Check connection
	if (!$conn) {
	   die("Connection failed: " . mysqli_connect_error());
	}
	// Create database
	$sql = "CREATE DATABASE $dbname";
	if (mysqli_query($conn, $sql)) {
	   echo "Database $dbname created successfully! \n";
	} else {
	   echo "Error creating database $dbname: " . mysqli_error($conn);
	}
	mysqli_close($conn);
?>
  </body>
</html>
