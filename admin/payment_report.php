<?php


//connect to database
require_once('../db/dbConnect.php');

$payment_id = $_GET['payment_id'];


$result = mysqli_query($dbConnect,"SELECT * FROM `stdpayment_info` WHERE payment_id = '$payment_id'");


$Infos = mysqli_fetch_all($result);

// echo "<pre>";
// print_r($Infos);
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

    <!--CSS File-->
    <link href="../assets/css/Footerstyle.css" rel="stylesheet" type='text/css'>

    <title>E-Master | Payment Report</title>
  </head>
  <body>
  <?php foreach ($Infos as $Info){ ?>

    <table class="body-wrap">
    <tbody><tr>
        <td></td>
        <td class="container" width="600">
            <div class="content">
                <table  class="main" width="100%" cellpadding="10" cellspacing="10">
                    <tbody><tr>
                        <td class="content-wrap aligncenter">
                            <table width="100%" cellpadding="10" cellspacing="10">
                                <tbody><tr>
                                    <td class="content-block">
                                        <h2>Your Payment Receipt</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block ">
                                        <table border="1" class="invoice table">
                                            <tbody><tr class="text-center">
                                                <td><?= $Info['3'] ?><br>Invoice #<?= $Info['0'] ?><br><?= $Info['4'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="invoice-items" cellpadding="10" cellspacing="30">
                                                        <tbody><tr>
                                                            <td><?= $Info['2'] ?></td>
                                                            <td class="alignright"><?= $Info['5'] ?></td>
                                                        </tr>
                                                       
                                                        <tr class="total">
                                                            <td class="alignright" width="80%">Total</td>
                                                            <td class="alignright"><?= $Info['6'] ?></td>
                                                        </tr>
                                                        <tr class="total">
                                                            <td class="alignright" width="80%">Payment Via</td>
                                                            <td class="alignright"><?= $Info['7'] ?></td>
                                                        </tr>
                                                        <tr class="total">
                                                            <td class="alignright" width="80%">Payment Session</td>
                                                            <td class="alignright"><?= $Info['1'] ?></td>
                                                        </tr>
                                                    </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block text-decoration-none">
                                        <a href="index.php">Back to Dashboard</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                </tbody></table>
                </div>
        </td>
        <td></td>
    </tr>
    </tbody></table>
<?php } ?>
  <?php require_once '../includes/footer.php'; ?>
  </body>
</html>