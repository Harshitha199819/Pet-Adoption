<?php
require('server.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['email_id'])){
        // removes backslashes
 $email_id = stripslashes($_REQUEST['email_id']);
        //escapes special characters in a string
 $email_id= mysqli_real_escape_string($con,$email_id);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
if($email_id=="admin@gmail.com" && $password="harshkri"){
  header("Location: admin_home.php");
  $_SESSION['email_id'] = $email_id;
}
    $query = "SELECT * FROM `user` WHERE email_id='$email_id'
and password='$password'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['email_id'] = $email_id;
            // Redirect user to index.php
     header("Location: loggedin.php");
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
 }
    }else{}
?>
