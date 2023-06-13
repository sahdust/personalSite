<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $to = "loftydevworks@gmail.com";
  
  $subject = "New Contact Form Submission";
  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n";
  $email_content .= "Message:\n$message\n";
  
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";
  
  mail($to, $subject, $email_content, $headers);
  
  header("Location: thank_you.html");
  exit;
}
?>