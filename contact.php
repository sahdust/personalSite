<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  // Set the recipient email address
  $to = "loftydevworks@gmail.com";
  
  // Set the email subject
  $subject = "New Contact Form Submission";
  
  // Build the email content
  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n";
  $email_content .= "Message:\n$message\n";
  
  // Build the email headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";
  
  // Send the email
  mail($to, $subject, $email_content, $headers);
  
  // Redirect the user to a thank you page
  header("Location: thank_you.html");
  exit;
}
?>