<?php
$host = "localhost";
$user = "root";
$password = "dhruv";  // Change if you set a MySQL password
$database = "hotel_booking";

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
