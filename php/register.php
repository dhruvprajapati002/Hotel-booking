<?php
include "../php/config.php"; // Ensure correct path to config file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password before storing it
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Prepare SQL statement to prevent SQL injection
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    if ($stmt->execute()) {
        echo "<script>
                alert('Successfully registered!');
                window.location.href='../login.html';
              </script>";
        exit();
    } else {
        echo "<script>
                alert('Error: " . $stmt->error . "');
                window.location.href='../register.html';
              </script>";
    }

    $stmt->close();
    $conn->close();
}
?>
