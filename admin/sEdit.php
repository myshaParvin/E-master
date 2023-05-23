<?php

require_once("../db/dbConnect.php");


$user_id = $_GET['id'];


$result = mysqli_query($dbConnect,"SELECT * FROM `register` WHERE user_id=$user_id");

$edit_stdinfos= mysqli_fetch_all($result);


// echo "<pre>";
// var_dump($edit_stdinfos);
// echo "</pre>";
// die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Master | Edit</title>

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
<form method="POST" action="sUpdate.php" id="signup-form">

<?php foreach ($edit_stdinfos as $edit_stdinfo){ ?>
<div class="form-group">
        <label for="firstname">
        
        </label>
        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" value="<?= $edit_stdinfo[0]?>">
    </div>

    <div class="form-group">
        <label for="lastname">
      
        </label>
        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" value="<?= $edit_stdinfo[1]?>">
    </div>

    <div class="form-group">
    <label for="email">
  
    </label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="<?= $edit_stdinfo[2]?>">
    </div>

    <div class="form-group">
        <label for="dob">
       
        </label>
        <input type="date" class="form-control" name="dob" id="dob" value="<?= $edit_stdinfo['3']?>">
    </div>
    <br>
    <div class="form-group">
    <label for="gender">
  
    </label>
    <input type="text" class="form-control" name="gender" id="gender" value="<?= $edit_stdinfo['4']?>">
    </div>
    

    <div class="form-group">
    <label for="role">
  
    </label>
    <input type="text" class="form-control" name="role" id="role" value="<?= $edit_stdinfo['5']?>">
    </div>
   

    <div class="form-group">
        <label for="mobile">
        
        </label>
        <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Mobile No." value="<?= $edit_stdinfo['6']?>">
    </div>

    <div class="form-group">
    <label for="password">
    
    </label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?= $edit_stdinfo['7']?>">
    </div>

    <div class="form-group">
    <label for="id">
    
    </label>
    <input type="hidden" class="form-control" name="id" id="id" value="<?= $edit_stdinfo['8']?>" >
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