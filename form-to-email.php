<?php 
	$user_name = $_POST['name'];
	$user_email = $_POST['email'];
	$user_message	= $_POST['message'];

	$recipient = "layne.celeste@gmail.com";
	$subject = "Contact Form";
	$formcontent = "You have received a new message from $user_name.\n".
	"Here is the message:\n $user_message";
	$mailheader = "From: $user_email \r\n";

	mail($recipient, $subject, $formcontent, $mailheader) or die ("Error!");
	
	echo "Thank You!";
?>