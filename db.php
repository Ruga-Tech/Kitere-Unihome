<?php
$servername = "localhost";
$username = "root";  //  MySQL username
$password = "";  // Password
$dbname = "kitere_unihome";   // The name of database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>