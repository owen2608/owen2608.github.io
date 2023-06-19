<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Process and sanitize the form data as needed

  // Send the email
  $to = "your-email@example.com";
  $subject = "New message from your website";
  $body = "Name: $name\nEmail: $email\n\n$message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    // Email sent successfully
    echo "Thank you! Your message has been sent.";
  } else {
    // Failed to send email
    echo "Oops! An error occurred while sending your message.";
  }
}
?>
