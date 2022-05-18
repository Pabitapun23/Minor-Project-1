<?php
include 'connection.php';
if($conn->connect_error)
{
    die("connection failed because ".$conn->connect_error;
} /*else{
    echo "connection succeed";
}*/

//displaying datas
$bio = $_GET['bio'];
$description = $_GET['description']; 
        
$sql = "SELECT bio, description FROM donation_post";
$data = $conn->query($sql);
    
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "bio: " . $row["$bio"]. " - description " . $row["$description"]. "<br>";
    }
} else {
    echo "0 results";
}
?>