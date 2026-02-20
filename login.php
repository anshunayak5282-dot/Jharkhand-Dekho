 /* <?php 
 session_start();
include("db.php");

$mobile   = $_POST['mobile'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE mobile='$mobile' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row=mysqli_fetch_assoc($result);
    $_SESSION['user']=$row['mobile'];
    // echo "Login Successful";
    header("Location: index.php");
    exit;
} else {
    echo "<script>alert('Invailied user');</script>";
    exit;   
}
?>
 