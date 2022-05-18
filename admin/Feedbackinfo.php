<!DOCTYPE html>
<html>
<head>
	<title>feedback info</title>
	<link rel="stylesheet" type="text/css" href="../src/css/NavigationBar.css">
	  <style>
        .box {
          width: 600px;
          height: 400px;
          border: 2px solid black;
          font-size: 20px;
          font-family: sans-serif;
          padding-left: 20px;
          padding-top: 30px;
          margin: 100px 5px 5px 250px; 
          background:rgba(211, 249, 232, 0.6); 
        }

        .content{
          width: 500px;
          height: 100px;
          border: 1px solid black;
          margin: 0px 20px 10px 30px;
          float: left;
          background-color: white;
        }
        .content h1{
			margin: 0px;
			padding: 10px ;
			font-family: sans-serif;;
			font-size: 20px;
			float: left;
		}
		 .content h3{
			margin: 50px 20px 30px 5px;
			padding-top: 1px;
			font-family: sans-serif;;
			font-size: 20px;
			padding-bottom: 20px;
			padding-left: 5px;
			
		}
      .msgBox{
        width: 500px;
        height: 200px;
        border: 1px solid black;
        margin: 10px 20px 40px 30px;
        float: left;
        background-color: white;
        
     }
      .msgBox h2{
      margin: 0px ; 
			padding-top: 1px;
			padding: 10px;
			font-family: sans-serif;;
			font-size: 20px;
			padding-bottom: 20px;
			float: left;
		}
		.msgBox button{
			width: 60px;
			height: 30px;
			float: right;
			margin: 100px 10px 5px 50px;
			font-size: 15px;
			font-family: sans-serif;
			background-color: lightgreen;

		}
		.msgBox button a{
			text-decoration: none;
			color: green;
			
		}
     </style>
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
      <a href="AdminPanel.php" class="current">Admin Panel</a>
        <a href="Donorinfo.php">Donor</a>
        <a href="Doneeinfo.php">Donee</a>
        <a href="DonationPost.php">Total Donation Post</a>
        <a href="DoneeVerifying.php">To be Verify</a>
        <a href="Feedback.php">Feedback</a>
        <a href="../index.php">Logout</a>
    </div>
  </div>
</header>
	 
   <?php
include '../src/db/connection.php';
$perpage = 10;

if(isset($_GET['id'])){
	$start = $_GET['id'];
}else{
	$start = 0;
}
$count= mysqli_query($conn,"SELECT COUNT(feedback_id) FROM feedback Where flag='1'");
$rows = mysqli_fetch_array($count);
$TotalRec=$rows['COUNT(feedback_id)'];
$sql = "SELECT * FROM feedback Where flag='1' order by feedback_date,feedback_time LIMIT $start, $perpage";
$result = $conn->query($sql);

if ($TotalRec > 0) {
	//echo "<table border='1'>"."<tr>"."<td>"."Email"."</td>"."<td>"."Subject"."</td>"."<td>"."Message"."</td>"."<td>"."Action"."</td>"."</tr>";
    // output data of each row
 while($row = $result->fetch_assoc()) {
        //echo "<tr>"."<td>".$row["feedback_email"]."</td>"."<td>".$row["subject"]."</td>" ."<td>".$row["feedback_content"]."</td><td><a href='deletion.php'>Delete</a></td>" ."</tr>";
?>
    <div class="box">
		<div class="content">
			<?php echo "<h1>".'Email: '.$row["feedback_email"]."</h1>"."<h3>".'Subject: '.$row["subject"]."</h3>"."<br>"; ?>
		</div>
		<br><br>
		<div class="msgBox">
			<?php echo "<h2>".$row["feedback_content"]."</h2>"."<br>"."<br>"."<button><a href='deletion.php?value_key=".$row['feedback_id']."'>"."Delete</a></button>"; ?> 
		</div>
	</div>

<?php
echo "<div class='change'>";
if($start != 0){    
    echo "<a href=DonorPage.php?id=" . ($start - 3) . " id='previous'> &laquo Previous</a>";
}
if($start < $TotalRec-3){
    echo "<a href=DonorPage.php?id=". ($start + 3) ." id='next'>Next &raquo;</a>";
    
}
echo"</div>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 
 <footer>
      <p>Khulla Mann, Copyright &copy; 2019</p>
  </footer>
</body>
</html>
    


