<?php
$host = "localhost"; // Server Name
$user = "root"; // Default XAMPP username
$pass = ""; // Default XAMPP password (empty)
$dbname = "hotel_booking"; // Database name

$conn = new mysqli($host, $user, $pass, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database connected successfully!";
}
?>