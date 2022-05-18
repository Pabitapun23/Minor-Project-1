<?php 
include '../src/db/connection.php';
if(isset($_GET['value_key'])){
  $var = $_GET['value_key'];
$sql="Delete FROM doneeinfo where donee_id='$var'";
$result = mysqli_query($conn,$sql);
$sql="Delete FROM userprofile where user_id='$var'";
$result = mysqli_query($conn,$sql);
header("Location:../admin/Adminpanel.php");
}
?>