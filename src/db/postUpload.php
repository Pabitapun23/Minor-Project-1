<?php
include 'connection.php';
session_start();
$target_dir =$_SERVER['DOCUMENT_ROOT']."/khullamann/upload/images/post/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$upload="upload/images/post/". basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST['submit']))
{
	$check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    } 
    $title = $_POST['title']; 
    $bio = $_POST['bio'];
    $description = $_POST['description'];
    $today = date("Y/m/d");
    $time=date("h:m:s");
    if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] >2000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 

   {
        echo "Sorry, there was an error uploading your file.";
    }
}
$doneeid=$_SESSION['userid'];
$sql = "INSERT INTO `donation_post` (file_path, title, bio, description, post_date, post_time, donee_id, flag) VALUES ('$upload', '$title', '$bio', '$description', '$today', '$time','$doneeid', '1')";
 $result = mysqli_query($conn,$sql);
  header("Location: ../../DoneePage.php");
}
?>