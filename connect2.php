<!-- This connect2.php file is used to send data of contact us page to database -->

<?php
// Get data from POST request
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// Database connection parameters
$servername = "localhost";
$username = "qvsmymfe_bookstore"; // Your actual database username
$password = "Your actual database password"; // Your actual database password
$dbname = "qvsmymfe_bookstore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contactus (name, email, message, date) VALUES (?, ?, ?, CURRENT_TIMESTAMP)");
$stmt->bind_param("sss", $name, $email, $message);

// Execute the statement
if ($stmt->execute()) {
    
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>

<?php
include "contact-us.php";
?>
