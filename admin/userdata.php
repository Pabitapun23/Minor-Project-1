<!DOCTYPE html>
<html>
<head>
    <title>Donor Information</title>
    
    <!-- <link rel="stylesheet" type="text/css" href="../src/css/Cards.css">
     --><style type="text/css">
    *
{
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
}

body{
  font-family: Arial, Helvetica, sans-serif;
  font-size: 15px;
  height: 30px;
  background-color: #F2F3F4    ;
}

/* Header */ 
header{
  background:#f3f3f3;
  color: black;
  min-height: 60px;
  border-bottom: #00b300 3px solid;
  z-index: 1;
}

.container{
  width: 90%;
  margin: auto;
  overflow: hidden;
}

 #branding{
  padding-top: 10px;
  float: left;
}

 #branding h1{
  margin:0;
}

 #branding a{
  text-decoration: none;
  color: black;
}

header .highlight,.navbar a.current{
  color: #188224;
  font-weight: bold;
}

.navbar
{
  display: flex;
  justify-content: flex-end;
}

.navbar a
{
  color: black;
  text-align: center;
  text-decoration: none;
  padding: 24px 28px;
}

.navbar a:hover
{
  color: #cccccc;
}

#toggle
{
  display: none;
}

.togglearea
{
  background-color: #f3f3f3;
  border-bottom: 1px;
  color: white;
  padding: 10px 0px;
  display: flex;
  justify-content: flex-end;
}

.togglearea label
{
  background-color: #cccccc;
  height: 45px;
  width: 50px;
  color: black;
  border-radius: 6px;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.togglearea label span
{
  background-color: black;
  height: 4px;
  width: 70%;
  margin: 2px 0px;
}

.togglearea
{
  display: none;
}


footer{
  height: 100px;
  margin-top: 20px;
  color: #ffffff;
  background-color: #1E4B28;
  text-align: center;
  z-index: 1;
  padding-top: 50px;
}

footer p{
  margin-left: 30px;
}

@media(max-width: 768px){
  header nav, header nav li{
    float: none;
    text-align: center;
    width: 100%;
  }
}

@media screen and (max-width: 1024px)
{
  .navbar
  {
    flex-direction: column;
    display: none;
  }

  .navbar a:hover, .navbar a.current:hover
  {
    background-color: #cccccc;
    color: black;
  }

  .navbar a.current{
    color:white;
    background-color: #188224;
  }

  header #branding{
    font-size: 14px;
  }

  .togglearea label
  {
    height: 35px;
    width: 40px;
  }

  #toggle:checked + .navbar
  {
    display: flex;
  }

  .togglearea
  { 
    display: flex;
  }
}

.button_2{
  height: 50px;
  background: #188224;
  border: 0;
  margin-top: 10px;
  padding-left: 20px;
  padding-right: 20px;
  color: #ffffff; 
  border-radius: 25px;
  cursor: pointer;
}

.button_2 a{
  text-decoration: none;
  color: white;
  font-size: 22px;
}

.change{
    margin:0px 35%;
    width: 30%;
    height: 50px;
    border: 2px;
    font-size: 24px;
    align-self :center;
}

.change a{
  color: black;
  text-decoration: none;
}

.change #previous{
  float: left;
}

.change #next{
  float: right;
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
        <a href="AdminPanel.php">Admin Panel</a>
        <a href="Donorinfo.php" class="current">Donor</a>
        <a href="Doneeinfo.php">Donee</a>
        <a href="DonationPost.php">Total Donation Post</a>
        <a href="DoneeVerifying.php">To be Verify</a>
        <a href="Feedback.php">Feedback</a>
        <a href="../Logout.php">Logout</a>
    </div>
  </div>
</header>

<?php
include '../src/db/connection.php';
$sql = "SELECT  user_id, username,email,address,contact_no,account_no FROM userprofile,doneeinfo Where role='Donee' AND userprofile.user_id=doneeinfo.donee_id AND flag='1' order by userprofile.username";
$result = mysqli_query($conn,$sql);

	echo "<table border='1'>"."<tr>"."<td>"."Username"."</td>"."<td>"."Email"."</td>"."<td>"."Address"."</td>"."<td>"."Contact No."."</td>". "<td>"."Account No."."</td>"."</tr>";
    // output data of each row
 $row = $result->fetch_assoc();
        echo "<tr>"."<td>".$row["username"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["address"]."</td>" ."<td>".$row["contact_no"]."</td>" ."<td>".$row["account_no"]."</td>"."</tr>";

  ?>

</body>
</html>