<?php
include("db.php");
session_start();

if(isset($_POST['name'])){

    $name = $_POST['name'];
    $Persons = $_POST['Persons'];
    $Date = $_POST['Date'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $sql = "INSERT INTO bookings (Name, Persons, Date, email, mobile)
            VALUES ('$name', '$Persons', '$Date', '$email', '$mobile')";

    if(mysqli_query($conn, $sql)){
        header("Location: booking_succ.php");
    }else{
        echo "❌ Error: " . mysqli_error($conn);
    }
}
?>

