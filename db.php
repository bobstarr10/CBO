<?php
$host = 'localhost';
$user = 'root'; // Change if using a different user
$pass = ''; // Set your MySQL password
$db_name = 'cbo_website';

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character encoding to avoid issues
$conn->set_charset("utf8mb4");
?>
