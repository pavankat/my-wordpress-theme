<?php

$to = "pavankat@gmail.com";
$subject = $_POST['subject'];
$message = "Email: " . $_POST['email'] . "\r\n" . "Name: " . $_POST['name']. "\r\n" . "Description: " . $_POST['describe'];

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

if (mail( $to, $subject, $message )) {
	echo "Thanks for contacting me! I'll be in touch with you soon.";	
} else {
	echo 'Something went wrong. 
		Maybe try submitting again or email me instead. My email is pavankat[at]gmail.';	
}


