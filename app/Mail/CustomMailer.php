<?php

namespace App\Mail;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class CustomMailer
{
    public function sendContactMail($name, $email, $message)
    {
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = env('MAIL_HOST', 'smtp.gmail.com');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME'); // Your SMTP email
            $mail->Password   = env('MAIL_PASSWORD'); // App password or SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress(env('MAIL_TO_ADDRESS', 'youremail@example.com'));

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'New Contact Message from Portfolio';
            $mail->Body    = "<strong>Name:</strong> $name<br><strong>Email:</strong> $email<br><strong>Message:</strong><br>$message";
            $mail->AltBody = "Name: $name\nEmail: $email\nMessage:\n$message";

            $mail->send();
            return true;
        } catch (Exception $e) {
            return $mail->ErrorInfo;
        }
    }
}
