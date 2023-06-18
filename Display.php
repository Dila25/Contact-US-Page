<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactdb";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the "details" table
$result = $conn->query("SELECT * FROM details WHERE id = (SELECT MAX(id) FROM details)");

// Check if any data is available
if ($result->num_rows > 0) {
    // Fetch the data row by row
    $row = $result->fetch_assoc();
    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];
    $subject = $row["subject"];
    $message = $row["message"];
} else {
    // No data available
    $name = "";
    $email = "";
    $subject = "";
    $message = "";
}

// Close the connection
$conn->close();
?>
