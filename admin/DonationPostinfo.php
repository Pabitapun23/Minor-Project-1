<?php
include '../src/db/connection.php';
$perpage = 6;

if(isset($_GET['id'])){
	$start = $_GET['id'];
}else{
	$start = 0;
}
 
$count= mysqli_query($conn,"SELECT COUNT(post_id) FROM userprofile,donation_post Where role='Donee' AND userprofile.user_id=donation_post.donee_id AND donation_post.flag='1'");
$rows = mysqli_fetch_array($count);
$TotalRec=$rows['COUNT(post_id)'];
$sql = "SELECT  userprofile.user_id, userprofile.username, donation_post.title,donation_post.bio,donation_post.description,donation_post.file_path,donation_post.post_id FROM userprofile,donation_post Where role='Donee' AND userprofile.user_id=donation_post.donee_id AND donation_post.flag='1' order by donation_post.post_date asc,donation_post.post_time asc  LIMIT $start, $perpage";
$result = mysqli_query($conn,$sql);
if ($TotalRec > 0) {
	echo "<div class='content'>";
	while($row = $result->fetch_assoc()) {
    echo "<div class='card'>";
    echo "<div class='image'>
      <a href='post.php?value_key=".$row["post_id"]."'><img src=../".$row['file_path']." alt='Avatar' style='width:100%'></a>
    </div>";
    echo"<div class='title'>
      <h1>".$row['title']."</h1>
    </div>";
    echo "<div class='note'>
      <p class='bio'>".$row['bio']."</p>
    </div>";
    echo "<div class='link'>
      <a href='userdata.php?value_key=".$row["user_id"]."'><button id='viewbtn'>".$row['username']."</button></a>
    </div>";
    echo"</div>";
    }
    echo"</div>";
echo "<div class='change'>";
if($start != 0){    
    echo "<a href=DonationPost.php?id=" . ($start - 3) . " id='previous'> &laquo Previous</a>";
}
if($start < $TotalRec-3){
    echo "<a href=DonationPost.php?id=". ($start + 3) ." id='next'>Next &raquo;</a>";
    
}
echo"</div>";
}
else{
	echo"0 result";
}
	

  ?>
