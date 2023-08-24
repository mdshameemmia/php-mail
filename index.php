<?php
require "./includes/PHPMailer.php";
require "./includes/SMTP.php";
require "./includes/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host       = "smtp.gmail.com";
$mail->Mailer = "smtp";
// $mail->SMTPDebug  = 1;
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Username   = "shameemcode@gmail.com";
$mail->Password   = "138152138152";
$mail->Subject = "this is test subject";
$mail->IsHTML(true);
// $mail->CharSet = "UTF-8";
$mail->SetFrom("shameemcode@gmail.com");
$mail->Body = "<h1>shameem</h1>";
$mail->addAttachment("./img/shameem.png");

$mail->addAddress("smd985795@gmail.com");

// $mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
// $content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";
// $mail->MsgHTML($content);
$mail->Send();
if (!$mail->Send()) {
    echo "Error while sending Email.";
    // var_dump($mail);
} else {
    echo "Email sent successfully";
}
$mail->smtpClose();
