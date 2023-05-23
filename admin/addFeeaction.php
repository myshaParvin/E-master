<?php
require_once('../db/dbConnect.php');
 

if(isset($_POST['add'])){
    
    $payment_session        = $_POST['payment_session'];
    $payment_purpose        = $_POST['payment_purpose'];
    $payment_by             = $_POST['payment_by'];
    $payment_date           = $_POST['payment_date'];
    $amount                 = $_POST['amount'];
    $t_amount               = $_POST['t_amount'];
    $payment_method         = $_POST['payment_method'];
      
}

//insert command
  $insert_query = "INSERT INTO `stdpayment_info`(`payment_session`,`payment_purpose`,`payment_by`,`payment_date`,`amount`,`t_amount`,`payment_method`) VALUES('$payment_session','$payment_purpose','$payment_by','$payment_date','$amount','$t_amount','$payment_method')";

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

 
header("location:feesTable.php");
  
  