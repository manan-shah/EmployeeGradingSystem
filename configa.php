<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "logindb";
// Create connection
$conn = new mysqli($servername,$username,'',$dbname );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	
?>