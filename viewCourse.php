<?php


//connect to database
require_once('db/dbConnect.php');

$course_id = $_GET['course_id'];


$result = mysqli_query($dbConnect,"SELECT * FROM `course_info` WHERE course_id = $course_id");


$courses = mysqli_fetch_all($result);

// echo "<pre>";
// print_r($courses);
// echo "</pre>";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
   <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="assets/fontawesome/css/all.min.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="assets/css/viewStyle.css" rel="stylesheet" type='text/css'>



    <title>E-Master | Details</title>
  </head>
  <body>
  <?php foreach ($courses as $course){ ?>

    <div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <h3>Course ID : <?= $course['0']?> </h3>
          </div>
          <div class="card-body text-center">
            <p class="mb-0"><strong class="pr-1">Course Code :</strong><?= " ".$course['1'] ?></p>
            <p class="mb-0"><strong class="pr-1">Course Name :</strong><?= " ".$course['2'] ?></p>

          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="fas fa-info-circle"></i>&nbsp;General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Course Type</th>
                <td width="2%">:</td>
                <td><?= $course['3'] ?></td>
              </tr>
              <tr>
                <th width="30%">Course Session	</th>
                <td width="2%">:</td>
                <td><?= $course['5'] ?></td>
              </tr>
              <tr>
                <th width="30%">Class Time</th>
                <td width="2%">:</td>
                <td><?= $course['6'] ?></td>
              </tr>
              <tr>
                <th width="30%">Course Duration</th>
                <td width="2%">:</td>
                <td><?= $course['7'] ?></td>
              </tr>
            
            </table>
          </div>
        </div>
          <div style="height: 26px"></div>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="fas fa-info-circle"></i>&nbsp;Other Information</h3>
          </div>
          <br>
          
          <div class="card-body pt-0">
            
             <ul class="" style="list-style-type: square;">
              <li><em>Instructor ID : </em> <?= $course['4'] ?></li>
              
            </ul>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>





  </body>
</html>