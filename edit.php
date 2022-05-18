<!DOCTYPE html>
<html>
<head>
  <title>Donee Page</title>
  <link rel="stylesheet" type="text/css" href="src/css/NavigationBar.css">
  <link rel="stylesheet" type="text/css" href="src/css/createPost.css">
  
  <script type="text/javascript" src="src/js/doneePage.js"></script>
</head>
<body>

  <header>
  <div class="container">
      <div id="branding">
          <h1><span class="highlight">Khulla</span> Mann</h1>
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
        <a href="DoneePage.php">Home</a>
        <a href="about.php">About</a>
        <a href="UserFeedback.php">Feedback</a>
        <a href="CreatePost.php" class="current">Create Post</a>
        <a href="DoneeProfile.php">Profile</a>
        <a href="logout.php">Log Out</a>
    </div>
  </div>
</header>
   
   <br><br>
   <div class="box">
     <h1>Edit your Post</h1>
     <?php 
include'src/db/connection.php';
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($conn, "SELECT COUNT(post_id) FROM donation_post WHERE post_id=$id");
    $rows = mysqli_fetch_array($record);
   $TotalRec=$rows['COUNT(post_id)'];
    $sql="SELECT * FROM donation_post WHERE post_id=$id";
    $result = $conn->query($sql);
    if ($TotalRec == 1 ) {
      $n = mysqli_fetch_array($result);
      $title = $n['title'];
      $description = $n['description'];
      $bio=$n['bio'];
      session_start();
      $_SESSION['postid']=$id;
    ?>
        <form method="POST" onsubmit="return validatePost()" action="src/db/postUpdate.php">
          <div class="post_field" align="center" style="height: 600px;">
              <label>
                <span id="msg0"></span>
                 <input type="text" placeholder="Enter Title" name="title" id="title" onkeyup='return validatePost()' value="<?php echo $title;?>">
              </label>
               <span id='msg1'></span>
              <label>
                 <textarea rows="5" id="bio" placeholder="Write your bio here..." name="bio" onkeyup='return validatePost()'><?php echo $bio;?></textarea>
              </label>
               <span id='msg2'></span>
              <br>
              <label>
                <textarea rows="20" id="full" placeholder="Write full Description here..." name="description" onkeyup='return validatePost()'><?php echo $description;?></textarea>
              </label>
              <span id='msg3'></span>
              <input type="submit" name="submit" class="register" value="Update">
              <input type="submit" name="delete" class="register" value="Delete">
          </div>
        </form>
<?php
}
}  ?>
      </div>
      <footer>
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>
  
  <script type="text/javascript" src="src/js/doneePage.js"></script>
  
</body>
</html>