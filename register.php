<?php
require_once('db/dbConnect.php');
$title = 'E-Master | Register';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Files -->
    <!-- <link href="assets/css/Footerstyle.css" rel="stylesheet" type='text/css'> -->
    <link href="assets/css/registerStyle.css" rel="stylesheet" type='text/css'>

    <!-- Font Awesome -->
    <link href="assets/fontawesome/css/all.min.css" rel="stylesheet">


</head>
<body>

    <section class="signup">
    <div class="container">

    <br>
            <div>
            
                <a href="index.php">
            <button type="button" class="btn btn-outline-danger">Back to Home</button>
                </a>
            </div>
  

    <div class="signup-content row shadow p-3 mb-5 bg-white rounded">

    <div class="signup-form col-5">
        <h2 class="form-title">Sign Up</h2>

    
<?php if (isset($_SESSION['message'])): ?>
	<div class="alert">
		<?php 
			echo "<b class='text-info'>".$_SESSION['message']."</b>"; 
			// unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

      <form method="POST" action="regAction.php" id="signup-form">

    <div class="form-group">
        <label for="firstname">
        <i class="fas fa-user"></i>
        </label>
        <input type="text" name="firstname" id="firstname" placeholder="First Name" required>
    </div>
    <br>

    <div class="form-group">
        <label for="lastname">
        <i class="fas fa-user"></i>
        </label>
        <input type="text" name="lastname" id="lastname" placeholder="Last Name" required>
    </div>
    <br>

    <div class="form-group">
    <label for="email">
    <i class="fas fa-at"></i>
    </label>
    <input type="email" name="email" id="email" placeholder="Your Email" required>
    </div>
    <br>

    <div class="form-group">
        <label for="dob">
        <i class="fas fa-birthday-cake"></i>
        </label>
        <input type="date" min="1930-01-01" max="2010-12-31" name="dob" id="dob" required>
    </div>
    <br>

    <div class="form-group">
      <input type="radio" id="male" name="gender" value="Male" required>
      <label for="male">Male</label>
      <input type="radio" id="female" name="gender" value="Female" required>
      <label for="female">Female</label><br>
    </div>
    <br>

    <div class="form-group">
      <input type="radio" id="Admin" name="role" value="Admin" required>
      <label for="Admin">Admin</label>
      <input type="radio" id="Teacher" name="role" value="Teacher" required>
      <label for="Teacher">Teacher</label>
      <input type="radio" id="Student" name="role" value="Student" required>
      <label for="Student">Student</label><br>
    </div>
    <br>

    <div class="form-group">
        <label for="mobile">
        <i class="fas fa-phone-alt"></i>
        </label>
        <input type="number" name="mobile" id="mobile" placeholder="Mobile No." required>
    </div>
    <br>

    <div class="form-group">
    <label for="password">
    <i class="fas fa-key"></i>
    </label>
    <input type="password" name="password" id="password" placeholder="Password" required>
    </div>
    <br>


    <div class="form-group form-button">
         <input type="submit" name="signup" class="form-submit btn btn-outline-success mt-4" value="Sign Up">
    </div>
   
    </form>
  </div>

    <div class="signup-img col-7">
    <figure>
    <img src="assets/img/register.gif" alt="Sign Up Image" width="570" height="500">
    </figure>
    <a href="login.php" class="signup-link">Already have an account?</a>
    </div>

    </div>
    </div>
  
    </section>
    <?php session_end(); ?>
</body>
</html>