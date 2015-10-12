<?php

	if (!isset($_GET['email']))
		die();

	$to = $_GET['email'];
    $email_subject = "@AICSC: Confirm your subscribtion";
    $email_body = "URL http://ieeensit.org/aicsc/?email=". $to . "&hash=" . md5($to . "ieeensit") . "\n";
    $headers = "From: $to\n"; 
    $headers .= "Reply-To: aman.eureka@gmail.com";
                    
            mail($to,$email_subject,$email_body,$headers);

?>