<?php
require_once('../db/dbConnect.php');
 

if(isset($_POST['add'])){
    
    $salary_to        	= $_POST['salary_to'];
    $salary_date        = $_POST['salary_date'];
    $salary_amount      = $_POST['salary_amount'];
    $tsalary_amount     = $_POST['tsalary_amount'];
    $received_on        = $_POST['received_on'];
      
}

//insert command
  $insert_query = "INSERT INTO `facultypayment_info`(`salary_to`,`salary_date`,`salary_amount`,`tsalary_amount`,`received_on`) VALUES('$salary_to','$salary_date','$salary_amount','$tsalary_amount','$received_on')";

  //Preparing
  $stmt = $dbConnect->prepare($insert_query);
   

  // echo "<pre>";
  //   var_dump($stmt);
  //   echo "</pre>";
  //   die();
  if(mysqli_query($dbConnect,$insert_query)){
    echo "Successfully Inserted!";
  }else{
    echo "Failed to Insert";
  }
  
   
  header("location:salaryTable.php");