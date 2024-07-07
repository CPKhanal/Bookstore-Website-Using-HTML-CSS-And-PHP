<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'bookstore');
if (mysqli_connect_error()) {
    echo "
            <script>
            alert('Failed to connect to the server. Please try again later!')
                window.location.href='mycart.php';
            </script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['purchase'])) {
        $query1 = "INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
        if (mysqli_query($conn, $query1)) {
            $Order_Id = mysqli_insert_id($conn);
           $query2 = "INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)"; 
           $stmt=mysqli_prepare($conn,$query2);
           if($stmt){
            mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price,$Quantity);
            foreach($_SESSION['cart'] as $keys =>  $values){
                $Item_Name=$values['Item_Name'];
                $Price=$values['Price'];
                $Quantity=$values['Quantity'];
                mysqli_stmt_execute( $stmt );
            }
            unset($_SESSION['cart']);
            echo "
            <script>
            alert('Order Placed')
                window.location.href='index.php';
            </script>";
           }
           else{
            echo "
            <script>
            alert('SQL Query Prepare Error')
                window.location.href='mycart.php';
            </script>";
           }
        } else {
            echo "
            <script>
            alert('SQL Error')
                window.location.href='mycart.php';
            </script>";
        }
    }
}
