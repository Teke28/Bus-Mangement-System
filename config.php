<?php
$host = "localhost";
$user = "root";
$password = "Take@2810"; 
$database = "bus_ms_db";

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
