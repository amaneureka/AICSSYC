<?php
	/*if (isset($_GET['reset']))
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
	else */if (isset($_GET['setup']))
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
	else if (isset($_GET['show']))
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
	else if (isset($_GET['confirm']))
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
		echo "<h1>Activated Successfully!</h1>";
		exit();
	}
	else
	{
		if (!isset($_POST['name']))
		{
			printf("_POST_NAME_");
			die();
		}
		if (!isset($_POST['email']))
		{
			printf("_POST_EMAIL_");
			die();
		}
		if (!isset($_POST['telephone']))
		{
			printf("_POST_TELPHONE_");
			die();
		}
		if (!isset($_POST['member_id']))
		{
			printf("_POST_MEMBER_ID_");
			die();
		}
		if (!isset($_POST['TShirtSize']))
		{
			printf("_POST_SIZE_");
			die();
		}
		if (!isset($_POST['Section']))
		{
			printf("_POST_SECTION_");
			die();
		}
		if (!isset($_POST['IsMember']))
		{
			printf("_POST_IS_MEMBER_");
			die();
		}
		if (!isset($_POST['Why']))
		{
			printf("_POST_WHY_");
			die();
		}
		if (!isset($_POST['Expctation']))
		{
			printf("_POST_EXPECTATION_");
			die();
		}
		if (!isset($_POST['volunteering']))
		{
			printf("_POST_VOLUNTEER_");
			die();
		}
		if (!isset($_POST['comments']))
		{
			printf("_POST_COMMENTS_");
			die();
		}
		if (!isset($_POST['mmber']))
		{
			printf("_POST_MEMBER_");
			die();
		}
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
    	$Member = $_POST['mmber'];

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
		$ddata = "Name: $name\tEmail ID: $email\tTelephone: $telephone\tMember ID: $member_id\tT-ShirtSize: $TShirtSize\tSection: $Section\tMembership: $IsMember\tWhy: $Why\tExpectation: $Expctation\tVolunteering: $volunteering\tComments: $comments\nMember: $Member";
		mysqli_query($link, "INSERT INTO aicssyc2 (email, data, activate) VALUES ('$email', '$ddata', 0)");
		mysqli_close($link);

		$activate_reply = md5($email . "@aicssyc");
		$to = $email;
		$email_subject = "Confirmation of Registration for AICSSYC'15";
		$email_body = 	"Dear $name\n\n" .
						"Greetings from IEEE AICSSYC'15 Team!\n\nWe are happy to inform you that have successfully registered for All India Computer Society Student- Young Professionals Congress 2015."  .
						"\n\nConfirm your registration by visiting following url\nhttp://aicssyc.org/register.php?confirm&email=$email&hash=$activate_reply" .
						"\n\nKindly note that the registration is not a confirmation of your attendance for the event. After screening your application, you will receive confirmation mail and details about further steps. The attendance ticket will be sent as soon as the payment is completed. " .
						"\n\nIn the meantime please keep visiting our website http://aicssyc.org/ , we would unveil the speakers and other details soon." .
						"\nRemain updated by liking our Facebook page :  https://www.facebook.com/aicssyc?fref=ts" .
						"\n\nWe would be happy to have you aboard with us during AICSSC'15 at Netaji Subhas Institute of Technology, Delhi on 20-22 December 2015!" . 
						"\n\nWarm Regards\nIEEE AICSSYC'15 Team"; 
		
		$headers = "From: aicssyc2015@gmail.com\n"; 
		$headers .= "Reply-To: aicssyc2015@gmail.com";
		mail($to,$email_subject,$email_body,$headers);
		printf("Please check your Inbox :)\n");
	}
?>