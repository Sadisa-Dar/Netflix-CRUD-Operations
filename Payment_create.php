<?php
include 'conn.php';

$sql = "CREATE TABLE Payment (
    ReceiptID INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(20),
    AccountNo VARCHAR(16) NOT NULL,
    ExpiryDate DATE,
    CVC VARCHAR(3),
    Subscription_Deal VARCHAR(200) NOT NULL
)";

if ($conn->query($sql)) {
    echo "Table created successfully!";
} else {
    echo "Error: " . $conn->error;
}
?>
