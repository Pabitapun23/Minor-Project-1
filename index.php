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
  <title>Khulla Mann | Welcome </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" type="text/css" href="src/css/NavigationBar.css">
  <link rel="stylesheet" type="text/css" href="src/css/indexpage.css">
   
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



  <section id="showcase">
    <div class="container">
      <h1>Khulla Mann</h1>
      <p>Join Us on our journey in making the world a better place.
      </p>
      <button class="button_2"><a href="RegisterForm.php">Join Us</a></button>
    </div>
  </section>

  <section id="banner">
    <div class="container">
      <h1>Search to Donate</h1>
      <form action="searchsystem.php" method="POST">
        <input type="text" placeholder="Search..." name="searchtext">
        <button type="submit" class="button_1" name="search">Search</button>
      </form>
    </div>
  </section>

  <h1 align="center" id="heading">Donation Posts</h1>
  <?php include 'show.php';
  showAll(); ?>
  <!-- <div class="change">
    <a href="index.php" id="previous"> << Previous</a>
    <a href="index.php" id="next">Next >> </a>
  </div> -->



  <footer>   
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>

</body>
</html>