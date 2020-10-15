<?php

require __DIR__ . '/../vendor/autoload.php';

use Notification\Email;

$novoEmail = new Email( smtpDebug: 2, host: "mail.SeuHost.me", user: "SeuUser", pass: "SuaSenha", smtpSecure: "tls", port: '587', setFromEmail: "EmailX@exemplo.com", setFromName: "NomeX");
$novoEmail->sendMail( subject: "Assunto de teste", body: "<p>Esse é um E-mail de <b>teste</b>!</p>", replyEmail: "SeuEmail@exemplo.com", replyName: "SeuNome", addressEmail: "ParaX@exemplo.com", addressName: "NomeX");

var_dump($novoEmail);