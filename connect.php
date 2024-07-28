<!-- This connect.php file is used to send data of signup page to database -->

<?php
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Hash the password before storing it in the database
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Replace 'your_username' and 'your_password' with your actual MySQL username and password
$servername = 'localhost';
$username = 'qvsmymfe_bookstore';
$db_password = 'EnterYourDatabasePassword';
$dbname = 'qvsmymfe_bookstore';

// Create a connection
$conn = new mysqli($servername, $username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO `userdetails` (`email`, `password`, `created_at`) VALUES (?, ?, CURRENT_TIMESTAMP)");
$stmt->bind_param("ss", $email, $hashed_password);

// Execute the query
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>

<?php
include "sign-up.php";
?>
