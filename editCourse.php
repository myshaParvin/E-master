<?php

require_once("db/dbConnect.php");


$course_id = $_GET['course_id'];


$result = mysqli_query($dbConnect,"SELECT * FROM `course_info` WHERE course_id='$course_id'");

$edit_infos= mysqli_fetch_all($result);


// echo "<pre>";
// var_dump($result);
// echo "</pre>";
// die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Master | Edit Course</title>

     <!-- Bootstrap CSS -->
   <link href="assets/css/bootstrap.min.css" rel="stylesheet">

   <link href="assets/css/Footerstyle.css" rel="stylesheet" type='text/css'>

    <!-- Font Awesome -->
    <link href="assets/fontawesome/css/all.min.css" rel="stylesheet">


<style>
 body{
     text-align: center;
     margin-top: 20px;
 }
</style>
</head>
<body>
    <div class="container border border-primary">
        <br>
    <h3 class="text-primary"><u>Update Informations</u></h3>
    <div>
        <a href="index.php">
    <button type="button" class="btn btn-outline-danger">Back to Dashboard</button>
        </a>
</div>
<form method="POST" action="updateCourse.php">

<?php foreach ($edit_infos as $edit_info){ ?>
    <div class="form-group">
        <label for="course_id">
        
        </label>
        <input type="hidden" class="form-control" name="course_id" id="course_id" value="<?= $edit_info[0]?>">
    </div>
    <div class="form-group">
        <label for="course_code">
        
        </label>
        <input type="text" class="form-control" name="course_code" id="course_code" value="<?= $edit_info[1]?>">
    </div>

    <div class="form-group">
        <label for="coursename">
      
        </label>
        <input type="text" class="form-control" name="coursename" id="coursename" value="<?= $edit_info[2]?>">
    </div>

    <div class="form-group">
    <label for="coursetype">
  
    </label>
    <input type="text" class="form-control" name="coursetype" id="coursetype" value="<?= $edit_info[3]?>">
    </div>

    <div class="form-group">
        <label for="course_facultyid">
      
        </label>
        <input type="text" class="form-control" name="course_facultyid" id="course_facultyid" value="<?= $edit_info[4]?>">
    </div>

    <div class="form-group">
    <label for="course_session">
  
    </label>
    <input type="text" class="form-control" name="course_session" id="course_session" value="<?= $edit_info[5]?>">
    </div>

    <div class="form-group">
    <label for="class_time">
  
    </label>
    <input type="text" class="form-control" name="class_time" id="class_time" value="<?= $edit_info[6]?>">
    </div>

    <div class="form-group">
        <label for="duration">
      
        </label>
        <input type="text" class="form-control" name="duration" id="duration" value="<?= $edit_info[7]?>">
    </div>


    

    
    <div class="form-group form-button">
         <input type="submit" name="update" id="update" class="form-submit btn btn-outline-success mt-4" value="Update">
    </div>
    <?php } ?>
</form>
<br>
 
</div>
<?php require_once 'includes/footer.php'; ?>
</body>
</html>