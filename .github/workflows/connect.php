<?php
// Database configuration
$servername = "vishal.mysql.database.azure.com"; // e.g., "localhost"
$username = "vishal";
$password = "Vigo@4242";
$dbname = "info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the connection is successful, you can perform database operations here

// Close the connection when done
$conn->close();
?>
