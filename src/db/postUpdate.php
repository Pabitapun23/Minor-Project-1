<?php
include 'connection.php';
session_start();
if(isset($_POST['submit']))
{
	
$doneeid=$_SESSION['userid'];
$title = $_POST['title']; 
    $bio = $_POST['bio'];
    $description = $_POST['description'];
$sql = "UPDATE `donation_post` SET `title`='$title',`bio`='$bio',`description`='$description' WHERE `donee_id`='$doneeid'";
 $result = mysqli_query($conn,$sql);
  header("Location: ../../DoneePage.php");
}
else if (isset($_POST['delete'])) {
	echo "Hi";
$doneeid=$_SESSION['userid'];
$sql = "DELETE FROM donation_post WHERE `donee_id`='$doneeid'";
 $result = mysqli_query($conn,$sql);
 header("Location: ../../DoneePage.php");
}
?>