<?php 
include 'src/db/connection.php';
if(isset($_GET['value_key'])){
  $var = $_GET['value_key'];
  $var2= $_GET['post'];
  echo $var; //some_value
$sql = "UPDATE `donation` SET `Gotit`='1' where donor_id = '{$var}' and post_id='{$var2}'";
$result = mysqli_query($conn,$sql);
}
 header("Location:DoneePage.php");
?>
