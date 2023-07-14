<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Get form input values
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Create a new PHPMailer instance
$mail = new PHPMailer();

// Configure SMTP settings (replace with your own)
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = '<paulocornista11@gmail.com>';
$mail->Password = 'cornistapaulo0512eam';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Set sender and recipient
$mail->setFrom($email, $fullname);
$mail->addAddress(' cornistapaulo_bscs@plum.edu.ph', 'Company');

// Set email subject and body
$mail->Subject = $subject;
$mail->Body = "Name: $fullname\nEmail: $email\nPhone: $phone\n\n$message";

// Send the email
if ($mail->send()) {
  // Email sent successfully
  echo 'Email sent!';
} else {
  // Error sending email
  echo 'Error sending email: ' . $mail->ErrorInfo;
}
?>
