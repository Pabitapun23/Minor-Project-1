<?php 
include 'src/db/connection.php';
if (isset($_POST['submit'])&&isset($_GET['value_key'])) {
	$password=$_POST['password'];
	$userid=$_GET['value_key'];
	$cpassword=md5($password);
	$sql="UPDATE userprofile SET `password` ='$cpassword' WHERE `user_id`='$userid'";
	$result = mysqli_query($conn,$sql);
header('Location:LoginForm.php');
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	<link rel="stylesheet" type="text/css" href="src/css/NavigationBar.css">
   <link rel="stylesheet" type="text/css" href="src/css/FormsStyle.css">
</head>
<body>
	
 <header>
  <div class="container">
      <div id="branding">
          <h1><a href="index.php"><span class="highlight">Khulla</span> Mann </a></h1>
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
      <a href="index.php" class="current">Home</a>
          <a href="about.php">About</a>
          <a href="Feedback.php">Feedback</a>
          <a href="RegisterForm.php">Become a donor</a>
          <a href="DoneeRegForm.php">Sign Up</a>
          <a href="LoginForm.php">Login</a>
    </div>
  </div>
</header>

<div class="box" align="center">
	<h1>Reset Password</h1>

	<form method="POST" >
		
		<input type="password" placeholder="Enter your Password" name="password" id="password" autocomplete="on">
		
		<br>

		
		<input type="password" placeholder="Enter your RePassword" name="Repassword" id="repassword" autocomplete="on">
		
		<br>

		<input type="submit" name="submit" class="login" value=" Change">
	</form>
</div>


<footer>
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>
</body>
</html>