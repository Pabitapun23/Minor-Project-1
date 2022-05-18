<?php 
include 'connection.php';
include 'mail.php';
if(isset($_POST['submit']))
{
 $email = $_POST['email'];
  $email = mysqli_real_escape_string($conn,$email);
  $query = "SELECT email,user_id,username FROM userprofile WHERE email = '{$email}'";
    $select_user_query = mysqli_query($conn,$query);
    if(!$select_user_query)
    {
        die("QUERY FAILED".mysqli_error($conn));
    }

    $row = mysqli_fetch_array($select_user_query);
    if( $email == $row['email'] )
     {
$subject="Forget Password";
$username=$row['username'];
$from = 'noreply@gmail.com';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
$message = "<html><body bgcolor='#48B5B1'>";
$message.="<p>Hi ".$username.",</p>";
$message.="<p>Reset your password</p>";
$message.="<p>To change your KhullaMann password, click the link below.</p>";
$message.="<p><a href='http://localhost/khullamann/resetpassword.php?value_key=".$row['user_id']."'>Reset my password</a></p>";
$message.="<p>This link will expire in 24 hours, so be sure to use it right away.</p>";
$message.="<p> Thank you for using KhullaMann!</p>";
$message.="<p> The KhullaMann Team</p>";
$message .= '</body></html>';
$mail= new Mail($email,$subject,$message,$headers);
echo"Mail Has Been Sent. Please Check mail";
  header("Refresh:3; url=../../LoginForm.php");
    }
    else{
    	echo "Email unavailable";
    }
}
 ?>