<?php

$dbConnect = mysqli_connect("localhost","root","","project21");
// Check connection
if (mysqli_connect_errno())
  {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
