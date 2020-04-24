<?php
session_start();
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

  </div>
  <div class="item2">
    <form action="submit_contact_info_action.php" method="post">
        <h3>Have today's Coupon sent to you!</h3>
  </div>
  <div class="item3">
        <label for="couponCode">Coupon Code:</label><br>
        <input type="text" id="couponCode" name="couponCode" required><br><br>
        <label for="textNumber">text number:</label><br>
        <!--<input type="textNumber" id="textNumber" name="textNumber" required><br><br>-->
        <input type="text" id="textNumber" name="textNumber" placeholder="no dashes necessary" pattern="[0-9]{10}" required><br><br>
        <label for="email">email address:</label><br>
        <input type="email" id="email" name="email" required>
  </div>
  <div class="item4">

  </div>
  <div class="item5">
        <input type="submit" value="Submit" name="submit">
    </form>
  </div>

</div>

</body>
</html>
