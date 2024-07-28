<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database configuration
$host = 'localhost'; 
$db   = 'travel_db'; 
$user = 'root';      
$pass = '';         

// Create a connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>