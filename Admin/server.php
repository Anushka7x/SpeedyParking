<?php
session_start();
// Database configuration
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'admin';

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>