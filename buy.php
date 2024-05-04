<?php
// Start session to access session variables
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect user to login page
    header('Location: login.html');
    exit();
}

// Connect to the database
$servername = "localhost";
$username = "username"; // Your MySQL username
$password = "password"; // Your MySQL password
$dbname = "database"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle buying logic here
// Example: Retrieve items from cart and save them to the database

// Redirect user to cart page or a thank you page
header('Location: cart.html');
exit();
?>
