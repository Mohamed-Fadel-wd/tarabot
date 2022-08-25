<?php
//get data from form  

$email= $_POST['email'];
$message= $_POST['message'];
$subject = $_POST['subject'];

$to = "info@tarabotsecurity.com";
$txt ="email = ". $email . "\r\n  message = " . $message . "\r\n subject =" . $subject;
$headers = "From: info@tarabotsecurity.com" ;
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>