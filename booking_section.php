
<?php
include("db.php");

if(!isset($_GET['id'])){
  echo "No Package Selected";
  exit;
}

$id = $_GET['id'];

$q = mysqli_query($conn, "SELECT * FROM packages WHERE id='$id'");
$data = mysqli_fetch_assoc($q);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Booking</title>
  <link rel="stylesheet" href="./booking.css">
</head>
<body>

<h1><?php echo $data['title']; ?></h1>

<img src="<?php echo $data['image']; ?>" width="400">

<p><?php echo $data['description']; ?></p>

<h3>Price: Rs <?php echo $data['price']; ?></h3>

<form>
  <input type="text" placeholder="Your Name" required>
  <input type="text" placeholder="Mobile Number" required>
  <button>Book Now</button>
</form>

</body>
</html>
