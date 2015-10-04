<?php
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	echo $name . " " . $email . " " . $message . '\n';
	return -1;
?>