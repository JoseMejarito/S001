<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "database";

// Create a new MySQLi instance
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");

?>
