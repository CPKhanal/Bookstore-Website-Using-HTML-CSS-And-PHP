<!-- This connect.php file is used to send data of signup page to database -->

<?php
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$conn = new mysqli('localhost', 'root', '', 'bookstore');

if ($conn) {
    $sql = "INSERT INTO `userdetails` (`email`, `password`, `created_at`) VALUES ('$email', '$password', CURRENT_TIMESTAMP)";
    $result = mysqli_query($conn, $sql);
}

?>
<?php
include "sign-up.php";
?>