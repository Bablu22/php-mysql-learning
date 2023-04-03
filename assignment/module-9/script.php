<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Send email
    $to = "youremail@example.com";
    $headers = "From: " . $name . " <" . $email . ">";
    $body = "Subject: " . $subject . "\n\n" . $message;

    if (mail($to, $subject, $body, $headers)) {
        // Email sent successfully
        echo "Thank you for your message!";
    } else {
        // Email not sent
        echo "Oops! Something went wrong.";
    }
}

