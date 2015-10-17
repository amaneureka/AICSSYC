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
	else */if (isset($_GET['show']))
	{
		if (!isset($_GET['pass']))
			die();
		if (md5($_GET['pass']) != "05fc61667f9334cbd6861f7e9cf30a67")
			die();
		$link = mysqli_connect("localhost", "colleges_aicssyc", "GTFO@123", "colleges_ieeewp");
		if (mysqli_connect_errno()) 
		{
    		printf("Connection failed\n");
    		exit();
		}
		$result = mysqli_query($link, "SELECT * FROM aicssyc2");
?>
	<html lang="en">
		<head>
			<style type="text/css">
				.flat-table {
  					display: block;
  					font-family: sans-serif;
  					-webkit-font-smoothing: antialiased;
  					font-size: 115%;
  					overflow: auto;
  					width: auto;
				}
				.flat-table th {
  					background-color: #70c469;
  					color: white;
  					font-weight: normal;
  					padding: 20px 30px;
  					text-align: center;
				}
				.flat-table td {
  					background-color: #eeeeee;
  					color: #6f6f6f;
  					padding: 20px 30px;
				}
			</style>
		</head>
		<body>
			<table class="flat-table">
  				<tbody>
    				<tr>
      					<th>ID</th>
      					<th>Email ID</th>
      					<th>Data</th>
    				</tr>
    			<?php
    				while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    					if ($row['activate'] == 0)
    						echo "<tr><td>". $row['id'] . "</td><td>" .  $row['email'] ."</td><td>" . $row['data'] . "</td></tr>";
    					else
    						echo "<tr><td>". $row['id'] . "</td><td><b>" .  $row['email'] ."</b></td><td>" . $row['data'] . "</td></tr>";
    			?>
  				</tbody>
			</table>
		</body>
	</html>
<?php		
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
		$msg = 0;
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
			if ($row['activate'] == 1)
			{
				$msg = 1;
				break;
			}
		}
		if ($msg == 0)
		{
			mysqli_query($link, "UPDATE aicssyc2 SET activate=1 WHERE email='$email'");
			mysqli_close($link);
		}
?>
	<html lang="en">
	
        <title> AICSSYC'15 | IEEE NSIT Delhi</title>

        <meta charset="utf-8">
        <meta name="description" content="__DESCRIPTION__" />
        <meta name="keywords" content="NSIT, IEEE, IEEE-NSIT, AICSSYC'15, 2015, Delhi, Dwarka" />
        <meta name="author" content="IEEE NSIT">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!--   FAV AND TOUCH ICONS   -->
        <link rel="icon" href="assets/images/favicon.ico">
        <link rel="apple-touch-icon" href="assets/images/logo_medium.png">

        <!-- GOOGLE FONTS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">

        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- FONT ICONS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/icomoon.css">

        <!-- Pop Up Images -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">

        <!-- CAROUSEL SLIDERS -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">

        <!-- FLEX SLIDER CSS -->
        <link rel="stylesheet" href="assets/css/flexslider.css">

        <!--  CSS3 ANIMATE CSS  -->
        <link rel="stylesheet" href="assets/css/animate.css">

        <!--  Hover effect CSS  -->
        <link rel="stylesheet" href="assets/css/hover-effect.css">

        <!--   COUSTOM CSS link  -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

        <!-- COLOR SCHEME -->
        <link rel="stylesheet" href="assets/css/colors/forestGreen.css" type="text/css" id="theme-link" />
    </head>

    <body>
        
        <!-- Start: Header Section 
        ==================================-->
        <header class="header-background header " id="header" data-stellar-background-ratio="0.5"> 
            <div class="fix header-overlay overlay-color">

                       
                <div class="container" id="header-body">
                    <div class="row header-body section-separator">
                        
                        <!-- Logo Goes Here -->
                        <img src="assets/images/logo.png" alt="This is a logo" style="background-color: transparent;" class="wow fadeInDown">
                        
                        <!-- Headline Goes HEre -->
                        <h1 class="wow fadeInDown" data-wow-delay="0.3s">
                            Hello! Welcome To AICSSYC'15
                        </h1>

                        <!-- Detail -->
                        <p class="wow fadeInDown" data-wow-delay="0.6s">
                        GOING DIGITAL </br> GROWING POTENTIAL 
                        </p>
						<p><h1><?php if ($msg == 0) echo "Activation Successfull"; else echo "Already Confirmed"; ?></h1></p>
						<p>Happy to have you aboard </p>

                        <!-- Start: CountDown area -->
                        <div class="count_down count_down-1 col-md-8 col-md-offset-2 wow fadeInDown" data-wow-delay="0.9s">
                        </div>
                        <!-- End: CountDown area -->
                      

                    </div>
                    <!-- End: header-body  -->
                </div> 
                <!-- End: container  -->


            </div> 
            <!-- End: fix header-overlay overlay-color  -->
        </header> 
        <!--End: Header Area
        ===========================-->
</body>
</html>

<?
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
		$ddata = "Name: $name<br>Email ID: $email<br>Telephone: $telephone<br>Member ID: $member_id<br>T-ShirtSize: $TShirtSize<br>Section: $Section<br>Membership: $IsMember<br>Why: $Why<br>Expectation: $Expctation<br>Volunteering: $volunteering<br>Comments: $comments<br>Member: $Member<br><br>";
		mysqli_query($link, "INSERT INTO aicssyc2 (email, data, activate) VALUES ('$email', '$ddata', 0)");
		mysqli_close($link);

		$activate_reply = md5($email . "@aicssyc");
		$to = $email;
		$email_subject = "Confirmation of Registration for AICSSYC'15";
		$email_body = 	"Dear $name\n\n" .
						"Greetings from IEEE AICSSYC'15 Team!\n\nWe are happy to inform you that you have successfully registered for All India Computer Society Student- Young Professionals Congress 2015."  .
						"\n\nConfirm your registration by visiting following url\nhttp://aicssyc.org/register.php?confirm&email=$email&hash=$activate_reply" .
						"\n\nKindly note that the registration is not a confirmation of your attendance for the event. After screening your application, you will receive confirmation mail and details about further steps. The attendance ticket will be sent as soon as the payment is completed. " .
						"\n\nIn the meantime please keep visiting our website http://aicssyc.org/ , we would unveil the speakers and other details soon." .
						"\nRemain updated by liking our Facebook page :  https://www.facebook.com/aicssyc?fref=ts" .
						"\n\nWe would be happy to have you aboard with us during AICSSYC'15 at Netaji Subhas Institute of Technology, Delhi on 20-22 December 2015!" . 
						"\n\nWarm Regards\nIEEE AICSSYC'15 Team"; 
		
		$headers = "From: aicssyc2015@gmail.com\n"; 
		$headers .= "Reply-To: aicssyc2015@gmail.com";
		mail($to,$email_subject,$email_body,$headers);
		printf("Please check your Inbox :)\n");
	}
?>

