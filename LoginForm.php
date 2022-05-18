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
    <title>Khulla Mann | Login Form</title>
    
 <link rel="stylesheet" type="text/css" href="src/css/NavigationBar.css">
  <link rel="stylesheet" type="text/css" href="src/css/FormsStyle.css">

  <script type="text/javascript" src='src/js/LoginForm.js'></script>
   
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
          <a href="index.php">Home</a>
          <a href="about.php">About</a>
          <a href="Feedback.php">Feedback</a>
          <a href="RegisterForm.php">Become a donor</a>
          <a href="DoneeRegForm.php">Sign Up</a>
          <a href="LoginForm.php" class="current">Login</a>
      </div>
     </div>
  </header>
    
    
    <div class="box" align="center">
  <h1>Login</h1>
  <br>
  <form method="POST" onsubmit="return loginFormValidate()" action="src/db/loginServer.php" enctype="multipart/form-data">
    
      <input type="email" placeholder="Enter your Email" name="email" id="email" autocomplete="on"
         onkeyup='return loginFormValidate()' value="" class="input-field">
                <span id="message"></span>
    
    <br>
    
      <div id="field">
            <input type="password" placeholder="Enter your Password" name="password" id="password" autocomplete="on" onkeyup='return loginFormValidate()' value="" class="input-field">
             
            <img src="src/images/show.png" id="image" onclick="show_hide()">
           </div>
          
            <span id="message1"></span>
    
    <br>
        <label class="remember">
           <input type="checkbox" name="remember"> Remember Me
        </label>

        <a href="ForgotPassword.php" class="forgot">Forgot password?</a>
        <br><br>

    <input type="submit" name="log-in" value="Log In">
    <br><br>

        <label>
          To create new account
        </label>
        <br>
        <a href="RegisterForm.php" id="link">Register </a>

  </form>
</div>

    
  <footer>
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>
  </body>
</html>


