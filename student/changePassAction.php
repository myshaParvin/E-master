<?php
session_start();
include("../db/dbConnect.php");

        $user_id = $_POST['user_id'];
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
        $result = mysqli_query($dbConnect,"SELECT password FROM `register` WHERE user_id='$user_id'");
        if(!$result)
        {
        echo "The user id you entered does not exist";
        }
        else
        {
        
        if($newpassword==$confirmnewpassword)
        $sql=mysqli_query($dbConnect,"UPDATE register SET password='$newpassword' where user_id='$user_id'");
        if($sql)
        {
        echo "<strong>Congratulations! You have successfully changed your password<strong>";
        echo "<div>Now Login with new password.</div>";
        echo "<p><a href='../login.php'>Click here to login</a></p>";
        }
       else
        {
       echo "Passwords do not match";
       }
    }
      ?>