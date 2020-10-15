<?php

require __DIR__ . '/anime_lib/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail( subject: "Assunto de teste", body: "<p>Esse é um E-mail de <b>teste</b>!</p>", replyEmail: "astronauta3020@gmail.com", replyName: "Plebeu-Code", addressEmail: "astronauta2024@gmail.com", addressName: "Plebeu");
