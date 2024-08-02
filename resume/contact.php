<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Email details
    $to = "ramanasaka25@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission from $name";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Email body
    $body = "You have received a new message from your website contact form.\n\n";
    $body .= "Here are the details:\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";
    
    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting me. I will get back to you soon.";
    } else {
        echo "There was an error sending your message. Please try again later.";
    }
}
?>
