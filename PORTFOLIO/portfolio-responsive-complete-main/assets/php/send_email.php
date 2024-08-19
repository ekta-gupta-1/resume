<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Recipient email address
    $to = "aryanamani32497@gmail.com";
    
    // Subject and body of the email
    $subject = "Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    // Headers for the email
    $headers = "From: $email";
    
    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
} else {
    // Not a POST request
    echo "Invalid request.";
}
?>
