<?php
require_once('../db/dbConnect.php');
 

if(isset($_POST['add'])){
    
    $published_on     = $_POST['published_on'];
    $notice_sub        = $_POST['notice_sub'];
    $notice_des          = $_POST['notice_des'];
}
// echo "<pre>";
// var_dump($stmt);
// echo "</pre>";
// die();
//insert command
  $insert_query = "INSERT INTO `notices` (`published_on`,`notice_sub`,`notice_des`) VALUES(?,?,?)";

  //Preparing
  $stmt = $dbConnect->prepare($insert_query);

  $stmt->bind_param('sss', $published_on, $notice_sub, $notice_des);
   
  //execute the command
  $result = $stmt->execute();

  if($result){
      echo "successfully inserted";
  }else{
      echo "error";
  }
 
  header("location:noticeList.php");
  
