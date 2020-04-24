<?php
session_start();
//$code=$_SESSION["code"];
//echo $submit;
if(!isset($_SESSION["code"])){
die( "You must log in first");
}

?>

<!DOCTYPE html>

<html>
<head>

<style>

table {
  border-collapse: collapse;
  margin: auto;
}
table, th, td {
  border: 1px solid black;
}
form {
  float: center;
  }
label {
color: #000000;
font-weight: bold;
/*display: block;*/
width: 200px;
text-align: left;
}
/*label:after { content: ": " }*/
input, select, textarea {
font-size: 150%;
}
.button {
  background-color: #2196F3;
  border: none;
  border-radius: 10px;
  color: black;
  padding: 15px 32px;
  text-align: center;
  cursor: pointer;
}

.item1 { grid-area: header;
        text-align: center;
}
.item2 { grid-area: two;
        text-align: center;
}
.item3 { grid-area: three;
        text-align: center;
}
.item4 { grid-area: four;
        text-align: center;
}
.item5 { grid-area: five;
        text-align: center;
}
.item6 { grid-area: six;
        text-align: center;
}

.grid-container {
  display: grid;
  grid-template-areas:
    'header header header header header header'
    'two two two two two two '
    'three three three three three three'
    'four four four four four four '
    'five five five five five five '
    'six six six six six six';
  grid-gap: 0px;
  background-color: #2196F3;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.7);
  padding: 20px 0;
  font-size: 200%;;
}

</style>

</head>

<body>


<div class="grid-container">
  <div class="item1">
<?php $rand = mt_rand();

echo "<h1>". $rand . "</h1>";
?>
  </div>
  <div class="item2">

  </div>
  <div class="item3">
        <h2>Thank you for dining with us today!<br>
        Enjoy 30% off of your bill!<br>
        As an additional thank you, enjoy free soft drinks on us!</h2>

  </div>
  <div class="item4">

  </div>
  <div class="item5">

  </div>

</div>

</body>
</html>
