<!-- <?php
//session_start();
//if(isset(!$_SESSION['userid']))
{
  //header("Location: index.php");
}
  ?> -->
<!DOCTYPE html>
<html>
<head>
  <title>Create New Post</title>
  <link rel="stylesheet" type="text/css" href="src/css/NavigationBar.css">
  <link rel="stylesheet" type="text/css" href="src/css/createPost.css">
  
  <script type="text/javascript" src="src/js/doneePage.js"></script>
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
        <a href="DoneePage.php">Home</a>
        <a href="about.php">About</a>
        <a href="DoneeFeedback.php">Feedback</a>
        <a href="CreatePost.php" class="current">Create Post</a>
        <a href="DoneeProfile.php">Profile</a>
        <a href="logout.php">Log Out</a>
    </div>
  </div>
</header>
   
   <br><br>
   <div class="box">
    
     <h1>Write your Post</h1>

        <form method="POST" onsubmit="return validatePost()" action="src/db/postUpload.php"  enctype="multipart/form-data">

          <div class="post_field" align="center" style="height: 600px;">
            
              <input type="file" name="image" accept="image/*" id="file" onchange="loadFile(event)" onkeyup='return validatePost()'>
            
              <div id="upload">
                <img id="image2">
              </div>
              <label>
                <span id="msg0"></span>
                
                 <input type="text" placeholder="Enter Title" name="title" id="title" onkeyup='return validatePost()'>
               
              </label>
               <span id='msg1'></span>

              <label>
                
                 <textarea rows="5" id="bio" placeholder="Write your bio here..." name="bio" onkeyup='return validatePost()'></textarea>
               
              </label>
               <span id='msg2'></span>
              <br>

              <label>
                
                <textarea rows="20" id="full" placeholder="Write full Description here..." name="description" onkeyup='return validatePost()'></textarea>
              
              </label>
              <span id='msg3'></span>

              <input type="submit" name="submit" class="register" value="Post">
          </div>
        </form>
      </div>

      <footer>
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>
  
  <script type="text/javascript" src="src/js/doneePage.js"></script>
  
</body>
</html>