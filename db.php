<?php
$host = "localhost";
$user = "root"; 
$pass = "";     

$db   = "inzinjerska_evidencija"; 

// Create database connection
$conn = new mysqli($host, $user, $pass, $db);

// Set charset to support international characters (UTF-8)
$conn->set_charset("utf8");

// Check connection status
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>