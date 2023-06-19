<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $name = $_POST['demo-name'];
  $email = $_POST['demo-email'];
  $category = $_POST['demo-category'];
  $priority = $_POST['demo-priority'];
  $copy = isset($_POST['demo-copy']) ? 'Yes' : 'No';
  $human = isset($_POST['demo-human']) ? 'Yes' : 'No';
  $message = $_POST['demo-message'];

  // Compose the email message
  $to = 'owen2608@berkeley.edu';  // Replace with your email address
  $subject = 'New form submission';
  $body = "Name: $name\nEmail: $email\nCategory: $category\nPriority: $priority\nCopy: $copy\nHuman: $human\nMessage: $message";
  $headers = "From: $email";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo 'Email sent successfully';
  } else {
    echo 'An error occurred. Please try again.';
  }
}
?>
