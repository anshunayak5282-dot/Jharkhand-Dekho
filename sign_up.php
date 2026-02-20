<?php
include("db.php");

$name     = $_POST['name'];
$email    = $_POST['email'];
$mobile   = $_POST['mobile'];
$password = $_POST['password'];

$sql = "INSERT INTO users (name, email, mobile, password)
        VALUES ('$name', '$email', '$mobile', '$password')";

if (mysqli_query($conn, $sql)) {
    header("Location: login.html");
    exit;
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
