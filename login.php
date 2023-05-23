<?php 
$title = 'E-Master | Login'; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <!-- CSS -->
    <link href="assets/css/loginStyle.css" rel="stylesheet" type='text/css'>

    
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">


    <!-- Font Awesome -->
    <link href="assets/fontawesome/css/all.min.css" rel="stylesheet">


</head>
<body>



    <section class="signin">
    <div class="container">

        <br>
            <div>
            
                <a href="index.php">
            <button type="button" class="btn btn-outline-danger">Back to Home</button>
                </a>
            </div>
        <br>

    <div class="row shadow p-3 mb-5 bg-white rounded" style=" text-align: center;margin-top: 50px;border: 1px solid darkgrey;">
    <div class="img col-6">
    <figure>
    <img src="assets/img/signin.jpg" alt="Sign In Image" width="400" height="300">
    </figure>
    <a href="register.php" class="signup-link">Create an account</a>|
    <a href="#" class="signup-link">Forget Password?</a>
    </div>

    
    <div class="form col-6">
    <h2 class="form-title">Sign In</h2>



    <form method="Request" action="loginCheck.php" id="signin-form">
    <div class="form-group">
    
    <input type="text" name="id" class="form-control" id="id" placeholder="User ID">
    </div>
    <br>

    <div class="form-group">
   
    <input type="password" name="psw" class="form-control" id="password" placeholder="Password">
    </div>

<br>
    <div class="form-group form-button">
         <input type="submit" name="signin" id="signin" class="form-submit btn btn-outline-danger" value="Login">
    </div>
    
    </form>


    </div>
    </div>
    </div>
    
    
    
    </section>

   
</body>
</html>