<?php
include 'conn.php';
$Name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$sql = "INSERT INTO Profile (Name,Email, Password, DateOfBirth)
        VALUES ('$Name','$email', '$password', '$dob')";

if ($conn->query($sql) === TRUE) {
    header("Location: 2.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>