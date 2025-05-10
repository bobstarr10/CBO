<?php
$servername = 'localhost';
$username = 'root'; // Change if using a different user
$password = ''; // Set your MySQL password
$db_name = 'cbo_website';

$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character encoding to avoid issues
$host="127.0.0.1";
?>
