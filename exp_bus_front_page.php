<?php
include('server1.php');
ob_start();
  session_start(); 

 if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: video_login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: video_login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<style>

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 40px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 20px;
}

.grid-container {
  display: grid;
  grid-template-columns:auto auto auto auto auto auto;
  grid-gap: 10px;
  background-color: #5F9EA0;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 5px 0;
  font-size: 20px;
}

.item1 {
    grid-area: 1/1/1/7;
    background-image: url("uploads/trialPic.jpeg");
    }
.item2 {
    grid-area: 2/1/2/4;
}
.item3 {
    grid-area: 2/4/2/7;
}
.item4 {
    grid-area: 3/1/3/4; 
}
.item5 {
    grid-area: 3/4/3/7; 
}
.item6 {
    grid-area: 4/1/4/7;
}

.item7 {
    grid-area: 5/3/5/5;
}
</style>
<title>Sleek Finish Pressure Washing</title>
</head>
<body>
    


    <div class="grid-container">
    
        <!--Header Grid for Title-->
        <div class="item1"><h1>Sleek Finish Pressure Washing</h1>

<p>Reminding the world</p></div>
            <!--Top Left Grid for PLC Team Input-->
        <div class="item2">
           
            <p>
            <a href="video_input.php">Video Creator!</a>    
             
            </p>
      </div>
      <div class="item3">
            Customer Database
            
            <p></p><a href="cust_input.php">Input New Customers</a>
            </p>
      </div>
      <div class="item4">
            
            <p>
            <a href="html_upload.php">Picture Upload</a>
<!--        <form action="upload.php" method="post" enctype="multipart/form-data">
   Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">

            </p>
           <a href="https://www.w3schools.com">
<img src="uploads/trialPic.jpeg" alt="trial" width="50" height="60" placeholder="Please enter the user ID"></a>
<input type="checkbox" name="vehicle" value="Bike"><img src="uploads/trialPic.jpeg" alt="trial" width="50" height="60" placeholder="Please enter the user ID"><br> -->
      </div>
        <div class="item5">
            <p>COMING SOON!</p>
            Media Templates
            <p>
            <a href="url">Media Templates</a>
            </p>
        </div>

      




<div class="item6">

</div>
</div>
</form>
</body>
</html>
