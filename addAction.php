<?php
require_once('db/dbConnect.php');
 

if(isset($_POST['add'])){
    $course_code    = $_POST['course_code'];
    $coursename     = $_POST['coursename'];
    $coursetype        = $_POST['coursetype'];
    $course_facultyid          = $_POST['course_facultyid'];
    $course_session       = $_POST['course_session'];
    $class_time         = $_POST['class_time'];
    $duration       = $_POST['duration'];
   
}

//insert command
  $insert_query = "INSERT INTO `course_info` (`course_code`,`coursename`,`coursetype`,`course_facultyid`,`course_session`,`class_time`,`duration`) VALUES(?,?,?,?,?,?,?)";

  //Preparing
  $stmt = $dbConnect->prepare($insert_query);
  $stmt->bind_param('sssssss',$course_code, $coursename, $coursetype, $course_facultyid, $course_session, $class_time, $duration);

  //execute the command
  $result = $stmt->execute();

  header("location:coursesTable.php");
  // echo "<pre>";
// var_dump($result);
// echo "</pre>";
// die();