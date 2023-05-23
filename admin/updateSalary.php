<?php

require_once ('../db/dbConnect.php');

if(isset($_POST['update'])){

    $salary_id             = $_POST['salary_id'];
    $salary_to        	= $_POST['salary_to'];
    $salary_date        = $_POST['salary_date'];
    $salary_amount      = $_POST['salary_amount'];
    $tsalary_amount     = $_POST['tsalary_amount'];
    $received_on        = $_POST['received_on'];
      

$result = mysqli_query($dbConnect,"SELECT * FROM `facultypayment_info` WHERE salary_id=$salary_id");

$sql = "UPDATE facultypayment_info SET salary_to='$salary_to',salary_date='$salary_date',salary_amount='$salary_amount',tsalary_amount='$tsalary_amount',received_on='$received_on' where salary_id='$salary_id'";

if(mysqli_query($dbConnect,$sql)){
  echo "Success";
}else{
  echo "Failed";
}

 }
  header("location:salaryTable.php");




  // echo "<pre>";
// var_dump($r);
// echo "</pre>";
//die();

// if ($sql) {
//   echo "Successful";
//   //header("location:index.php");
// }else{
//   echo "<script>alert('Sorry update query not work')</script>";
// }
 ?>