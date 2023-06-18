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

// Delete the record from the "details" table
$sql = "DELETE FROM details WHERE id = (SELECT MAX(id) FROM details)";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

// Close the connection
$conn->close();
?>
