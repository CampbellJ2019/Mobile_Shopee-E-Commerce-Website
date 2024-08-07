<?php
$servername = "localhost"; // The hostname of your MySQL server
$username = "root";        // The MySQL username
$password = "";            // The MySQL password
$dbname = "shopee";        // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
