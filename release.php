<?php
include 'db.php';

// Check if the ID is passed via the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL query to delete the record based on the ID
    $sql = "DELETE FROM equipment WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the main page after deletion
        header("Location: index.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    // If no ID is provided, redirect back to index
    header("Location: index.php");
}
?>