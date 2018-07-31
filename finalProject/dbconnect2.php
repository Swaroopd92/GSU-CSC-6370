<?php

$servername = "localhost";
$username = "sdevaraju1";
$password = "sdevaraju1";
$dbname = "sdevaraju1";


// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
} 
?>