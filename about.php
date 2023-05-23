<?php $title = 'E-Master | About'; ?>

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
<link href="assets/css/headerStyle.css" rel="stylesheet" type='text/css'>
<link href="assets/css/Footerstyle.css" rel="stylesheet" type='text/css'>
<link href="assets/css/aboutStyle.css" rel="stylesheet" type='text/css'>

<!-- Font Awesome -->
<link href="assets/fontawesome/css/all.min.css" rel="stylesheet">

</head>
<body>
 
<?php require_once 'includes/header.php'; ?>

<section id="about" class="about">
      
      <div class="section-title">
          <h2>About Us</h2>
        </div>

      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="ourAdmins.php" class="btn-learn-more">Learn More about Our Admins</a>
          </div>
        </div>

      </div>
    </section>

    
    <?php require_once 'includes/footer.php'; ?>

</body>
</html>
