<?php 
function showAll(){
include'src/db/connection.php';
$perpage = 3;
if(isset($_GET['id'])){
    $start = $_GET['id'];
}else{
    $start = 0;
}
$count = mysqli_query($conn,"SELECT COUNT(post_id) FROM donation_post");
$rows = mysqli_fetch_array($count);
$TotalRec=$rows['COUNT(post_id)']; 
$query = "SELECT * FROM `donation_post`order by post_date asc, post_time asc LIMIT $start, $perpage";

    $result = mysqli_query($conn,$query);
     if(!$result)
    {
        die("QUERY FAILED".mysqli_error($conn));
    }
        # code...
    if ($TotalRec > 0) {
    echo "<div class='content'>";
    // output data of each row
 while($row = $result->fetch_assoc()) {
    echo "<div class='card'>";
    echo "<div class='image'>
      <a href='post.php?value_key=".$row["post_id"]."'><img src=".$row['file_path']." alt='Avatar' style='width:100%'></a>
    </div>";
    echo"<div class='title'>
      <h1>".$row['title']."</h1>
    </div>";
    echo "<div class='note'>
      <p class='bio'>".$row['bio']."</p>
    </div>";
    echo "<div class='link'>
       <a href='post.php?value_key=".$row["post_id"]."'><button id='viewbtn'>View</button></a>
        <a href='LoginForm.php'><button id='donatebtn'>Donate</button></a>
    </div>";

    echo"</div>";
    }
    echo"</div>";
}
echo "<div class='change'>";
if($start != 0){    
    echo "<a href=index.php?id=" . ($start - 3) . " id='previous'>  &laquo Previous</a>";
}
if($start < $TotalRec-3){
    echo "<a href=index.php?id=". ($start + 3) ." id='next'>Next &raquo;</a>";
    
}
echo"</div>";
}
function    showMyproject($userid){
include'src/db/connection.php';
$perpage = 3;
if(isset($_GET['id'])){
    $start = $_GET['id'];
}else{
    $start = 0;
}
$count = mysqli_query($conn,"SELECT COUNT(post_id) FROM donation_post Where donee_id='$userid'");
$rows = mysqli_fetch_array($count);
$TotalRec=$rows['COUNT(post_id)']; 
$query = "SELECT * FROM `donation_post` Where donee_id='$userid' order by post_date asc, post_time asc  LIMIT $start, $perpage";

    $result = mysqli_query($conn,$query);
     if(!$result)
    {
        die("QUERY FAILED".mysqli_error($conn));
    }
    if ($TotalRec > 0) {
    echo "<div class='content'>";
    // output data of each row
 while($row = $result->fetch_assoc()) {
    echo "<div class='card'>";
    echo "<div class='image'>
      <a href='edit.php?edit=".$row["post_id"]."'><img src=".$row['file_path']." alt='Avatar' style='width:100%'>Edit</a>
    </div>";
    echo"<div class='title'>
      <h1>".$row['title']."</h1>
    </div>";
    echo "<div class='note'>
      <p class='bio'>".$row['bio']."</p>
    </div>";
    echo "<div class='link'>
       <a href='edit.php?edit=".$row["post_id"]."'><button id='viewbtn'>Edit</button></a>
        <a href='Donordata.php?donation=".$row["post_id"]."'><button id='donatebtn'>Verify</button></a>
    </div>";

    echo"</div>";
    }
    echo"</div>";
}
echo "<div class='change'>";
if($start != 0){    
    echo "<a href=DoneePage.php?id=" . ($start - 3) . " id='previous'> &laquo  Previous</a>";
}
if($start < $TotalRec-3){
    echo "<a href=DoneePage.php?id=". ($start + 3) ." id='next'>Next &raquo;</a>";
    
}
echo"</div>";
}
function showAllData(){
include'src/db/connection.php';
session_start();
$userid=$_SESSION['userid'];
$perpage = 3;
if(isset($_GET['id'])){
    $start = $_GET['id'];
}else{
    $start = 0;
}
$count = mysqli_query($conn,"SELECT COUNT(post_id) FROM donation_post Where post_id NOT IN(SELECT post_id FROM donation Where donation.donor_id=$userid) ");
$rows = mysqli_fetch_array($count);
$TotalRec=$rows['COUNT(post_id)']; 
$query = "SELECT * FROM `donation_post` Where post_id NOT IN(SELECT post_id FROM donation Where donation.donor_id=$userid) order by post_date asc, post_time asc LIMIT $start, $perpage";

    $result = mysqli_query($conn,$query);
     if(!$result)
    {
        die("QUERY FAILED".mysqli_error($conn));
    }
    if ($TotalRec > 0) {
    echo "<div class='content'>";
    // output data of each row
 while($row = $result->fetch_assoc()) {
    echo "<div class='card'>";
    echo "<div class='image'>
      <a href='post.php?value_key=".$row["post_id"]."'><img src=".$row['file_path']." alt='Avatar' style='width:100%'></a>
    </div>";
    echo"<div class='title'>
      <h1>".$row['title']."</h1>
    </div>";
    echo "<div class='note'>
      <p class='bio'>".$row['bio']."</p>
    </div>";
    echo "<div class='link'>
       <a href='post.php?value_key=".$row["post_id"]."'><button id='viewbtn'>View</button></a>
        <a href='src/db/Donation.php?value_key=".$row["post_id"]."'><button id='donatebtn'>Donate</button></a>
    </div>";

    echo"</div>";
    }
    echo"</div>";
}
echo "<div class='change'>";
if($start != 0){    
    echo "<a href=DonorPage.php?id=" . ($start - 3) . " id='previous'> &laquo Previous</a>";
}
if($start < $TotalRec-3){
    echo "<a href=DonorPage.php?id=". ($start + 3) ." id='next'>Next &raquo;</a>";
    
}
echo"</div>";
}
?>
