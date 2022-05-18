
<!DOCTYPE html>
<html>
<head>
    <title>Donee verification</title>
    <style type="text/css">
     html {
       font-size: 17px;
       color: rgb(255, 255, 255);
       font-family: 'Heebo', sans-serif;
       background-color: #ffffff;
    }

    .front-side,
    .back-side {
      width: 390px;
      height: 220px;
      display: grid;
      grid-template-columns: 2% 96% 2%;
      grid-template-rows: 4% 92% 4%;
      position: relative;
      margin: 20px auto;
      overflow: hidden;
      box-shadow: 2px 5px 15px 0px #17161694;
      background-color: lightgreen;
    }

    /*.info-grid {
      grid-column: 2/3;
      grid-row: 2/3;
      z-index: 2;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.363);
      box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.432);
      border-radius: 6px;
      font-size: 0.7rem; 
      display: grid;
      grid-template-columns: 15px repeat(3, 1fr) 15px;
      grid-template-rows: repeat(3, 1fr);
      line-height: 1px;
    }
    .info-grid .name {
      grid-column: 2 / span 2;
      grid-row: 1 / span 1;
      font-size: 1.2em;
      letter-spacing: .1rem;
      margin-top: 0px;
    }
    .info-grid .name h2{
      font-weight: unset;
      margin-top: 10px;
      float: left;
      margin-left: 20px;
    }*/

    .back-side .name-tag {
  grid-column: 1 / span 4;
  grid-row: 2 / span 1;
  align-self: center;
  z-index: 2;
  width: 100%;
  height: 40%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  background-color: rgba(255, 255, 255, 0.363);
  box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.288);
  font-size: 0.6rem; 
  letter-spacing: .1rem;
  text-align: center;
}
.name-tag h2{
  margin: 2px;
  font-weight: unset;
  font-family: sans-serif;
  font-size: 30px;

}
.name-tag h2 a {
    text-decoration: none;
    color: green;
}
    </style>
</head>

<body>
   <?php
include '../src/db/connection.php';
$perpage = 3;
if(isset($_GET['id'])){
    $start = $_GET['id'];
}else{
    $start = 0;
}
$count = mysqli_query($conn,"SELECT COUNT(user_id) FROM userprofile where flag='0'");
$rows = mysqli_fetch_array($count);
$TotalRec=$rows['COUNT(user_id)']; 
$sql = "SELECT username,user_id FROM userprofile where flag='0'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	//echo "<table border='1'>"."<tr>"."<td>"."Username"."</td>"."</tr>";
    // output data of each row
 while($row = $result->fetch_assoc()) {
        //echo "<tr>"."<td>"."<a href='profile.php?value_key=".$row["user_id"]."'>".$row["username"]."</a>"."</td>"."</tr>"; 
?> 
  	<div class="back-side"  style="float: left; margin-left: 10px;">
        <div class="name-tag">
            <h2> <?php echo "<tr>"."<td>"."<a href='profile.php?value_key=".$row["user_id"]."'>".$row["username"]."</a>"."</td>"."</tr>";  ?></h2>
        </div>
    </div>
        
        <!-- <div class="info-grid">
            <div class="name">
                <h2><?php //echo "<tr>"."<td>"."<a href='profile.php?value_key=".$row["user_id"]."'>".$row["username"]."</a>"."</td>"."</tr>";  ?></h2>
                
            </div>
            

        </div> -->
  
    
  <?php
  }
  echo "<div class='change'>";
if($start != 0){    
    echo "<a href=DonorPage.php?id=" . ($start - 3) . " id='previous'> &laquo Previous</a>";
}
if($start < $TotalRec-3){
    echo "<a href=DonorPage.php?id=". ($start + 3) ." id='next'>Next &raquo;</a>";
    
}
echo"</div>";
} 
  else {
    echo "0 results";
}
?> 

</body>

</html>