<?php
require_once('../db/dbConnect.php');
 

if(isset($_POST['update'])){
    
    $result_id    = $_POST['result_id'];
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

$sql = "UPDATE `result_info` SET result_type='$result_type',result_session='$result_session',course_id='$course_id', 
 course_name='$course_name', grade='$grade',cgpa='$cgpa', remark='$remark',student_id='$student_id',faculty_id='$faculty_id',entry_date='$entry_date' where result_id='$result_id'";

 if(mysqli_query($dbConnect,$sql)){
  echo "<script>alert('Updated!')</script>";
 }else{
  echo "<script>alert('Sorry update query not work')</script>";
}

 
header("location:resultList.php");
  
//echo "<pre>";
// var_dump($_POST);
// echo "</pre>";
// die();