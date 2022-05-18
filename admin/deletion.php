<?php 
include '../src/db/connection.php';
if(isset($_GET['value_key'])){
  $var = $_GET['value_key'];
$sql="Delete FROM feedback where feedback_id='$var'";
$result = mysqli_query($conn,$sql);
echo"Feedback Deleted";
 header("Refresh:3; url=Feedback.php");

}
?>