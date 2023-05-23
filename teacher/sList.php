<?php


//connect to database
require_once('../db/dbConnect.php');


$result = mysqli_query($dbConnect,"SELECT * FROM `register` WHERE role='Student'");


$stdInfos = mysqli_fetch_all($result);

// echo "<pre>";
// print_r($stdInfos);
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

    <title>E-Master | Student List</title>
  </head>
  <body>
  

<div class="container mt-5">

   <table class="table table-striped">
  <thead>
   <h1 class="text-center"><u>Students Records Table</u></h1>
   
   <div>
        <a href="index.php">
    <button type="button" class="btn btn-outline-danger">Back to Dashboard</button>
        </a>
    </div>
   <?php

?>
    <tr>
      
      <th scope="col">First Name</th>
       <th scope="col">Last Name</th>
       <th scope="col">Email</th>
       <th scope="col">Date of Birth</th>
       <th scope="col">Gender</th>
       <th scope="col">Mobile</th>
       <th scope="col">User ID</th>
       <th scope="col">Action</th>
       
    </tr>
  </thead>
  <tbody>
  <?php foreach ($stdInfos as $stdInfo){ ?>
    <tr>

      
        <td><?= $stdInfo['0']?></td>
        <td><?= $stdInfo['1']?></td>
        <td><?= $stdInfo['2']?></td>
        <td><?= $stdInfo['3']?></td>
        <td><?= $stdInfo['4']?></td>
        <td><?= $stdInfo['6']?></td>
        <td><?= $stdInfo['8']?></td>
        
          <td>
              <a href="sView.php?id=<?= $stdInfo['8']?>" class="text-danger"><i class="fas fa-eye"></i>Details</a>
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
