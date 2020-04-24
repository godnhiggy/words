<?php
session_start();
include 'connect.php';
$textNumber=$_POST["textNumber"];
$email=$_POST["email"];


$stmt = $db->prepare("INSERT INTO customers (phone, email)
                      VALUES (:textNumber, :email)");
$stmt->bindValue(':textNumber', $textNumber);
$stmt->bindValue(':email', $email);
$stmt->execute();

$from = 'admin@coachhiggy.com';

// To send HTML mail, the Content-type header must be set
//$headers  = 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: '.$from."\r\n".
                                                              //'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();





$to = "6787946711";
$formatted_number = $textNumber."@txt.att.net";
$higgy_number = $to."@txt.att.net";
mail($formatted_number, 'to the cusotmer!', 'www.coachhiggy.com/marketing/pre_code.php', $headers);
mail($higgy_number, 'to the business owner!', $formatted_number, $headers);

//if(mail($to, $subject, $message, $headers)){
//    echo 'Your mail has been sent successfully.';
//} else{
//    echo 'Unable to send email. Please try again.';
//}

//echo "<a href='pre_code.php'>Get your code</a>";
?>
