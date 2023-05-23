<?php

require_once ('../db/dbConnect.php');

if(isset($_POST['update'])){

    $payment_id             = $_POST['payment_id'];
    $payment_session        = $_POST['payment_session'];
    $payment_purpose        = $_POST['payment_purpose'];
    $payment_by             = $_POST['payment_by'];
    $payment_date           = $_POST['payment_date'];
    $amount                 = $_POST['amount'];
    $t_amount               = $_POST['t_amount'];
    $payment_method         = $_POST['payment_method'];
      

$result = mysqli_query($dbConnect,"SELECT * FROM `stdpayment_info` WHERE payment_id=$payment_id");

$sql = "UPDATE stdpayment_info SET payment_session='$payment_session',payment_purpose='$payment_purpose',payment_by='$payment_by',payment_date='$payment_date',amount='$amount',t_amount='$t_amount',payment_method='$payment_method' where payment_id='$payment_id'";

if(mysqli_query($dbConnect,$sql)){
  echo "Success";
}else{
  echo "Failed";
}

 }
  header("location:feesTable.php");




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