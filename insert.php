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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the required form fields are set
    if (isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
        // Get the form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Prepare and bind the SQL statement
        $stmt = $conn->prepare("INSERT INTO blooddetails (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $subject, $message);

        // Execute the statement
        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            header("Location: ConUs_Display.php"); // Redirect to the desplay page
            exit();
        } else {
            $successMessage = "Error inserting data: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        $successMessage = "Please fill out all the required fields.";
    }
}

// Close the connection
$conn->close();
?>
