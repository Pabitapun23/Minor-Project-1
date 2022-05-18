 <?php
session_start();
if(isset($_SESSION['userid']))
{
  if($_SESSION['role']!="donor")
 {

 if ($_SESSION['role']=="donee")
  {
  header("Location:DoneeMain.php"); 
 }
else
{
  header("Location:AdminPanel.php"); 
}
}
}
include 'src/db/connection.php';
if (isset($_POST['submit'])) {
  $to_email="khullamann5660@gmail.com";
  session_start();
  $header = $_SESSION['email'];
  $user_id = $_SESSION['userid'];
  $subject = $_POST['subject'];
  $message = $_POST['givefeedback']; 
  $today = date("Y/m/d");
    $time=date("h:i:sa");
  $query = "INSERT INTO feedback(subject,feedback_content, feedback_email,user_id,feedback_date,feedback_time,flag) VALUES('$subject','$message','$header','$user_id','$today','$time','1')";
    
  $result = mysqli_query($conn,$query);
  header("location:DonorPage.php");
} 
?>

<!DOCTYPE html>
<html>
<head>
  <title> LoggedIn Donor Feedback</title>
  <link rel="stylesheet" type="text/css" href="src/css/NavigationBar.css">
   <link rel="stylesheet" type="text/css" href="src/css/FormsStyle.css">
  <script type="text/javascript" src="src/js/validateUserFeedback.js"></script>
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
        <a href="DonorFeedback.php" class="current">Feedback</a>
        <a href="DonorProfile.php">Profile</a>
        <a href="logout.php">Log Out</a>
    </div>
  </div>
</header>
  
  <div class="box" align="center">
    <h1>User Feedback</h1>

        <form method="POST" onsubmit="return Validate()" align="center">
           <input type="text" name="subject" placeholder="Subject" id='subject' onkeyup='return Validate()'>
          
          <span id='message1'></span>
          <br><br>

          
            <textarea rows="5" id="text" name="givefeedback" placeholder="Give feedback..." onkeyup='return Validate()'></textarea>
          
          <span id='message2'></span>
          <br><br>

          <input type="submit" name="submit" value="Send">
        </form>
  </div>
  

  <footer>
    <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>
</body>

</html>
