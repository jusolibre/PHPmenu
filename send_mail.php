<?php
  require_once 'PHPMailer/PHPMailerAutoload.php';

function my_send_mail($sujet, $message) {
  $mail = new PHPMailer;
  $mail->Host = 'smtp.gmail.com';
  $mail->Mailer = "smtp";
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 25;
  $mail->SMTPSecure = '';
  $mail->SMTPAuth = true;
  $mail->Username = 'smtponlinetest70@gmail.com';
  $mail->Password = 'onlinetest70';
  $mail->Priority = 1;
  $mail->setFrom('smtponlinetest70@gmail.com', 'OurSite');
  $mail->addAddress('smtponlinetest70@gmail.com', 'ToUs');
  $mail->Subject = $sujet;
  $mail->Body    = $message;
  $mail->AltBody = $message;

  if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo . "<br>";
  }
}
?>
