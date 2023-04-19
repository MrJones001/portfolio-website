<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["fname"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $phoneNumber = $_POST["number"]
  
    // Set the recipient email address
    $to = "olufemiorezi@gmail.com";
  
    // Set the email subject
    $subject = "New contact form submission from $name";
  
    // Set the email message
    $body = "Name: $name\nEmail:$email\nNumber:$phoneNumber\nMessage:\n$message";
  
    // Send the email
    if (mail($to, $subject, $body)) {
        echo '<p>Thank you for your message. We will get back to you soon!</p>';
      } else {
        echo '<p>There was an error sending your message. Please try again later.</p>';
      }
  }
  ?>