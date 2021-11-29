<?php 

// database configuration
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "staff";


// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


// Check connection
if ($db->connect_error) {
	die("connection failed:" . $db->connect_error);
}

?>