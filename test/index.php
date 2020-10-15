<?php

require __DIR__ . '/../vendor/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "mail.SeuHost.me", "SeuUser", "SuaSenha", "tls", '587', "EmailX@exemplo.com", "NomeX");
$novoEmail->sendMail("Assunto de teste", "<p>Esse é um E-mail de <b>teste</b>!</p>", "SeuEmail@exemplo.com", "SeuNome", "ParaX@exemplo.com", "NomeX");

var_dump($novoEmail);