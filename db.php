<?php
// Database configuration - Use environment variables for production security
$host = "localhost";
$user = "db_user_access"; // Changed for security demonstration
$pass = "STRICTLY_CONFIDENTIAL"; // Use .env files to hide real passwords

$db = "inzinjerska_evidencija"; 

// Create database connection
$conn = new mysqli($host, $user, $pass, $db);

// Set charset to support international characters (UTF-8)
$conn->set_charset("utf8");

// Check connection status
if ($conn->connect_error) {
    // In production, never show detailed errors like $conn->connect_error to users
    die("Database connection failed. Please contact the administrator.");
}
?>
