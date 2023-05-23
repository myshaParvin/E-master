<html>
     <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Password Change</title>
     </head>
    <body>
        <div class="container">
    <h1>Change Password</h1>

    <p>
    <a href="../index.php">Home</a>&nbsp;&nbsp;
   <a href="../logout.php">Logout</a>&nbsp;&nbsp;
   <a href="index.php">Back to Dashboard</a>&nbsp;&nbsp;
</p>
<br>
   <form method="POST" action="changePassAction.php">
    <table>
    <tr>
   <td>Enter your User ID</td>
    <td><input type="text" size="10" name="user_id"></td>
    </tr>
    <tr>
    <td>Enter your current password:</td>
    <td><input type="password" size="10" name="password"></td>
    </tr>
  <tr>
    <td>Enter your new password:</td>
    <td><input type="password" size="10" name="newpassword"></td>
    </tr>
    <tr>
   <td>Re-enter your new password:</td>
   <td><input type="password" size="10" name="confirmnewpassword"></td>
    </tr>
    </table>
    <p><input type="submit" value="Update Password">
    </form>
   

</div>
   </body>
    </html>  