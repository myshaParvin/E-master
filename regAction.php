<?php
session_start();
require_once('db/dbConnect.php');


if(isset($_POST['signup'])){
    $firstname    = $_POST['firstname'];
    $lastname     = $_POST['lastname'];
    $email        = $_POST['email'];
    $dob          = $_POST['dob'];
    $gender       = $_POST['gender'];
    $role         = $_POST['role'];
    $mobile       = $_POST['mobile'];
    $password     = $_POST['password'];


// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";die();
    //insert command
  $insert_query = "INSERT INTO `register` (`firstname`,`lastname`,`email`,`dob`,`gender`,`role`,`mobile`,`password`) VALUES(?,?,?,?,?,?,?,?)";
  //Preparing
  $stmt = $dbConnect->prepare($insert_query);
  $stmt->bind_param('ssssssss',$firstname, $lastname, $email, $dob, $gender, $role, $mobile, $password);

  //execute the command
  $result = $stmt->execute();
  $_SESSION['message'] = "Registration succesfully completed!";
  header("location:register.php");
}else{
      echo "<h6 class='text-danger'>Registration Failed!</h6>";
  }


  

  ?>