<?php
$host = "mysql.railway.internal"; // Change if necessary
$user = "root"; // Your database username
$pass = "BpbukztFUbJrwCRIPjMAYBenrrbMIPhv"; // Your database password
$dbname = "railway"; // Change this

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
