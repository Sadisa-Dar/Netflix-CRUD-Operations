<?php
include 'conn.php';

$Name = $_POST['name'];
$AccNo = $_POST['cardnumber'];
$Date = $_POST['expiry_date'];
$CVC = $_POST['cvc'];
$plan = $_POST['plan'];

$sql = "INSERT INTO Payment (Name, AccountNo, ExpiryDate, CVC, Subscription_Deal)
        VALUES ('$Name', '$AccNo', '$Date', '$CVC', '$plan')";

if ($conn->query($sql) === TRUE) {
    header("Location: profile.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
