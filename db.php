<?php
$host = "localhost";  // or your database host
$username = "root";  // MySQL username
$password = "";      // MySQL password
$dbname = "career_pathway";  // Name of your database

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
