<?php
header("Content-type: text/html");

if(isset($_POST['submit'])){
	
}

$name=$_POST["name"];
$question=$_POST["question"];
$email = $_POST["email"];



$to = 'jhollan2@mail.ccsf.edu';
$subject = "You have a USER INQUIRY:";
$message = "Your Message:";
$message.= "Customer Name:" .$name."\n";
$message.= "Customer Email:" .$email."\n";
$message.= "Customer Question" .$question."\n";

if(!$_POST['name']){
	$errName = 'Please enter your name';
}






echo "<p>Thank you, $name . Your Email has been Sent, and we will get back to you within 48 hours.</p>";

//Build email (to myself)


mail($to, $subject, $message);
