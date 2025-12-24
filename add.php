<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $naziv = $_POST['naziv'];
    $zaduzio = $_POST['zaduzio'];

    // SQL query to insert new equipment into the table
    $sql = "INSERT INTO equipment (name, engineer) VALUES ('$naziv', '$zaduzio')";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the main page on success
        header("Location: index.php");
    } else {
        // Display error message if the query fails
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>