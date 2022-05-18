<?php
include '../src/db/connection.php';
$Donor=0;
$Donation=0;
$Donee=0;

//count Donor
$sql = "SELECT count(*) as total from userprofile WHERE role ='donor' and flag='1'";
$result = $conn->query($sql);
$data=mysqli_fetch_assoc($result);
$Donor= $data['total'];

//count Donee
$sql = "SELECT count(*) as total from userprofile WHERE role ='donee' and flag='1'";
$result = $conn->query($sql);
$data= mysqli_fetch_assoc($result);
$Donee = $data['total'];

//count Donation Post
$sql = "SELECT count(*) as total from donation_post";
$result = $conn->query($sql);
$data=mysqli_fetch_assoc($result);
$Donation = $data['total'];

$sql = "SELECT count(*) as total from userprofile WHERE role ='donee' and flag='0'";
$result = $conn->query($sql);
$data=mysqli_fetch_assoc($result);
$Verification= $data['total'];

$sql = "SELECT count(*) as total from Feedback WHERE flag='1'";
$result = $conn->query($sql);
$data=mysqli_fetch_assoc($result);
$Feedback= $data['total'];
$conn->close();
?>
