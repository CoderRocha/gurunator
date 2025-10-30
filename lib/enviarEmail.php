<?php

use PHPMailer\PHPMailer\PHPMailer;

function enviarEmail($destinatario, $assunto, $mensagemHTML)
{
    require 'vendor/autoload.php'; // Carrega a biblioteca do PHPMailer
    
    // Criação do objeto PHPMailer
    $mail = new PHPMailer;
    $mail->isSMTP(); // Definir como SMTP
    $mail->SMTPDebug = 0; // Não exibir debug
    $mail->Host = 'smtp.exemplo.com.br'; // Servidor SMTP
    $mail->Port = 587; // Porta do SMTP
    $mail->SMTPAuth = true; // Habilita autenticação SMTP
    $mail->Username = 'teste@exemplo.com.br'; // Nome de usuário SMTP
    $mail->Password = 'password'; // Senha SMTP
    $mail->SMTPSecure = false; // Não usa criptografia TLS/SSL
    $mail->isHTML(true); // Define que o corpo do e-mail é em HTML
    $mail->CharSet = 'UTF-8'; // Define o charset do e-mail

    // Configuração do remetente e destinatário
    $mail->setFrom('teste@zerobugs.com.br', 'Teste Zero Bugs');
    $mail->addAddress($destinatario); // Endereço de destino
    $mail->Subject = $assunto; // Assunto do e-mail
    $mail->Body = $mensagemHTML; // Corpo da mensagem em HTML

    // Envia o e-mail
    if ($mail->send()) {
        return true; // Se o envio for bem-sucedido, retorna true
    } else {
        return false; // Se ocorrer um erro, retorna false
    }
}