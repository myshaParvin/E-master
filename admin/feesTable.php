<?php


//connect to database
require_once('../db/dbConnect.php');


$result = mysqli_query($dbConnect,"SELECT * FROM `stdpayment_info`");


$fees = mysqli_fetch_all($result);

// echo "<pre>";
// print_r($fees);
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

    <title>E-Master | Fees Records</title>
  </head>
  <body>

<div class="container mt-5">

   <table class="table table-striped">
  <thead>
   <h1 class="text-center"><u>Student Fees Records</u></h1>
   
   <div>
        <a href="addFee.php">
    <button type="button" class="btn btn-outline-danger">Add Fee</button>
        </a>
    
        <a href="index.php">
    <button type="button" class="btn btn-outline-danger">Back to Dashboard</button>
        </a>
</div>

   <?php
?>
    <tr>
        <th scope="col">Payment ID</th>
        <th scope="col">Payment Session</th>
        <th scope="col">Payment Purpose</th>
        <th scope="col">Payment By</th>
        <th scope="col">Payment Date</th>
        <th scope="col">Amount</th>
        <th scope="col">Total Amount</th>
        <th scope="col">Payment Method</th>
        <th scope="col" width='20%'>Action</th>
       
    </tr>
  </thead>
  <tbody>
  <?php foreach ($fees as $fee){ ?>
    <tr>

      
        <td><?= $fee['0']?></td>
        <td><?= $fee['1']?></td>
        <td><?= $fee['2']?></td>
        <td><?= $fee['3']?></td>
        <td><?= $fee['4']?></td>
        <td><?= $fee['5']?></td>
        <td><?= $fee['6']?></td>
        <td><?= $fee['7']?></td>
        
    
        
          <td>
          <a href="editFee.php?payment_id=<?= $fee['0']?>" class="text-danger text-decoration-none" ><i class="far fa-edit" ></i>&nbsp;Edit</a> |
          <a href="payment_report.php?payment_id=<?= $fee['0']?>" class="text-danger text-decoration-none" ><i class="fas fa-file-alt"></i>&nbsp;Payment Report</a> |

              <a href="deleteFee.php?payment_id=<?= $fee['0']?>" class="text-danger text-decoration-none" onclick="return confirm('Are you sure you want to delete this user?')"><i class="far fa-trash-alt delete" ></i>&nbsp;Delete</a>
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
