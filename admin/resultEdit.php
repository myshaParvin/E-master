<?php

require_once("../db/dbConnect.php");


$result_id = $_GET['result_id'];


$result = mysqli_query($dbConnect,"SELECT * FROM `result_info` WHERE result_id=$result_id");

$edit_infos= mysqli_fetch_all($result);


// echo "<pre>";
// var_dump($edit_infos);
// echo "</pre>";
// die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Master | Edit Result</title>

     <!-- Bootstrap CSS -->
   <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

   <link href="../assets/css/Footerstyle.css" rel="stylesheet" type='text/css'>

    <!-- Font Awesome -->
    <link href="../assets/fontawesome/css/all.min.css" rel="stylesheet">


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
<form method="POST" action="resultUpdate.php">

<?php foreach ($edit_infos as $edit_info){ ?>
    <div class="form-group">
        <label for="result_id">
        
        </label>
        <input type="hidden" class="form-control" name="result_id" id="result_id" value="<?= $edit_info[0]?>">
    </div>
    <div class="form-group">
        <label for="result_type">
        
        </label>
        <input type="text" class="form-control" name="result_type" id="result_type" value="<?= $edit_info[1]?>">
    </div>

    <div class="form-group">
        <label for="result_session">
      
        </label>
        <input type="text" class="form-control" name="result_session" id="result_session" value="<?= $edit_info[2]?>">
    </div>

    <div class="form-group">
    <label for="course_id">
  
    </label>
    <input type="text" class="form-control" name="course_id" id="course_id" value="<?= $edit_info[3]?>">
    </div>

    <div class="form-group">
        <label for="course_name">
       
        </label>
        <input type="text" class="form-control" name="course_name" id="course_name" value="<?= $edit_info[4]?>">
    </div>
    <br>
    <div class="form-group">
    <label for="grade">
  
    </label>
    <input type="text" class="form-control" name="grade" id="grade" value="<?= $edit_info[5]?>">
    </div>

    <div class="form-group">
    <label for="cgpa">
  
    </label>
    <input type="text" class="form-control" name="cgpa" id="cgpa" value="<?= $edit_info[6]?>">
    </div>

    <div class="form-group">
    <label for="remark">
  
    </label>
    <input type="text" class="form-control" name="remark" id="remark" value="<?= $edit_info[7]?>">
    </div>

    <div class="form-group">
    <label for="student_id">
  
    </label>
    <input type="text" class="form-control" name="student_id" id="student_id" value="<?= $edit_info[8]?>">
    </div>

    <div class="form-group">
    <label for="faculty_id">
  
    </label>
    <input type="text" class="form-control" name="faculty_id" id="faculty_id" value="<?= $edit_info[9]?>">
    </div>

    <div class="form-group">
    <label for="entry_date">
  
    </label>
    <input type="date" class="form-control" name="entry_date" id="entry_date" value="<?= $edit_info[10]?>">
    </div>
    

    
    <div class="form-group form-button">
         <input type="submit" name="update" id="update" class="form-submit btn btn-outline-success mt-4" value="Update">
    </div>
    <?php } ?>
</form>
<br>
 
</div>
<?php require_once '../includes/footer.php'; ?>
</body>
</html>