<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "connorhawkins1980@gmail.com"; // Replace with your email address
  $subject = "New Message";
  $message = "This is a test email.";

  // Send email
  if (mail($to, $subject, $message)) {
    echo "Email sent successfully.";
  } else {
    echo "Failed to send email.";
  }
}
?>
