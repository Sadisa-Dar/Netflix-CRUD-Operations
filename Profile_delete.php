<?php
include 'conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM Profile WHERE userID = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: Profile_display.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "No ID provided.";
}

$conn->close();
?>
