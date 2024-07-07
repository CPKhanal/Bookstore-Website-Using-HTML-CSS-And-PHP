<!-- This connect2.php file is used to send data of contact us page to database -->

<?php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

$conn = new mysqli('localhost', 'root', '', 'bookstore');

if ($conn) {
    $sql = "INSERT INTO `contactus` (`name`, `email`, `message`,`date`) VALUES ('$name', '$email','$message', CURRENT_TIMESTAMP);";
    $result = mysqli_query($conn, $sql);
}
?>

<?php
include "contact-us.php";
?>