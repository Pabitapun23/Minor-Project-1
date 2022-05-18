<!-- <?php
//session_start();
//if(!isset($_SESSION['userid']))
{
  //header("Location: index.php");
}
  ?> -->
<!DOCTYPE html>
<html>
<head>
	<title>Donor Profile</title>
	<link rel="stylesheet" type="text/css" href="src/css/NavigationBar.css">
   <link rel="stylesheet" type="text/css" href="src/css/FormsStyle.css">
  
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
        <a href="DonorProfile.php" class="current">Profile</a>
        <a href="logout.php">Log Out</a>
    </div>
  </div>
</header>

   <div class="box">
			<form method="POST" action="" >
			
				<h1 align="center">Profile</h1>
       <?php 
include'src/db/connection.php';
       session_start();
       $id=$_SESSION['userid'];
       $record = mysqli_query($conn, "SELECT COUNT(user_id) FROM userprofile WHERE user_id=$id");
    $rows = mysqli_fetch_array($record);
   $TotalRec=$rows['COUNT(user_id)'];
$sql="SELECT * FROM userprofile WHERE user_id=$id";
    $result = $conn->query($sql);
    if ($TotalRec == 1 ) {
      $n = mysqli_fetch_array($result);
      $username = $n['username'];
      $email = $n['email'];
      $password=$n['password'];
      $address=$n['address'];
      $contact_no=$n['contact_no'];
    ?>
			   <input type="text" placeholder="Enter Username" name="username" id="username" onkeyup='fieldCheck();'value="<?php echo $username;?>">		
			
         <span id='message1'></span>
			
            
   				<input type="email" placeholder="Enter Email" name="email" id="email" onkeyup='fieldCheck();'value="<?php echo $email;?>">
        
   			 <span id='message2'></span>

        
   				<input type="password" placeholder="Enter Password" name="password" id="password" onkeyup='fieldCheck();'value="<?php echo $password;?>">
   			
         <span id='message3'></span>
    			
        
   			  <input type="password" placeholder="Enter Re-Password" name="repassword" id="repassword" onkeyup='check();' onkeyup='fieldCheck();'value="<?php echo $password;?>">
        
   				<span id='message'></span>

   			
   				 <input type="text" placeholder="Enter Address" name="address" id="address" onkeyup='fieldCheck();'value="<?php echo $address;?>">
        
   				<span id='message4'></span>

        
   				 <input type="tel" placeholder="Enter Contact No." name="contact" id="contact" onkeyup='fieldCheck();'value="<?php echo $contact_no;?>">
        
   				<span id='message5'></span>

   				 <div align="center">
   					 <input type="submit" name="submit" class="register" value="register" id="register">
   					</div>

			</form>
      <?php
}  ?>
		 </div>

     <footer>
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>
     <script type="text/javascript">
      var loadFile = function(event) {
      var image = document.getElementById('image');
      image.src = URL.createObjectURL(event.target.files[0]);
    };
     </script>
</body>
</html>