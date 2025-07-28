<?php
include 'conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM Payment WHERE ReceiptID = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: Payment_display.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "No ID provided.";
}

$conn->close();
?>
