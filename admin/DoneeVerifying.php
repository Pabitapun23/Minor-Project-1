<!DOCTYPE html>
<html>
    <head>
        
        <title>Donee Verification</title>
        <link rel="stylesheet" type="text/css" href="../src/css/NavigationBar.css">
    </head>
    <body>

    	<header>
  <div class="container">
      <div id="branding">
          <h1><a href="AdminPanel.php"><span class="highlight">Khulla</span> Mann </a></h1>
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
    	<a href="AdminPanel.php">Admin Panel</a>
      	<a href="Donorinfo.php">Donor</a>
        <a href="Doneeinfo.php">Donee</a>
        <a href="DonationPost.php">Total Donation Post</a>
        <a href="DoneeVerifying.php" class="current">To be Verify</a>
        <a href="Feedback.php">Feedback</a>
        <a href="../Logout.php">Logout</a>
    </div>
  </div>
</header>

	<?php include "DoneeVerification.php"; ?>
	
	</body>
</html>
