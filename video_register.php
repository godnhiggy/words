<?php include('server1.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sleek Finish Pressure Washing</title>
  <!--<link rel="stylesheet" type="text/css" href="style.css">-->
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Sleek Finish Pressure Washing</h2>
  </div>
    <div class="header">
  	<h2>Register below to have admin rights to manage your video marketing.</h2>
  </div>	
  <form method="post" action="video_register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Text</label>
  	  <input type="text" name="phone" value="<?php echo $phone; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="video_login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
