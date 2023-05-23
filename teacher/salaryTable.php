<?php


//connect to database
require_once('../db/dbConnect.php');


$result = mysqli_query($dbConnect,"SELECT * FROM `facultypayment_info`");


$salaries = mysqli_fetch_all($result);

// echo "<pre>";
// print_r($salaries);
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

    <title>E-Master | Salary Table</title>
  </head>
  <body>

<div class="container mt-5">

   <table class="table table-striped">
  <thead>
   <h1 class="text-center"><u>Teacher Salary Table</u></h1>
   
   <div>
        <a href="addSalary.php">
    <button type="button" class="btn btn-outline-danger">Add Salary</button>
        </a>
    
        <a href="index.php">
    <button type="button" class="btn btn-outline-danger">Back to Dashboard</button>
        </a>
</div>

   <?php
?>
    <tr>
       <th scope="col">Salary ID</th>
       <th scope="col">Salary To</th>
       <th scope="col">Salary Date</th>
       <th scope="col">Salary Amount</th>
       <th scope="col">Total Salary Amount</th>
       <th scope="col">Received On</th>
       <th scope="col" width='10%'>Action</th>
       
    </tr>
  </thead>
  <tbody>
  <?php foreach ($salaries as $salary){ ?>
    <tr>

        <td><?= $salary['0']?></td>
        <td><?= $salary['1']?></td>
        <td><?= $salary['2']?></td>
        <td><?= $salary['3']?></td>
        <td><?= $salary['4']?></td>
        <td><?= $salary['5']?></td>
      
          <td>
              <a href="salaryReport.php?salary_id=<?= $salary['0'] ?>" class="text-danger text-decoration-none"><i class="fas fa-file-alt"></i>&nbsp;Salary Report</a>
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
