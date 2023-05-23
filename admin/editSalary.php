<?php

require_once("../db/dbConnect.php");


$salary_id = $_GET['salary_id'];


$result = mysqli_query($dbConnect,"SELECT * FROM `facultypayment_info` WHERE salary_id=$salary_id");

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
    <title>E-Master | Edit Salary</title>

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
<form method="POST" action="updateSalary.php">

<?php foreach ($edit_infos as $edit_info){ ?>
    <div class="form-group">
        <label for="salary_id">
        
        </label>
        <input type="hidden" class="form-control" name="salary_id" id="salary_id" value="<?= $edit_info[0]?>">
    </div>
    <div class="form-group">
        <label for="salary_to">
        
        </label>
        <input type="text" class="form-control" name="salary_to" id="salary_to" value="<?= $edit_info[1]?>">
    </div>

    <div class="form-group">
        <label for="salary_date">
      
        </label>
        <input type="date" class="form-control" name="salary_date" id="salary_date" value="<?= $edit_info[2]?>">
    </div>

    <div class="form-group">
    <label for="salary_amount">
  
    </label>
    <input type="number" class="form-control" name="salary_amount" id="salary_amount" value="<?= $edit_info[3]?>">
    </div>

    <div class="form-group">
        <label for="tsalary_amount">
       
        </label>
        <input type="text" class="form-control" name="tsalary_amount" id="tsalary_amount" value="<?= $edit_info[4]?>">
    </div>
    <br>
    <div class="form-group">
    <label for="received_on">
  
    </label>
    <input type="text" class="form-control" name="received_on" id="received_on" value="<?= $edit_info[5]?>">
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