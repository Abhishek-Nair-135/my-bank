<?php
$conn = mysqli_connect("localhost","root","abhisheknair135");
if (!$conn)
  {
  die('Could not connect: ' . mysqli_error());
  }
mysqli_select_db($conn,"mybank");
?>
