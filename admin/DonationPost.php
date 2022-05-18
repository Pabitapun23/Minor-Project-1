<!DOCTYPE html>
<html>
    <head>        
        <title>Donation Info</title>
        <link rel="stylesheet" type="text/css" href="../src/css/NavigationBar.css">
    <style type="text/css">
   .content{
 position: relative;
  margin: 30px 5%;
  width: 90%;
  height: auto;
  display: flex;
  flex-flow: row wrap;
  justify-content: space-between;
}
.card {
  float: left;
  position: relative;
  margin: 20px 1.5%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 30%;
  text-align: center;
  font-family: arial;
  max-height: inherit;
}

.card:hover {
   box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.image{
  height: 40%;
  overflow: hidden;
}
.title{
  height: 8ch;
  overflow: hidden;
}
.note{
  height:25ch;
  overflow: hidden;
  margin-bottom: 10px;
}
.link{
  height: 10%;
  margin-top: 4px;
}
.bio {
  display: block; 
  text-overflow: ellipsis;
  word-wrap: break-word;
  overflow: hidden;
  max-height: 8.6em;
  line-height: 1.8em;
  color: grey;
  font-size: 24px;
}
.card button {
  margin: 0px 5%;
  border: none;
  outline: 0;
  padding: 10px;
  color: white;
  background-color: #188224;
  text-align: center;
  cursor: pointer;
  width: 40%;
  font-size: 22px ;
  border-radius: 25px;
}

.card button:hover {
    background-color: 257543;
}

#viewbtn{
  float: center;
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
        <a href="Donorinfo.php">Donor</a>
        <a href="Doneeinfo.php">Donee</a>
        <a href="DonationPost.php" class="current">Total Donation Post</a>
        <a href="DoneeVerifying.php">To be Verify</a>
        <a href="Feedback.php">Feedback</a>
        <a href="../Logout.php">Logout</a>
    </div>
  </div>
</header>


	<?php include "DonationPostinfo.php"; ?>
	
	</body>
</html>
