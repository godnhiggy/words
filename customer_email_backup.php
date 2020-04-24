<?php
session_start();
ob_start();
$short = $_GET["short"];
//connect to DB
//login into DB
$servername = "localhost";
$username = "bjekqemy_higgy";
$password = "Brett73085";
$dbname = "bjekqemy_sleekfinish";

 //Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 //Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
    echo "";
    }
   
$msg = "www.coachhiggy.com/sleekfinish/resend.php?short=$short";
//select all emails signed up for vids and sends short url
$sql = "SELECT phone FROM customers ";
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $useremail = $row["phone"];
/*       
mail("$useremail","Your New Video!",$msg);        
 echo "your email to ". $useremail ." is on the way!";
 echo "<br>";*/




//send email to all carriers

//$from = $_POST['from'];
$to = $useremail;
$message = $msg;
$from = 'godnhiggy@gmail.com';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();



if ((empty($to)) || (empty($message))) {
header ("Location: sms_error.php");
}


$formatted_number = $to."@vtext.com";
mail("$formatted_number", "Levi's Pressure Washing Coupon!", "$message"); 
// Currently, the subject is set to "SMS". Feel free to change this.

$formatted_number = $to."@tomomail.net";
mail("$formatted_number", "Levi's Pressure Washing Coupon!", "$message");

$formatted_number = $to."@messaging.sprintpcs.com";
mail("$formatted_number", "Levi's Pressure Washing Coupon!", "$message");

$formatted_number = $to."@txt.att.net";
mail("$formatted_number", "Levi's Pressure Washing Coupon!", "$message", "$headers");


$formatted_number = $to."@vmobl.com";
mail("$formatted_number", "Levi's Pressure Washing Coupon!", "$message");
    
    if(mail("$formatted_number", "Levi's Pressure Washing Coupon!", "$message")){
    echo 'Your mail has been sent successfully.';}
else{
    echo 'Unable to send email. Please try again.';
}
   
    
     }
    
}
//end send email to all carriers





//$to = '6787946711@txt.att.net';
//$subject = 'Marriage Proposal';
//$from = 'godnhiggy@gmail.com';
 
// To send HTML mail, the Content-type header must be set
//  = 'MIME-Version: 1.0' . "\r\n";
// .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
//$headers .= 'From: '.$from."\r\n".
 //   'Reply-To: '.$from."\r\n" .
 //  'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
//$message = '<html><body>';
//$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
//$message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
//$message .='<p> <a href="https://www.w3schools.com/html/">Visit our HTML tutorial</a> </p>';
//$message .= '</body></html>';
 
// Sending email
//if(mail("$formatted_number", "Levi's Pressure Washing Coupon!", "$message")){
  //  echo 'Your mail has been sent successfully.';
//} else{
 //   echo 'Unable to send email. Please try again.';
//}















 //echo "<a href='exp_bus_front_page.php'>Input New Customers</a>";
header("Location: exp_bus_front_page.php"); 

?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>




<?php

ob_flush();
?>

</body>
</html>