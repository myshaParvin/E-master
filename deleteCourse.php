<?php

require_once("db/dbConnect.php");


$course_id = $_GET['course_id'];


$sql = "DELETE FROM `course_info` WHERE `course_id` = $course_id";


if (mysqli_query($dbConnect, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($dbConnect);
}

mysqli_close($dbConnect);

header("location:coursesTable.php");
?>