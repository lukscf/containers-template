<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';  // If using Composer

$mail = new PHPMailer(true);  // Pass true for exceptions

try {
    // Server settings for Umbler SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.umbler.com';  // As you specified
    $mail->SMTPAuth = true;
    $mail->Username = 'auto@msg-automatica.com.br';  // Your Umbler username/email
    $mail->Password = 'Cervejaria92!!@';  // Your Umbler SMTP password
    $mail->SMTPSecure = 'tls';  // Or 'ssl' if required
    $mail->Port = 587;  // Common port for Umbler; confirm in your Umbler dashboard

    // Recipients
    $mail->setFrom('boranoix@msg-automatica.com.br', 'Auto Sender');  // New sender address
    $mail->addAddress('lucascruzferreira@gmail.com', 'Lucas');  // Test recipient

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email from Msg Automática';
    $mail->Body    = 'This is a test email from your new setup.';
    $mail->AltBody = 'This is a plain text version for non-HTML clients.';

    $mail->send();
    echo 'Email sent successfully!';
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
