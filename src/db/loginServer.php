<?php 
include 'connection.php';
if (isset($_POST['log-in']))
 {
 $email = $_POST['email'];
 $password = $_POST['password'];
 $email = mysqli_real_escape_string($conn,$email);
 $password = mysqli_real_escape_string($conn,$password);
 $cpassword=md5($password);
 if(!empty($_POST["remember"])) {
    setcookie ("email",$_POST["email"],time()+ 3600);
    setcookie ("password",$_POST["password"],time()+ 3600);
} 
else
 {
    setcookie("email","");
    setcookie("password","");
}
  $query = "SELECT * FROM userprofile WHERE email = '{$email}' AND password ='{$cpassword}' ";

    $select_user_query = mysqli_query($conn,$query);
     if(!$select_user_query)
    {
        die("QUERY FAILED".mysqli_error($conn));
    }

    $row = mysqli_fetch_array($select_user_query);
    if( $email == $row['email'])
    {
      if($cpassword == $row['password'])
    {
      if ($row['flag']==1) {
        session_start();
      if($row['role']=="donor")
        {
          $_SESSION['role']=$row['role'];
          $_SESSION['userid']=$row['user_id'];
          $_SESSION['email']=$row['email'];
          header("Location: ../../DonorPage.php");


        }
        elseif($row['role']=="donee"){
          $_SESSION['role']=$row['role'];
          $_SESSION['userid']=$row['user_id'];
          $_SESSION['email']=$row['email'];
          header("Location: ../../DoneePage.php");
        }
        else{
         $_SESSION['role']=$row['role'];
         $_SESSION['userid']=$row['user_id'];
         $_SESSION['email']=$row['email'];
          header("Location: ../../admin/AdminPanel.php"); 
        }
}
else
{
  echo"Not Active";
        header("Refresh:3; url=../../LoginForm.php");
}
    }
    else
      {
        echo"Password Not Match";
        header("Refresh:3; url=../../LoginForm.php");
      }

    }
    else{
      echo"Email  Not Match";
      header("Refresh:3; url=../../LoginForm.php");
    }

}
 ?>