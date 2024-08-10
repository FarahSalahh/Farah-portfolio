<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Set the recipient email address
    $to = "youssef453ashraf@gmail.com";
    
    // Set the email subject
    $subject = "New Contact Form Submission";
    
    // Construct the email body
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    
    // Set the email headers
    $headers = "From: $email";
    
    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
