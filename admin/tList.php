<?php


//connect to database
require_once('../db/dbConnect.php');

//select command


$result = mysqli_query($dbConnect,"SELECT * FROM `register` WHERE role='Teacher'");


$tInfos = mysqli_fetch_all($result);

// echo "<pre>";
// print_r($tInfos);
// echo "</pre>";

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
   <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

   <link href="../assets/css/Footerstyle.css" rel="stylesheet" type='text/css'>


    <!-- Font Awesome -->
    <link href="../assets/fontawesome/css/all.min.css" rel="stylesheet">

    <!-- Dashboard CSS -->
    <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />

    <title>E-Master | Teacher List</title>
  </head>
  <body>

<div class="container mt-5">

   <table class="table table-striped">
  <thead>
   <h1 class="text-center"><u>Teachers Records Table</u></h1>

   <div>
      
        <a href="index.php">
    <button type="button" class="btn btn-outline-danger">Back to Dashboard</button>
        </a>
</div>
   
   <?php
//  if ($result){
//   echo '<div class="alert alert-success alert-dismissible">
//   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
//   <strong>Success!</strong> This alert box could indicate a successful or positive action.
// </div>';
//   //echo  '<div class="alert alert-success">Succesful!</div>';
// }else{
//     echo  '<div class="alert alert-danger">Error!</div>';
// }

?>
    <tr>
      
      <th scope="col">First Name</th>
       <th scope="col">Last Name</th>
       <th scope="col">Email</th>
       <th scope="col">Date of Birth</th>
       <th scope="col">Gender</th>
       <th scope="col">Role</th>
       <th scope="col">Mobile</th>
       <th scope="col">Password</th>
       <th scope="col">User ID</th>
       <th scope="col">Action</th>
       
    </tr>
  </thead>
  <tbody>
  <?php foreach ($tInfos as $tInfo){ ?>
    <tr>

      
        <td><?= $tInfo['0']?></td>
        <td><?= $tInfo['1']?></td>
        <td><?= $tInfo['2']?></td>
        <td><?= $tInfo['3']?></td>
        <td><?= $tInfo['4']?></td>
        <td><?= $tInfo['5']?></td>
        <td><?= $tInfo['6']?></td>
        <td><?= $tInfo['7']?></td>
        <td><?= $tInfo['8']?></td>

        
          <td>

              <a href="tEdit.php?id=<?= $tInfo['8']?>" class="text-danger text-decoration-none"><i class="far fa-edit"></i>&nbsp;Edit</a> |
              <a href="tView.php?id=<?= $tInfo['8']?>" class="text-danger text-decoration-none"><i class="fas fa-eye"></i>&nbsp;Details</a> |
              <a href="tDelete.php?id=<?= $tInfo['8']?>" class="text-danger text-decoration-none" onclick="return confirm('Are you sure you want to delete this user?')"><i class="far fa-trash-alt delete" ></i>&nbsp;Delete</a>
          </td>

    </tr>
<?php } ?>
  </tbody>
</table>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
<?php require_once '../includes/footer.php'; ?>
  </body>
</html>
