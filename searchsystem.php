<!DOCTYPE html>
<html>
<head>
    <title>Search result</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" type="text/css" href="src/css/NavigationBar.css">
  <link rel="stylesheet" type="text/css" href="src/css/indexpage.css">
</head>
<body>

</body>
</html>
<?php
session_start();
include'src/db/connection.php';
if(isset($_POST['search'])){
    $search = $_POST['searchtext'];
    $search = mysqli_real_escape_string($conn,$search);
    $count= mysqli_query($conn,"SELECT count(post_id) as total FROM donation_post WHERE title LIKE '%{$search}%'");
$rows = mysqli_fetch_array($count);
$count=$rows['total'];
$sql = "SELECT * FROM donation_post WHERE title LIKE '%{$search}%'order by post_date asc, post_time";
$result = mysqli_query($conn,$sql);
    if($count <= 0){
            echo "search not found.";
            exit();
        }
        else
        { echo "<div class='content'>";
            while($row = mysqli_fetch_assoc($result))
            {
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
       <a href='post.php?value_key=".$row["post_id"]."'><button id='viewbtn'>View</button></a>";
        if(isset($_SESSION['userid']))
        {
        echo"<a href='src/db/Donation.php?value_key=".$row["post_id"]."'><button id='donatebtn'>Donate</button></a>";
      }
      else
      {
       echo "<a href='LoginForm.php'><button id='donatebtn'>Donate</button></a>"; 
      }
    echo"</div>";

    echo"</div>";
            }
            echo"</div>";
        }
}
else{
    header("Location:SS.php?search=failure");
}
?>
