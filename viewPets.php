<?php 
include('server.php'); 
$query = "SELECT pet_id,name,age,gender,breed,img FROM pet";
if ($result = $con->query($query)) {
   echo "<center><table border=1px solid black;>";
   echo "<tr><th>PET ID</th><th>NAME</th><th>AGE</th><th>GENDER</th><th>BREED</th><th>IMAGE</th></tr>";
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["pet_id"];
        $field2name = $row["name"];
        $field3name = $row["age"];
        $field4name = $row["gender"];
        $field5name = $row["breed"];
 echo "<tr><td>".$field1name."</td><td>".$field2name."</td><td>".$field3name."</td><td>".$field4name."</td><td>".$field5name."</td>";
        echo '<td><img  alt="Pet picture" src="data:image/png;base64,'.base64_encode($row['img']).'"></td></tr>';
}
    echo "</table></center><br>";
 }
$result->free();
?>
