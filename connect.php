<?php

try {
    $db = new PDO ('mysql:host=localhost;dbname=bjekqemy_sleekfinish;charset=utf8', 'bjekqemy_higgy', 'Brett73085');
//var_dump($db);
//echo "Connected to $dbname at $host successfully.";
}

catch(Exception $e) {
  echo "An error has occurred";
}
 ?>
