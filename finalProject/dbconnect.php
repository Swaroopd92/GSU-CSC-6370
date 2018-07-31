<?php

$servername = "localhost";
$username = "sdevaraju1";
$password = "sdevaraju1";
$dbname = "sdevaraju1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>