<?php
include 'conn.php';

$sql = "CREATE TABLE Profile (
    userID INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(150),
    Email VARCHAR(150) UNIQUE,
    Password VARCHAR(150) NOT NULL,
    DateOfBirth DATE
)";

if ($conn->query($sql)) {
    echo "Table created successfully!";
} else {
    echo "Error: " . $conn->error;
}
?>