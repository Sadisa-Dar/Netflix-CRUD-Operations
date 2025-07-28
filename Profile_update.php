<?php
include 'conn.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['userID'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];

    $sql = "UPDATE Profile SET 
                Name = '$name', 
                Email = '$email', 
                Password = '$password', 
                DateOfBirth = '$dob' 
            WHERE userID = $id";

    if (mysqli_query($conn, $sql)) {
         header("Location: Profile_display.php");
    } else {
        echo "Error updating record: ";
    }
} else {
    echo "Invalid request!";
}
?>
