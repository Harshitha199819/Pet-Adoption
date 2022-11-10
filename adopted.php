<?php

require('server.php');
  $email_id=$_SESSION['email_id'];
      
 $pet_id = stripslashes($_REQUEST['petid']);
 $pet_id = mysqli_real_escape_string($con,$pet_id);
 
        $query = "INSERT INTO `adopted` (pet_id,email_id) VALUES ('$pet_id', '$email_id')";
        $result = mysqli_query($con,$query);
       
        if($result){
            echo "<h2>ADOPTION SUCCESSFUL</h2><a href='loggedin.php'>GO HOME</a>";
        } 
    else{ 
		echo "UNSUCCESSFUL";
	}
?>
