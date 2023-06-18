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

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Update query
    $sql = "UPDATE details SET name='$name', email='$email', subject='$subject', message='$message' WHERE id='$id'"; // Update the table name and the WHERE condition based on your specific requirements

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
