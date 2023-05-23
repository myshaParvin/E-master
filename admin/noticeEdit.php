<?php

require_once("../db/dbConnect.php");


$notice_id = $_GET['id'];


$result = mysqli_query($dbConnect,"SELECT * FROM `notices` WHERE id='$notice_id'");

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
    <title>E-Master | Edit Notice</title>

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
<form method="POST" action="noticeUpdate.php">

<?php foreach ($edit_infos as $edit_info){ ?>
    <div class="form-group">
        <label for="notice_id">
        
        </label>
        <input type="hidden" class="form-control" name="notice_id" id="notice_id" value="<?= $edit_info[0]?>">
    </div>
    <div class="form-group">
        <label for="published_on">
        
        </label>
        <input type="text" class="form-control" name="published_on" id="published_on" value="<?= $edit_info[1]?>">
    </div>

    <div class="form-group">
        <label for="notice_sub">
      
        </label>
        <input type="text" class="form-control" name="notice_sub" id="notice_sub" value="<?= $edit_info[2]?>">
    </div>

    <div class="form-group">
    <label for="notice_des">
  
    </label>
    <input type="text" class="form-control" name="notice_des" id="notice_des" value="<?= $edit_info[3]?>">
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