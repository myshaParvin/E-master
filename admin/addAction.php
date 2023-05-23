<?php
require_once('../db/dbConnect.php');
 

if(isset($_POST['add'])){
    
    $result_type     = $_POST['result_type'];
    $result_session        = $_POST['result_session'];
    $course_id          = $_POST['course_id'];
    $course_name       = $_POST['course_name'];
    $grade         = $_POST['grade'];
    $cgpa       = $_POST['cgpa'];
    $remark         = $_POST['remark'];
    $student_id       = $_POST['student_id'];
    $faculty_id         = $_POST['faculty_id'];
    $entry_date       = $_POST['entry_date'];
   
}

//insert command
  $insert_query = "INSERT INTO `result_info` (`result_type`,`result_session`,`course_id`,`course_name`,`grade`,`cgpa`,`remark`,`student_id`,`faculty_id`,`entry_date`) VALUES(?,?,?,?,?,?,?,?,?,?)";

  //Preparing
  $stmt = $dbConnect->prepare($insert_query);

  $stmt->bind_param('ssssssssss', $result_type, $result_session, $course_id, $course_name, $grade, $cgpa, $remark, $student_id, $faculty_id, $entry_date);
   
  //execute the command
  $result = $stmt->execute();

  if($result){
      echo "successfully inserted";
  }else{
      echo "error";
  }
 
  header("location:resultList.php");
  
//echo "<pre>";
// var_dump($_POST);
// echo "</pre>";
// die();