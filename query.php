<?php
	if (!isset($_POST['name']))
		die();
	if (!isset($_POST['telephone']))
		die();
	if (!isset($_POST['query']))
		die();
	if (!isset($_POST['email']))
		die();

	$name = $_POST['name'];
	$email = $_POST['email'];
	$query = $_POST['query'];
	$tel = $_POST['telephone'];

	$to = "aman.eureka@gmail.com";
    $email_subject = "@AICSC: Query Submission";
    $email_body = "Name: $name\nTelephone: $telephone\nEmail: $email\nQuery:$query\n";
    $headers = "From: $email\n"; 
    $headers .= "Reply-To: $email";
    mail($to,$email_subject,$email_body,$headers);
?>