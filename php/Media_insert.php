<?php
include 'conn.php';

$Title = $_POST['title'];
$Time = $_POST['duration'];
$Des = $_POST['des'];
$Date = $_POST['dob'];
$Genre = $_POST['genre'];

$sql = "INSERT INTO Media (Title, Duration, Description, Release_Date, Genre)
        VALUES ('$Title', '$Time', '$Des', '$Date', '$Genre')";

if ($conn->query($sql) === TRUE) {
    header("Location: Media_display.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
