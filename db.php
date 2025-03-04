<?php
$host = "localhost"; // Change if necessary
$user = "root"; // Your database username
$pass = ""; // Your database password
$dbname = "api"; // Change this

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
