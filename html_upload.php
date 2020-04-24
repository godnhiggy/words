<?php
include('server1.php');
?>
<!DOCTYPE html>
<html>
    <head>
  <title>Sleek Finish Pressure Washing</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
    <h2>Sleek Finish Pressure Washing - Image Upload</h2>
    </div>
    
<form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="input-group">Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    </div>
    <div class="input-group"></div>
    <input type="submit" value="Click here to upload image" name="submit">
    </div>
</form>

</body>
</html>