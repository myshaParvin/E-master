<?php
require_once('../db/dbConnect.php');
 

if(isset($_POST['update'])){
    
    $notice_id    = $_POST['notice_id'];
    $published_on     = $_POST['published_on'];
    $notice_sub        = $_POST['notice_sub'];
    $notice_des          = $_POST['notice_des'];
}
// echo "<pre>";
// var_dump($stmt);
// echo "</pre>";
// die();
//insert command
  $sql = "UPDATE `notices` SET published_on='$published_on',notice_sub='$notice_sub',notice_des='$notice_des' where id='$notice_id'";
 
  if(mysqli_query($dbConnect,$sql)){
   echo "<script>alert('Updated!')</script>";
  }else{
   echo "<script>alert('Sorry update query not work')</script>";
 }
 
  
 header("location:noticeList.php");

  
