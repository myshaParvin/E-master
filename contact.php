<?php $title = 'E-Master | Contact'; 
include('contactFormHandler.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> </title>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="assets/css/headerStyle.css" rel="stylesheet" type='text/css'>
    <link href="assets/css/Footerstyle.css" rel="stylesheet" type='text/css'>
    <link href="assets/css/contactStyle.css" rel="stylesheet" type='text/css'>

    <!-- Font Awesome -->
    <link href="assets/fontawesome/css/all.min.css" rel="stylesheet">

</head>
<body>
 
<?php require_once 'includes/header.php'; ?>

<section id="contact">

    <div class="section-title">
          <h2>Contact Us</h2>
    </div>
    
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mr-auto">
                    
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quaerat autem corrupti asperiores accusantium et fuga! Facere excepturi, quo eos, nobis doloremque dolor labore expedita illum iusto, aut repellat fuga!</p>
                        <ul class="list-unstyled pl-md-5 mb-5">
                            <li class="d-flex text-black mb-2">
                                <span class="mr-3"><span class="icon-map"></span></span> 34 Street Name, City Name Here, <br> United States
                            </li>
                            <li class="d-flex text-black mb-2"><span class="mr-3"><span class="icon-phone"></span></span> +1 (222) 345 6789</li>
                            <li class="d-flex text-black"><span class="mr-3"><span class="icon-envelope-o"></span></span> info@mywebsite.com </li>
                        </ul>
                </div>
            <div class="col-md-6">

            <form class="mb-5" method="post" action="" id="contactForm" name="contactForm" novalidate="novalidate">
            <div class="row">
            <div class="col-md-12 form-group">
            <label for="name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name">
            </div>
            </div>
            <div class="row">
            <div class="col-md-12 form-group">
            <label for="email" class="col-form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email">
            </div>
            </div>
            <div class="row">
            <div class="col-md-12 form-group">
            <label for="message" class="col-form-label">Message</label>
            <textarea class="form-control" name="message" id="message" cols="30" rows="7"></textarea>
            </div>
            </div>
            <div class="row">
            <div class="col-md-12">
            <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
            <span class="submitting"></span>
            </div>
            </div>
            </form>
            
          
            <?php
            echo $alert;
            // if ($result){
            //     echo "<div id='form-message-success'>Your message was sent. Thank you!</div>";
            //     }else{
            //     echo "<div id='form-message-warning mt-4'>Failed!</div>";
            //     }
            ?>
            
            </div>
        </div>

        </div>
        
    </div>

</section>
<script type="text/javascript">
    if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
    }
</script>    

<?php require_once 'includes/footer.php'; ?>
</body>