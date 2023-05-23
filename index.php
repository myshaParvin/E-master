<?php $title = 'E-Master | Home'; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="assets/css/headerStyle.css" rel="stylesheet" type='text/css'>
    <link href="assets/css/Footerstyle.css" rel="stylesheet" type='text/css'>
    <link href="assets/css/homeStyle.css" rel="stylesheet" type='text/css'>

    <!-- Font Awesome -->
    <link href="assets/fontawesome/css/all.min.css" rel="stylesheet">



    <title><?php echo $title; ?></title>
  </head>
  <body>
   <?php require_once 'includes/header.php'; ?>

 <!-- Banner Part -->
 <div class="banner">
            <div class="container">
              <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-12">
                        <div class="bannerText">
                            <h1>Online Learning<br> Platform</h1>
                            <p>Build skills with courses, certificates, and degrees online from world-class universities and companies</p>
                            <a href="register.php" class="btn btn-outline-danger">Join for Free</a>
                        </div>
                    </div>
            
                    <div class="col-xl-6 col-lg-7 col-md-12">
                        <img src="assets/img/homeImage.png" alt="Side banner image" width="600px" height="550px">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Card Part -->
    <section id='card'>
        <div class="container">
            <div class="row">
            
            <div class="col-12 col-sm-6 col-lg-3">
            <div class="single-card-area text-center mb-100 wow fadeInUp">
            <div class="icon">
                <i class="far fa-check-circle fa-4x"></i>
            </div>
            <h2><span class="counter">1912</span></h2>
            <h5>Success Stories</h5>
            </div>
            </div>
            
            <div class="col-12 col-sm-6 col-lg-3">
            <div class="single-card-area text-center mb-100 wow fadeInUp">
            <div class="icon">
                <i class="fas fa-chalkboard-teacher fa-4x"></i>
            </div>
            <h2><span class="counter">123</span></h2>
            <h5>Dedicated Tutors</h5>
            </div>
            </div>
            
            <div class="col-12 col-sm-6 col-lg-3">
            <div class="single-card-area text-center mb-100 wow fadeInUp">
            <div class="icon">
                <i class="far fa-calendar fa-4x"></i>
           </div>
            <h2><span class="counter">89</span></h2>
            <h5>Scheduled Events</h5>
            </div>
            </div>
            
            <div class="col-12 col-sm-6 col-lg-3">
            <div class="single-card-area text-center mb-100 wow fadeInUp">
            <div class="icon">
                <i class="fas fa-book-open fa-4x"></i>
            </div>
            <h2><span class="counter">56</span></h2>
            <h5>Available Courses</h5>
            </div>
            </div>
            </div>
            </div>

    </section>

    <!-- Courses Part -->
    <section id="course">
        <div class="container">
            <div class="row">
            <div class="col-12">
            <div class="section-heading">
            <h3>Our Offered Courses</h3>
            </div>
            </div>
            </div>
            <div class="row">
            
            <div class="col-12 col-md-6 col-lg-4">
            <div class="single-course mb-100">
            <img src="assets/img/grammer.jpg" alt="" width="350px" height="180px">
            
            <div class="course-content">
            <h4>English Grammar</h4>
            <div class="meta d-flex align-items-center">
            <a href="#">Mysha Parvin</a>
            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
            <a href="#">Art &amp; Design</a>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
            </div>
            
            <div class="seat-rating-fee d-flex justify-content-between">
            <div class="seat-rating h-100 d-flex align-items-center">
            <div class="seat">
            <i class="fa fa-user" aria-hidden="true"></i> 10
            </div>
            <div class="rating">
            <i class="fa fa-star" aria-hidden="true"></i> 4.5
            </div>
            </div>
            <div class="course-fee h-100">
            <a href="#" class="free">Free</a>
            </div>
            </div>
            </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4">
            <div class="single-course mb-100 wow fadeInUp" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
            <img src="assets/img/vocabulary.jpg" alt="" width="350px" height="180px">
            
            <div class="course-content">
            <h4>Vocabulary</h4>
            <div class="meta d-flex align-items-center">
            <a href="#">Syed Mizan</a>
            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
            <a href="#">Art &amp; Design</a>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
            </div>
            
            <div class="seat-rating-fee d-flex justify-content-between">
            <div class="seat-rating h-100 d-flex align-items-center">
            <div class="seat">
            <i class="fa fa-user" aria-hidden="true"></i> 10
            </div>
            <div class="rating">
            <i class="fa fa-star" aria-hidden="true"></i> 4.5
            </div>
            </div>
            <div class="course-fee h-100">
            <a href="#">Free</a>
            </div>
            </div>
            </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4">
            <div class="single-course mb-100 wow fadeInUp" data-wow-delay="750ms" style="visibility: visible; animation-delay: 750ms; animation-name: fadeInUp;">
            <img src="assets/img/writing.jpg" alt="" width="350px" height="180px">
            
            <div class="course-content">
            <h4>Expository writing</h4>
            <div class="meta d-flex align-items-center">
            <a href="#">Mahmuda Marufa</a>
            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
            <a href="#">Art &amp; Design</a>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
            </div>
            
            <div class="seat-rating-fee d-flex justify-content-between">
            <div class="seat-rating h-100 d-flex align-items-center">
            <div class="seat">
            <i class="fa fa-user" aria-hidden="true"></i> 10
            </div>
            <div class="rating">
            <i class="fa fa-star" aria-hidden="true"></i> 4.5
            </div>
            </div>
            <div class="course-fee h-100">
            <a href="#">Free</a>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
    </section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <?php require_once 'includes/footer.php'; ?>
  </body>
</html>