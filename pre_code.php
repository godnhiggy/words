<?php
session_start();
$_SESSION["code"]="yes";
//echo $submit;

header('location: code_page.php');
?>
