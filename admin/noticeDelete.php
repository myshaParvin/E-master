<?php

require_once("../db/dbConnect.php");


$user_id = $_GET['id'];


$sql = "DELETE FROM `notices` WHERE `id` = $user_id";


if (mysqli_query($dbConnect, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($dbConnect);
}

mysqli_close($dbConnect);

header("location:noticeList.php");
?>