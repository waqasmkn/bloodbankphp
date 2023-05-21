<?php

// Set the recipient email address (replace with your own)
$to = "waqasmkn@gmail.com";

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$message = $_POST['message'];

// Construct the email message
$subject = "New Donation from $name";
$body = "You have received a new donation of $$amount from $name ($email).\n\n";
if ($message) {
	$body .= "Message: $message\n\n";
}
$headers = "From: $name <$email>";

// Send the email
if (mail($to, $subject, $body, $headers)) {
	// If the email was sent successfully, redirect to a thank you page
	header("Location: thank-you.html");
	exit;
} else {
	// If the email failed to send, display an error message
	echo "There was an error sending your donation. Please try again later.";
}

?>
<?php

// Set the recipient email address (replace with your own)
$to = "waqasmkn@gmail.com";

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$message = $_POST['message'];

// Construct the email message
$subject = "New Donation from $name";
$body = "You have received a new donation of $$amount from $name ($email).\n\n";
if ($message) {
	$body .= "Message: $message\n\n";
}
$headers = "From: $name <$email>";

// Send the email
if (mail($to, $subject, $body, $headers)) {
	// If the email was sent successfully, redirect to a thank you page
	header("Location: thank-you.html");
	exit;
} else {
	// If the email failed to send, display an error message
	echo "There was an error sending your donation. Please try again later.";
}

?>
<?php

// Set the recipient email address (replace with your own)
$to = "waqasmkn@gmail.com";

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$message = $_POST['message'];

// Construct the email message
$subject = "New Donation from $name";
$body = "You have received a new donation of $$amount from $name ($email).\n\n";
if ($message) {
	$body .= "Message: $message\n\n";
}
$headers = "From: $name <$email>";

// Send the email
if (mail($to, $subject, $body, $headers)) {
	// If the email was sent successfully, redirect to a thank you page
	header("Location: thank-you.html");
	exit;
} else {
	// If the email failed to send, display an error message
	echo "There was an error sending your donation. Please try again later.";
}

?>
