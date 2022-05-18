<?php 
include '../src/db/connection.php';
if(isset($_GET['value_key'])){
  $var = $_GET['value_key']; //some_value
$sql = "Update userprofile set flag = '1' where user_id = '{$var}'";
$result = mysqli_query($conn,$sql);
}
header("Location:../admin/adminpanel.php");
?>
