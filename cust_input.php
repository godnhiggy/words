<?php
include('server1.php');
ob_start();
  session_start(); 

/* if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: video_login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: video_login.php");
  }
*/
//set variables
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $telcarrier = $_POST["telcarrier"];
    $phone = $_POST["phone"];
    $item1 = $_POST["item1"];
    $item2 = $_POST["item2"];
  
  
if (isset($_POST["firstName"])) {
//connect to db 
$phone =  preg_replace("/[^0-9]/","", $phone);
    $db = mysqli_connect('localhost', 'bjekqemy_higgy', 'Brett73085', 'bjekqemy_sleekfinish');
//insert customer info into db    
  	$query = "INSERT INTO customers (firstName, lastName, email, telcarrier, phone, item1, item2) 
  			  VALUES('$firstName', '$lastName', '$email', '$telcarrier', '$phone', '$item1', '$item2')";
  	mysqli_query($db, $query);
  
  	header('location: exp_bus_front_page.php');
}
?>
<html>
<head>
  <title>Sleek Finish Pressure Washing</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Sleek Finish Pressure Washing - Customer Input</h2>
  </div>
	 
  <form method="post" action="">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>First Name</label>
  		<input type="text" name="firstName" >
  	</div>
  	<div class="input-group">
  		<label>Last Name</label>
  		<input type="text" name="lastName">
  	</div>
  		<div class="input-group">
  		<label>Email</label>
  		<input type="email" name="email">
  	</div>
  		<div class="input-group">
  		<label>Phone Carrier</label>
  		<select name="telcarrier">
    <option value="att">AT&T</option>
    <option value="verizon">Verizon</option>
    <option value="sprint">Sprint</option>
    <option value="tmobile">T-Mobile</option>
    <option value="metro">Metro</option>
    <option value="cricket">Cricket</option>
  </select>
  	</div>
  		<div class="input-group">
  		<label>Phone Number</label>
  		<input type="tel" name="phone" value="000-000-0000">
  	</div>
  		<div class="input-group">
  		<label>Item One</label>
  		<input type="text" name="item1">
  	</div>
  		<div class="input-group">
  		<label>Item Two</label>
  		<input type="text" name="item2">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Submit Customer Info</button>
  	</div>
  	 </form>
  	<div class="grid-item item3" id="center">
      <h3>Customer List</h3>
        <form action="customer_email.php" method="POST">
      <?php
      echo "<select id='customers' name='customers[]' multiple>";
      $sql = "SELECT *
      FROM customers ORDER BY lastName";
      //$result = $conn->query($sql);

      $result=mysqli_query($db, $sql);
      if ($result->num_rows > 0)
                {

          // output data of each row
          while($row = $result->fetch_assoc()) {
  $firstName = $row["firstName"];
  $lastName = $row["lastName"];
  $rowId = $row["phone"];

              

                echo "<option value='$rowId'>".$firstName." ".$lastName."</option>";
             

   }
  }
 echo "</select>";
  echo "<input type='submit' name='submit' value='select'/>";
 
  ?>
    </form>
  </div>
 
</body>
</html>