<!DOCTYPE html>
<html>
<head>
  <title>Donor HomePage</title>
  <link rel="stylesheet" type="text/css" href="src/css/NavigationBar.css">
  <link rel="stylesheet" type="text/css" href="src/css/DonorPage.css">

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
        <a href="DonorPage.php" class="current">Home</a>
        <a href="about.php">About</a>
        <a href="DonorFeedback.php">Feedback</a>
        <a href="DonorProfile.php">Profile</a>
        <a href="logout.php">Log Out</a>
    </div>
  </div>
</header>

  <section id="banner">
    <div class="container">
      <h1>Search to Donate</h1>
      <form action="searchsystem.php" method="POST">
        <input type="text" placeholder="Search..." name="searchtext">
        <button type="submit" class="button_1" name="search">Search</button>
      </form>
    </div>
  </section>

  <div class="content" align="center" style="margin-top: 80px; border: white;">
    <h1>Recent donations</h1>
     <?php
    include'show.php';
   showAllData();

    ?> 
  </div>

  <footer>   
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>
  
</body> 
</html>