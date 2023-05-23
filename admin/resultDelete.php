<?php

require_once("../db/dbConnect.php");


$result_id = $_GET['id'];


$sql = "DELETE FROM `result_info` WHERE `result_id` = $result_id";


if (mysqli_query($dbConnect, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($dbConnect);
}

mysqli_close($dbConnect);

header("location:resultList.php");
?>