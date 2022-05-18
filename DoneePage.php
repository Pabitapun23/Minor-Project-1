<!DOCTYPE html>
<html>
<head>
    <title>Donee HomePage</title>
    <link rel="stylesheet" type="text/css" href="src/css/NavigationBar.css">
     <link rel="stylesheet" type="text/css" href="src/css/DoneePage.css">
     
</head>
<body>

 <header>
  <div class="container">
      <div id="branding">
         <h1><a href="DoneePage.php"><span class="highlight">Khulla</span> Mann </a></h1>
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
        <a href="DoneePage.php" class="current">Home</a>
        <a href="about.php">About</a>
        <a href="DoneeFeedback.php">Feedback</a>
        <a href="CreatePost.php">Create Post</a>
        <a href="DoneeProfile.php">Profile</a>
        <a href="logout.php">Log Out</a>
    </div>
  </div>
</header>

  <!-- <div class="container"> -->
    <h3 align="center" style="padding: 20px; font-size: 25px; font-family: sans-serif; "><u>Previous Projects</u></h3>

<?php
   include'show.php';
   session_start();
   showMyproject($_SESSION['userid']); 

?>

  <div class="post" align="center">
    <h1>NEED DONATION?</h1>
    <button class="button_1"><a href="CreatePost.php">Create New Post</a></button>
  </div>


  <footer>
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>

</body>
</html>
