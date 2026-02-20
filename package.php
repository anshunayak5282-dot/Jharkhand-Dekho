<?php
include("db.php");

$result = mysqli_query($conn, "SELECT * FROM packages");

while($row = mysqli_fetch_assoc($result)) {
?>
  <div class="card">
    <div class="card-img">
      <img src="images/<?php echo $row['image']; ?>">
    </div>

    <div class="card-content">
      <h2><?php echo $row['title']; ?></h2>
      <p>From Rs <?php echo $row['price']; ?></p>

      <a href="php/booking.php?id=<?php echo $row['id']; ?>">
        <button>Book Now</button>
      </a>
    </div>
  </div>
<?php } ?>
