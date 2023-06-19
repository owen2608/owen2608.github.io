<?php
$to = 'owen2608@berkeley.edu';
$subject = 'Test Email';
$message = 'This is a test email.';
$headers = 'From: sender@example.com';

if (mail($to, $subject, $message, $headers)) {
  echo 'Email sent successfully';
} else {
  echo 'An error occurred. Please try again.';
}
?>
