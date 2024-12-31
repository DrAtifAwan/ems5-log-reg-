<?php
// Database connection details for Newems project
$host = "127.0.0.1"; // Localhost
$user = "root"; // MySQL username
$password = ""; // MySQL password (leave blank for default setup)
$database = "newems_db"; // Name of the new database you will create

// Establish connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Success message (for debugging only)
// echo "Connected successfully";
?>
