<?php


//connect to database
require_once('../db/dbConnect.php');


$result = mysqli_query($dbConnect,"SELECT * FROM `result_info`");


$resultInfos = mysqli_fetch_all($result);

// echo "<pre>";
// print_r($resultInfos);
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

    <title>E-Master | Result</title>
  </head>
  <body>
  <!-- <small class="rights"><?= $date = date("Y-m-d");?></small> -->

<div class="container mt-5">

   <table class="table table-striped">
  <thead>
   <h1 class="text-center"><u>Student Results Table</u></h1>
   
   <div>
        
        <a href="index.php">
    <button type="button" class="btn btn-outline-danger">Back to Dashboard</button>
        </a>
    </div>

   <?php
?>
    <tr>
    <th scope="col">Result ID</th>
      <th scope="col">Result Type</th>
       <th scope="col">Result Session</th>
       <th scope="col">Course ID</th>
       <th scope="col">Course Name</th>
       <th scope="col">Grade</th>
       <th scope="col">CGPA</th>
       <th scope="col">Remark</th>
       <th scope="col">Student ID</th>
       <th scope="col">Entried By</th>
       <th scope="col">Entry Date</th>
       
    </tr>
  </thead>
  <tbody>
  <?php foreach ($resultInfos as $resultInfo){ ?>
    <tr>

      
        <td><?= $resultInfo['0']?></td>
        <td><?= $resultInfo['1']?></td>
        <td><?= $resultInfo['2']?></td>
        <td><?= $resultInfo['3']?></td>
        <td><?= $resultInfo['4']?></td>
        <td><?= $resultInfo['5']?></td>
        <td><?= $resultInfo['6']?></td>
        <td><?= $resultInfo['7']?></td>
        <td><?= $resultInfo['8']?></td>
        <td><?= $resultInfo['9']?></td>
        <td><?= $resultInfo['10']?></td>
        
          

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
