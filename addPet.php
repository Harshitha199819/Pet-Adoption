<?php 

require('server.php');
require('auth.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['pname'])){
        // removes backslashes
 

 $pname = stripslashes($_REQUEST['pname']);
 $pname = mysqli_real_escape_string($con,$pname);

 
 $age = stripslashes($_REQUEST['age']);
 $age = mysqli_real_escape_string($con,$age);

 $gender = stripslashes($_REQUEST['gender']);
 $gender = mysqli_real_escape_string($con,$gender);

 $breed = stripslashes($_REQUEST['breed']);
 $breed = mysqli_real_escape_string($con,$breed);

 $Vaccinated = stripslashes($_REQUEST['Vaccinated']);
 $Vaccinated = mysqli_real_escape_string($con,$Vaccinated);

 $category = stripslashes($_REQUEST['category']);
 $category = mysqli_real_escape_string($con,$category);

 $image = $_FILES['image']['tmp_name'];  //image is name of the input type
$imgContent = addslashes(file_get_contents($image));

$query = "INSERT into `pet` (name,age,gender,category_id,breed,Vaccinated,img)
VALUES ('$pname', '$age','$gender','$category', '$breed', '$Vaccinated','$imgContent')";
        $result = mysqli_query($con,$query);
       
        if($result){
            echo "
<h3>PET ADDED SUCCESSFULLY</h3>
<a href='admin_home.php'>GO HOME</a>
";
        }
    }else{
     
echo "<h3>Unsuccessful</h3>";
}

?>

