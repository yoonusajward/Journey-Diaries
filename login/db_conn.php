<?php
// Database connection details
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "api_db";

// Create a connection to the database
$conn = mysqli_connect($serverName, $username, $password, $dbName);

// Check if the connection was successful
if (!$conn) {
    echo "Connection failed!";
}
?>
