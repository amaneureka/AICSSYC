<?php
	if (!isset($_GET['name']))
		die();
	if (!isset($_GET['telephone']))
		die();
	if (!isset($_GET['query']))
		die();
	if (!isset($_GET['email']))
		die();

	$name = $_GET['name'];
	$email = $_GET['email'];
	$query = $_GET['query'];
	$tel = $_GET['telephone'];

	$to = "aman.eureka@gmail.com";
    $email_subject = "@AICSC: Query Submission";
    $email_body = "Name: $name\nTelephone: $telephone\nEmail: $email\nQuery:$query\n";
    $headers = "From: $email\n"; 
    $headers .= "Reply-To: $email";
    mail($to,$email_subject,$email_body,$headers);
?>