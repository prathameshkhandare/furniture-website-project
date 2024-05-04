<?php
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL query to check if user is an admin
    $admin_sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $admin_result = $conn->query($admin_sql);

    if ($admin_result->num_rows > 0) {
        // Admin authenticated successfully
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'admin';
        header("Location: admin_dashboard.php"); // Redirect to admin dashboard
        exit();
    }

    // SQL query to check if user is a regular user
    $user_sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $user_result = $conn->query($user_sql);

    if ($user_result->num_rows > 0) {
        // Regular user authenticated successfully
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'user';
        header("Location: user_dashboard.php"); // Redirect to user dashboard
        exit();
    }

    // Invalid credentials
    echo "Invalid username or password";
}
?>