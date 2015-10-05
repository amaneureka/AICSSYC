<?php
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$to = 'aman.eureka@gmail.com';
	$email_subject = "@AICSC: Contact Form";
	$email_body = "You have received a new message. ".
					" Here are the details:\n Name: $name \n Email: $email \n Message \n $message"; 
	
	$headers = "From: $to\n"; 
	$headers .= "Reply-To: $email";
					
	mail($to,$email_subject,$email_body,$headers);
?>