
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $message = test_input($_POST["message"]);

    // Send email with the message content
    $to = "youremail@example.com";
    $subject = "New message from Contact Us form";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        // Success message
        echo "<p>Thank you for contacting us. We will get back to you soon!</p>";
    } else {
        // Error message
        echo "<p>Oops! Something went wrong. Please try again later.</p>";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
