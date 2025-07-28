<?php
include 'conn.php';

$sql = "CREATE TABLE Media (
    mediaID INT PRIMARY KEY AUTO_INCREMENT,
    Title VARCHAR(150) NOT NULL,
    Duration TIME,
    Description VARCHAR(255),
    Release_Date DATE,
    Genre VARCHAR(100)
)";

if ($conn->query($sql)) {
    echo "Table created successfully!";
} else {
    echo "Error: " . $conn->error;
}
?>
