<?php
session_start();
include('../php/config.php'); // Ensure correct path to database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL statement to prevent SQL injection
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        // Verify password using password_verify()
        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = $row['username']; // Store username in session
            
            // Redirect to index.php with a success message
            echo "<script>
                    alert('Login Successful!');
                    window.location.href='../index.php';
                  </script>";
            exit();
        }
    }

    // If login fails
    echo "<script>
            alert('Invalid email or password! Try again.');
            window.location.href='../login.html';
          </script>";
    exit();
}
?>
