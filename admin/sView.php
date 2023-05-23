<?php


//connect to database
require_once('../db/dbConnect.php');

$user_id = $_GET['id'];


$result = mysqli_query($dbConnect,"SELECT * FROM `register` WHERE user_id = $user_id");


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
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
   <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="../assets/fontawesome/css/all.min.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="../assets/css/viewStyle.css" rel="stylesheet" type='text/css'>



    <title>E-Master | Details</title>
  </head>
  <body>
  <?php foreach ($stdInfos as $stdInfo){ ?>

    <div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="https://source.unsplash.com/600x300/?student" alt="student dp">
            <h3>User ID : <?= $stdInfo['8']?> </h3>
          </div>
          <div class="card-body text-center">
            <p class="mb-0"><strong class="pr-1">Name :</strong><?= " ".$stdInfo['0']." ".$stdInfo['1'] ?></p>
            <p class="mb-0"><strong class="pr-1">Email :</strong><?= " ".$stdInfo['2'] ?></p>

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
                <th width="30%">Date of Birth</th>
                <td width="2%">:</td>
                <td><?= $stdInfo['3'] ?></td>
              </tr>
              <tr>
                <th width="30%">Joined Year	</th>
                <td width="2%">:</td>
                <td>2020</td>
              </tr>
              <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td><?= $stdInfo['4'] ?></td>
              </tr>
              <tr>
                <th width="30%">Mobile</th>
                <td width="2%">:</td>
                <td><?= $stdInfo['6'] ?></td>
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
              <li>Role => <?= $stdInfo['5'] ?></li>
              
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