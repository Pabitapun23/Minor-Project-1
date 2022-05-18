 <?php
session_start();
if(isset($_SESSION['userid']))
{
 if($_SESSION['role']=='donor')
 {
    header("Location:DonorPage.php");
 }
 elseif ($_SESSION['role']=='donee')
  {
   header("Location:DoneePage.php"); 
 }
else
{
  header("Location:admin/adminpanel.php"); 
 }
}
?>
  <!DOCTYPE html>
  <html>
  <head>
    <title>Forgot Passwoord</title>
    <link rel="stylesheet" type="text/css" href="src/css/NavigationBar.css">
   <link rel="stylesheet" type="text/css" href="src/css/FormsStyle.css">
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
      <h1>Reset your password</h1>
      <br>
      <!-- <p>Now we send an email where you can find instructions to reset your password</p> -->

      <form action="src/db/requestpassword.php" method="POST">
        
          <input type="email" name="email" placeholder="Enter email" value="" id="email" autocomplete="on">
        
        <br><br>

          <input type="submit" name="submit" class="reset-password" value="Reset Password">
      </form>

  </div>


<footer>
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>
  </body>
  </html>
  	

