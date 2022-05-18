<?php
include'src/db/connection.php';
session_start();
$postid = $_GET['value_key'];
$query = "SELECT * FROM `donation_post` where post_id=$postid";
$result = mysqli_query($conn,$query);
     if(!$result)
    {
        die("QUERY FAILED".mysqli_error($conn));
    }
    $row = $result->fetch_assoc();
  ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="src/css/NavigationBar.css">
  <link rel="stylesheet" type="text/css" href="src/css/PostStyle.css">

</head>
<body>

  <header>
  <div class="container">
      <div id="branding">
        <h1><a href="DonorPage.php"><span class="highlight">Khulla</span> Mann </a></h1>
      </div>

    <div class="togglearea">
      <label for="toggle">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>
    
    <input type="checkbox" id="toggle">
    <div class="navbar">
        <a href="DonorPage.php">Home</a>
        <a href="about.php">About</a>
        <a href="DonorFeedback.php">Feedback</a>
        <a href="DonorProfile.php">Profile</a>
        <a href="logout.php">Log Out</a>
    </div>
  </div>
</header>


 <div class="post-container" align="center">
  <img src="src/css/img3.jpeg" class="post-image">
  <h1 class="post-title"><?php echo $row['title']; ?></h1>
  <p class="post-content" align="justify"><?php echo $row['description']; ?></p>
  <!-- <button class="donatebtn"> -->
    <?php
    if(isset($_SESSION['userid']))
        {
        echo"<a href='src/db/Donation.php?value_key=".$row["post_id"]."'><button id='donatebtn'>Donate</button></a>";
      }
      else
      {
       echo "<a href='LoginForm.php'><button id='donatebtn'>Donate</button></a>"; 
      }
      ?>
    <!-- </button> -->
</div> 
<footer>
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>
</body>
</html> 
