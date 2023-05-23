<?php

require_once("../db/dbConnect.php");


$payment_id = $_GET['payment_id'];


$sql = "DELETE FROM `stdpayment_info` WHERE `payment_id` = $payment_id";


if (mysqli_query($dbConnect, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($dbConnect);
}

mysqli_close($dbConnect);

header("location:feesTable.php");
?>