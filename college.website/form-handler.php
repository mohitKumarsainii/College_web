<?php
$name = $_POST['name'];
$visitor_email= $_POST['email'];
$subject= $_POST['subject'];
$message = $_POST['message'];


$email-form ="info@mohit.com";
$email_subject ='New Form Submission';
$email_body = "User Nmae:$name.\n"".
              "User Email:$visitor_email.\n"
               "subject:$subject.\n.
               "user message:$message .\n";

$to = 'mohitkumarsaini0507@gmail.com';
$headers="From:$email_from \r\n";
$headers .="Reply-To:$visit email \r\n
mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");
?>