<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set your email address where you want to receive the form submissions
    $to = "shobhitbaijal5@gmail.com";
    $subject = "New Contact Form Submission from $name";

    // Compose the email message
    $message = "Name: $name\n\n";
    $message .= "Email: $email\n\n";
    $message .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email";

    // Send the email
    $mailSent = mail($to, $subject, $message, $headers);

    if ($mailSent) {
        echo "Thank you for your message. We will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    echo "Invalid request. Please submit the form.";
}
?>
