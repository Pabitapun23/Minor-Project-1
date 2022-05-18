<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard
	</title>
	<link rel="stylesheet" type="text/css" href="../src/css/NavigationBar.css">
	<style type="text/css">
		body{
		  font-family: Arial, Helvetica, sans-serif;
		  font-size: 15px;
		  line-height: 1.5;
		  padding: 0;
		  margin: 0;
		  text-align: center;
		}

		.box{
			background-color:#E0E0E0;
			width : 450px;
			height: 450px;
			margin: 20px auto;
			padding: 20px 50px; 
			text-align: justify;
		}

		.box h1{
			color: #1889B5;
			text-decoration: underline;
		}

		.box a{
			text-decoration: none;
			color: #07558F;
		}

		label{
			color: #07558F;
			font-size: 32px;
		}
	</style>
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
    	<a href="AdminPanel.php" class="current">Admin Panel</a>
      	<a href="Donorinfo.php">Donor</a>
        <a href="Doneeinfo.php">Donee</a>
        <a href="DonationPost.php">Total Donation Post</a>
        <a href="DoneeVerifying.php">To be Verify</a>
        <a href="Feedback.php">Feedback</a>
        <a href="../Logout.php">Logout</a>
    </div>
  </div>
</header>


	 <?php include "admin.php"; ?>

	 <div class="box">

	  	<h1 align="center">STATISTICS</h1>
	  	<br><br>

	  	<label>
	  		<a href="Donorinfo.php" value="Donors">Donor : </a><?php echo $Donor ?>
	  	</label>
		<br><br>

		<label>
			<a href="Doneeinfo.php" value="Donees">Donee : </a><?php echo $Donee?>
		</label>
		<br><br>

		<label>
			<a href="DonationPost.php" value="Donation Post">Total Donation Post : </a><?php echo $Donation ?>
		</label>
		<br><br>

		<label>
			<a href="DoneeVerifying.php" value="Verifying"> To Be Verify : </a><?php echo $Verification?>
		</label>
		<br><br>
		<label>
			<a href="Feedback.php" value="Feedback"> Feedback : </a><?php echo $Feedback?>
		</label>

	</div>

	<footer>
		<p>Khulla Mann, Copyright &copy; 2019</p>
	</footer>
</body>
</html>