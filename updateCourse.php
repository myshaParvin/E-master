<?php

require_once ('db/dbConnect.php');

if(isset($_POST['update'])){
    $course_id = $_POST['course_id'];
    $course_code    = $_POST['course_code'];
    $coursename     = $_POST['coursename'];
    $coursetype        = $_POST['coursetype'];
    $course_facultyid          = $_POST['course_facultyid'];
    $course_session       = $_POST['course_session'];
    $class_time         = $_POST['class_time'];
    $duration       = $_POST['duration'];
    

 
 $sql = "UPDATE `course_info` SET course_code='$course_code',coursename='$coursename',coursetype='$coursetype', 
 course_facultyid='$course_facultyid', course_session='$course_session',class_time='$class_time', duration='$duration' where course_id='$course_id'";

 if(mysqli_query($dbConnect,$sql)){
  echo "<script>alert('Updated!')</script>";
 }else{
  
  echo "<script>alert('Sorry update query not work')</script>";
}

}
header("location:coursesTable.php");
//echo "<pre>";
// var_dump($_POST);
// echo "</pre>";
// die();
 ?>