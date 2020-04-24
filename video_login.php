<?php include('server1.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sleek Finish Pressure Washing</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Sleek Finish Pressure Washing - Login</h2>
  </div>
	 
  <form method="post" action="video_login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="video_register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>