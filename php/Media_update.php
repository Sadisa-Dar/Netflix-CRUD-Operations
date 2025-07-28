<?php
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['mediaID'];
    $Title = $_POST['title'];
    $Time = $_POST['duration'];
    $Des = $_POST['des'];
    $Date = $_POST['dob'];
    $Genre = $_POST['genre'];

    $sql = "UPDATE Media SET 
        Title = '$Title',
        Duration = '$Time',
        Description = '$Des',
        Release_Date = '$Date',
        Genre = '$Genre' 
        WHERE mediaID = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: Media_display.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request!";
}
?>
