<?php

require_once ('../db/dbConnect.php');

if(isset($_POST['update'])){

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$role = $_POST['role'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$user_id = $_POST['id'];


 $sql = "UPDATE register SET firstname='$firstname',lastname='$lastname',email='$email', 
 dob='$dob', gender='$gender',role='$role', mobile='$mobile',password='$password' where user_id='$user_id'";

 if(mysqli_query($dbConnect,$sql)){
  header("location:tList.php");
  echo "<script>alert('Updated!')</script>";
 }else{
  header("location:tList.php");
  echo "<script>alert('Sorry update query not work')</script>";
}

}
//  echo "<pre>";
// var_dump($_GET);
// echo "</pre>";
//die();

 ?>