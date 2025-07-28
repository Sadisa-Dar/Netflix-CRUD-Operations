<?php
include 'conn.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['ReceiptID'];
    $name = $_POST['name'];
    $acc = $_POST['cardnumber'];
    $date = $_POST['expiry_date'];
    $cvc = $_POST['cvc'];
    $plan = $_POST['plan'];

    $sql = "UPDATE Payment SET 
    Name = '$name',
    AccountNo = '$acc',
    ExpiryDate = '$date',
    CVC = '$cvc',
    Subscription_Deal = '$plan' 
    WHERE ReceiptID = $id";

    if (mysqli_query($conn, $sql)) {
         header("Location: Payment_display.php");
    } else {
        echo "Error updating record: ";
    }
} else {
    echo "Invalid request!";
}
?>
