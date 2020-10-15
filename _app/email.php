<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email
{
    private $mail = \stdClass::class;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = 2;                      // Enable verbose debug output
        $this->mail->isSMTP();                                            // Send using SMTP
        $this->mail->Host       = 'smtp1.example.com';                    // Set the SMTP server to send through
        $this->mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $this->mail->Username   = 'user@example.com';                     // SMTP username
        $this->mail->Password   = 'secret';                               // SMTP password
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $this->mail->Port       = 587;
        $this->mail->Charset = 'UTF-8';
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);
        $this->mail->setFrom('from@example.com', 'Mailer');                                  
    }

    public function sendMail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName)
    {
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;

        $this->mail->addReplyTo($replyEmail, $replyName);
        $this->mail->addAddress($addressEmail, $addressName);

        try {
            $this->mail->send();
        } catch (Exception $e) {
            echo "Erro ao enviar o E-mail: {$this->mail->ErrorInfo} {$e->getMessage()}";
        }
    }
}