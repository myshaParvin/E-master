<?php

// $name = $_POST['name'];
// $visitor_email = $_POST['email'];
// $message = $_POST['message'];


// $email_form = 'Emaster@gmail.com';

// $email_subject = "New Form Submission";

// $email_body = "User Name : $name.\n". 
//                 "User Email : $visitor_email.\n". 
//                     "User Message : $message.\n";

// $to = "myshaparvin@gmail.com";

// $headers = "From : $email_form \r\n";
// $headers .= "Reply-To : $visitor_email \r\n";

// $result = mail($to,$email_subject,$email_body,$headers);

// header("location : contact.php");


use PHPMailer\PHPMailer\PHPMailer;

require_once('phpmailer/Exception.php');
require_once('phpmailer/PHPMailer.php');
require_once('phpmailer/SMTP.php');

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $visitor_email = $_POST['email'];
        $message = $_POST['message'];

        try{
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = '2181081144@uttarauniversity.edu.bd';
            $mail->Password = 'oishEE8890';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port('587');

            $mail->setFrom('2181081144@uttarauniversity.edu.bd');
            $mail->addAddress('2181081144@uttarauniversity.edu.bd');

            $mail->isHTML('true');
            $mail->Subject = 'Message Received';
            $mail->Body ='<h3>Name : $name <br>Email : $email<br>Message : $message</h3>';

            $mail->send();
            $alert = '<div class="alert-success"><span>Your message was sent. Thank you!</span></div>';
        }catch(Exception $e){
            $alert = '<div class="alert-error"><span>'.$e->getMessage().'</span></div>';
  
        }

    }


?>