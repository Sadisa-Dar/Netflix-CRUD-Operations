<?php
include 'conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM Media WHERE mediaID = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: Media_display.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "No ID provided.";
}

$conn->close();
?>
