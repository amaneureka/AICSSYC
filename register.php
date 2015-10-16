<?php

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