<?php
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

    $fp = fopen("registrations.txt", "a+");
    fprintf($fp, "Name: $name\tEmail ID: $email\tTelephone: $telephone\tMember ID: $member_id\tT-ShirtSize: $TShirtSize\tSection: $Section\tMembership: $IsMember\tWhy: $Why\tExpectation: $Expctation\tVolunteering: $volunteering\tComments: $comments\n");
    fclose(fp);
?>