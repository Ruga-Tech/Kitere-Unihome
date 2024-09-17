<?php
// Define database connection parameters
$servername = "localhost";  // Usually 'localhost' if the database is on the same server
$username = "root";  // Replace with your MySQL username
$password = "";  // Replace with your MySQL password
$dbname = "kitere_unihome";  // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
