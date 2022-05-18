<!-- <?php
//session_start();
//if($_SESSION['userid']==0)
{
  //header("Location: index.php");
}
  ?> -->
<!DOCTYPE html>
<html>
<head>
	<title>Donee Profile</title>
  <link rel="stylesheet" type="text/css" href="src/css/NavigationBar.css">
   <link rel="stylesheet" type="text/css" href="src/css/FormsStyle.css">
  <script type="text/javascript" src="src/js/doneeProfile.js"></script>
  

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
        <a href="CreatePost.php">Create Post</a>
        <a href="DoneeProfile.php" class="current">Profile</a>
        <a href="logout.php">Log Out</a>
    </div>
  </div>
</header>

    <div class="box">
			<form method="POST" onsubmit="return validateProfile()" action="" >
			
				<h1 align="center">Profile</h1>
			
      
				<div class="image_container">
			        <div id="upload">
			            <img id="image" align="center" style="max-width: 50%;">
			        </div>
			        <input type="file" name="image" accept="image/*" id="file" onchange="loadFile(event)">
       			 </div>
       

       
			    <input type="text" placeholder="Enter Username" name="username" id="username" onkeyup='return validateProfile()'>	
       

				<span id='message1'></span><br>

			  
   				<input type="email" placeholder="Enter Email" name="email" id="email" onkeyup='return validateProfile()'>
        
   				<span id='message2'></span><br>

    		
   				<input type="password" placeholder="Enter Password" name="password" id="password" onkeyup='return validateProfile()'>
        
   				<span id='message3'></span><br>
    			
        
   				 <input type="password" placeholder="Re-Enter Password" name="repassword" id="repassword" onkeyup='check();' onkeyup='return validateProfile()'>
        
   				<span id='message'></span><br>

   			
   				 <input type="text" placeholder="Enter Address" name="address" id="address" onkeyup='return validateProfile()'>
        
   				<span id='message4'></span><br>
   				 
        
   				 <input type="tel" placeholder="Enter Contact No." name="contact" id="contact" onkeyup='return validateProfile()'>
       
   				<span id='message5'></span><br>

        
            <input type="tel" placeholder="Enter Account No." name="account" id="account" onkeyup='return validateProfile()'>
      
          <span id='message6'></span><br>

   				 <div align="center">
   					 <input type="submit" name="submit" class="register" value="Save changes">
   					</div>
			</form>
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
</htmls