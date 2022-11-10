&lt;?php
require(&#39;server.php&#39;);
$email_id=$_SESSION[&#39;email_id&#39;];
$pet_id = stripslashes($_REQUEST[&#39;petid&#39;]);
$pet_id = mysqli_real_escape_string($con,$pet_id);
$query = &quot;INSERT INTO `adopted` (pet_id,email_id) VALUES (&#39;$pet_id&#39;,
&#39;$email_id&#39;)&quot;;
$result = mysqli_query($con,$query);
if($result){
echo &quot;&lt;h2&gt;ADOPTION SUCCESSFUL&lt;/h2&gt;&lt;a href=&#39;loggedin.php&#39;&gt;GO
HOME&lt;/a&gt;&quot;;
}
else{
echo &quot;UNSUCCESSFUL&quot;;
}
?&gt;
