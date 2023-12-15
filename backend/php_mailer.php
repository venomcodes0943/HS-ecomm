<?php
include_once('smtp/class.phpmailer.php');
include_once('smtp/PHPMailerAutoload.php');
require('smtp/class.smtp.php');

function smtp_mailer($to, $subject, $msg)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';

    $mail->Username = "dhcodes0943@gmail.com"; // Replace with your actual username
    $mail->Password = "kaeorycdnvlophla"; // Replace with your actual password
    $mail->SetFrom("dhcodes0943@gmail.com"); // Replace with your actual email
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => false
        )
    );

    try {
        if (!$mail->Send()) {
            throw new Exception($mail->ErrorInfo);
        } 
        else {
            return true;
        }
    } catch (Exception $e) {
        error_log("Email sending failed: " . $e->getMessage());
        return false;
    }
}
?>