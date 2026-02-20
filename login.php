<?php 
session_start();
include("db.php");

if(isset($_POST['mobile']) && isset($_POST['password'])){

    $mobile   = trim($_POST['mobile']);
    $password = trim($_POST['password']);

    if(empty($mobile) || empty($password)){
        echo "<script>
                alert('Please fill all fields');
                window.location.href='login.html';
              </script>";
        exit;
    }

    $sql = "SELECT * FROM users WHERE mobile='$mobile' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row['mobile'];
        header("Location: index.php");
        exit;
    } else {
        echo "<script>
                alert('Invalid user');
                window.location.href='login.html';
              </script>";
        exit;
    }

// } else {
//     header("Location: login.html");
//     exit;
}
?>
 