<?php
	if (isset($_GET['reset']))
	{
		$link = mysqli_connect("localhost", "colleges_aicssyc", "GTFO@123", "colleges_ieeewp");
		if (mysqli_connect_errno()) 
		{
    		printf("Connection failed\n");
    		exit();
		}
		$result = mysqli_query($link, "DROP TABLE IF EXISTS aicssyc2");
		mysqli_close($link);
		exit();
	}
	else if (isset($_GET['setup']))
	{
		$link = mysqli_connect("localhost", "colleges_aicssyc", "GTFO@123", "colleges_ieeewp");
		if (mysqli_connect_errno()) 
		{
    		printf("Connection failed\n");
    		exit();
		}
		$result = mysqli_query($link, "CREATE TABLE aicssyc2 (
                          id int(11) AUTO_INCREMENT,
                          email varchar(255) NOT NULL,
                          data varchar(50000) NOT NULL,
                          activate int(1) NOT NULL,
                          PRIMARY KEY  (ID)
                          )");
		mysqli_close($link);
		exit();
	}
	if (isset($_GET['show']))
	{
		$link = mysqli_connect("localhost", "colleges_aicssyc", "GTFO@123", "colleges_ieeewp");
		if (mysqli_connect_errno()) 
		{
    		printf("Connection failed\n");
    		exit();
		}
		$result = mysqli_query($link, "SELECT * FROM aicssyc2");
		echo "Number::" . mysqli_num_rows($result);
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
  			echo $row['email'] . " " . $row['activate'] . "\n";
		mysqli_close($link);
		exit();
	}
	if (isset($_GET['confirm']))
	{
		if (!isset($_GET['hash']))
			die();
		if (!isset($_GET['email']))
			die();
		$hash = $_GET['hash'];
		$email = $_GET['email'];
		if ($hash != md5($email . "@aicssyc"))
		{
			printf("Wrong Hash");
			exit();
		}
		$link = mysqli_connect("localhost", "colleges_aicssyc", "GTFO@123", "colleges_ieeewp");
		if (mysqli_connect_errno()) 
		{
    		printf("Connect failed\n");
    		exit();
		}
		$result = mysqli_query($link, "SELECT * FROM aicssyc2 WHERE email='$email'");
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
			if ($row['activate'] == 1)
			{
				printf("Already Activated");
				exit();
			}
		}
		mysqli_query($link, "UPDATE aicssyc2 SET activate=1 WHERE email='$email'");
		mysqli_close($link);
		echo "Activated Successfully!";
		exit();
	}
	if (!isset($_POST['name']))
		die();
	if (!isset($_POST['email']))
		die();
	if (!isset($_POST['telephone']))
		die();
	if (!isset($_POST['member_id']))
		die();
	if (!isset($_POST['TShirtSize']))
		die();
	if (!isset($_POST['Section']))
		die();
	if (!isset($_POST['IsMember']))
		die();
	if (!isset($_POST['Why']))
		die();
	if (!isset($_POST['Expctation']))
		die();
	if (!isset($_POST['volunteering']))
		die();
	if (!isset($_POST['comments']))
		die();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $member_id = $_POST['member_id'];
    $TShirtSize = $_POST['TShirtSize'];
    $Section = $_POST['Section'];
    $IsMember = $_POST['IsMember'];
    $Why = $_POST['Why'];
    $Expctation = $_POST['Expctation'];
    $volunteering = $_POST['volunteering'];
    $comments = $_POST['comments'];

    $link = mysqli_connect("localhost", "colleges_aicssyc", "GTFO@123", "colleges_ieeewp");

	if (mysqli_connect_errno()) 
	{
    	printf("Connection failed\n");
    	exit();
	}
	
	$result = mysqli_query($link, "SELECT * FROM aicssyc2 WHERE email='$email'");
	if (mysqli_num_rows($result) > 0)
	{
		printf("Already Registered\n");
    	exit();	
	}

	mysqli_free_result($result);
	$ddata = "Name: $name\tEmail ID: $email\tTelephone: $telephone\tMember ID: $member_id\tT-ShirtSize: $TShirtSize\tSection: $Section\tMembership: $IsMember\tWhy: $Why\tExpectation: $Expctation\tVolunteering: $volunteering\tComments: $comments\n";
	mysqli_query($link, "INSERT INTO aicssyc2 (email, data, activate) VALUES ('$email', '$ddata', 0)");
	mysqli_close($link);

	$activate_reply = md5($email . "@aicssyc");
	$to = $email;
	$email_subject = "Confirmation of Registration for AICSSYC'15";
	$email_body = "Greetings!!\n\nYou have successfully registered for ALL INDIA COMPUTER SOCIETY STUDENT YOUNG PROFESSIONAL CONGRESS 2015."  .
					"\n\nConfirm your registration by visiting following url\nhttp://aicssyc.org/register.php?confirm&email=$email&hash=$activate_reply" .
					"\n\nThe payment portal and details will be up shortly at http://aicssyc.org/ \nAlso, remain updated by liking our facebook page :  https://www.facebook.com/aicssyc?fref=ts" .
					"\n\nIn the meantime please keep visiting our  site, we would unveil the speakers and other details soon." .
					"\nHappy to have you aboard with us !" .
					"\n\nWarm Regards\nIEEE AICSSYC'15 Team"; 
	
	$headers = "From: aman.eureka@gmail.com\n"; 
	$headers .= "Reply-To: aman.eureka@gmail.com";					
	mail($to,$email_subject,$email_body,$headers);
	printf("Please check your Inbox :)\n");
?>