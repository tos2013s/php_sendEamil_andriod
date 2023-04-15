<?php
$email = $_POST['email'];

date_default_timezone_set('Asia/Bangkok');
require 'PHPMailer/PHPMailer.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "preyapongapps@gmail.com";
$mail->Password = "!T@s0920628991";

$mail->setFrom('preyapongapps@gmail.com', 'Andriod Chat');
//Set who the message is to be sent to
$mail->addAddress('$email', 'itoffside');
//Set the subject line
$mail->Subject = 'Andriod Chat test email';
$mail->msgHTML("Test email by Andriod Chat");
//send the message, check for errors
if (!$mail->send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
echo "Message sent!";
}