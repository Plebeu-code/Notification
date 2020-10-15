<?php

require __DIR__ . '/anime_lib/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail( subject: "Assunto de teste", body: "<p>Esse é um E-mail de <b>teste</b>!</p>", replyEmail: "EmailY@email.com", replyName: "NomeY", addressEmail: "ParaX@email.com", addressName: "NomeX");
