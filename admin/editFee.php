<?php

require_once("../db/dbConnect.php");


$payment_id = $_GET['payment_id'];


$result = mysqli_query($dbConnect,"SELECT * FROM `stdpayment_info` WHERE payment_id=$payment_id");

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
    <title>E-Master | Edit Fee</title>

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
<form method="POST" action="updateFee.php">

<?php foreach ($edit_infos as $edit_info){ ?>
<div class="form-group">
        <label for="payment_id">
        
        </label>
        <input type="hidden" class="form-control" name="payment_id" id="payment_id" value="<?= $edit_info[0]?>">
    </div>

    <div class="form-group">
        <label for="payment_session">
      
        </label>
        <input type="text" class="form-control" name="payment_session" id="payment_session" value="<?= $edit_info[1]?>">
    </div>

    <div class="form-group">
    <label for="payment_purpose">
  
    </label>
    <input type="payment_purpose" class="form-control" name="payment_purpose" id="payment_purpose" value="<?= $edit_info[2]?>">
    </div>

    <div class="form-group">
        <label for="payment_by">
       
        </label>
        <input type="text" class="form-control" name="payment_by" id="payment_by" value="<?= $edit_info['3']?>">
    </div>
    <br>
    <div class="form-group">
    <label for="payment_date">
  
    </label>
    <input type="date" class="form-control" name="payment_date" id="payment_date" value="<?= $edit_info['4']?>">
    </div>
    

    <div class="form-group">
    <label for="amount">
  
    </label>
    <input type="text" class="form-control" name="amount" id="amount" value="<?= $edit_info['5']?>">
    </div>
   

    <div class="form-group">
        <label for="t_amount">
        
        </label>
        <input type="number" class="form-control" name="t_amount" id="t_amount" value="<?= $edit_info['6']?>">
    </div>

    <div class="form-group">
    <label for="payment_method">
    
    </label>
    <input type="payment_method" class="form-control" name="payment_method" id="payment_method" value="<?= $edit_info['7']?>">
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