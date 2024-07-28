<?php
session_start();
$conn = mysqli_connect('localhost', 'qvsmymfe_bookstore', 'YourDatabasePassword', 'qvsmymfe_bookstore');
if (mysqli_connect_error()) {
    echo "
        <script>
        alert('Failed to connect to the server. Please try again later!');
        window.location.href='mycart.php';
        </script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['purchase'])) {
        $query1 = "INSERT INTO `order_manager` (`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES (?, ?, ?, ?)";
        $stmt1 = mysqli_prepare($conn, $query1);
        if ($stmt1) {
            mysqli_stmt_bind_param($stmt1, "ssss", $_POST['full_name'], $_POST['phone_no'], $_POST['address'], $_POST['pay_mode']);
            if (mysqli_stmt_execute($stmt1)) {
                $Order_Id = mysqli_insert_id($conn);
                $query2 = "INSERT INTO `user_orders` (`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?, ?, ?, ?)";
                $stmt2 = mysqli_prepare($conn, $query2);
                if ($stmt2) {
                    mysqli_stmt_bind_param($stmt2, "isii", $Order_Id, $Item_Name, $Price, $Quantity);
                    foreach ($_SESSION['cart'] as $keys => $values) {
                        $Item_Name = $values['Item_Name'];
                        $Price = $values['Price'];
                        $Quantity = $values['Quantity'];
                        mysqli_stmt_execute($stmt2);
                    }
                    unset($_SESSION['cart']);
                    echo "
                        <script>
                        alert('Order Placed');
                        window.location.href='index.php';
                        </script>";
                } else {
                    echo "
                        <script>
                        alert('SQL Query Prepare Error: " . mysqli_error($conn) . "');
                        window.location.href='mycart.php';
                        </script>";
                }
            } else {
                echo "
                    <script>
                    alert('SQL Error: " . mysqli_error($conn) . "');
                    window.location.href='mycart.php';
                    </script>";
            }
            mysqli_stmt_close($stmt1);
            mysqli_stmt_close($stmt2);
        } else {
            echo "
                <script>
                alert('SQL Query Prepare Error: " . mysqli_error($conn) . "');
                window.location.href='mycart.php';
                </script>";
        }
    }
}

mysqli_close($conn);
?>
