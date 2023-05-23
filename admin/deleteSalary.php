<?php

require_once("../db/dbConnect.php");


$salary_id = $_GET['salary_id'];


$sql = "DELETE FROM `facultypayment_info` WHERE `salary_id` = $salary_id";


if (mysqli_query($dbConnect, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($dbConnect);
}

mysqli_close($dbConnect);

header("location:salaryTable.php");
?>