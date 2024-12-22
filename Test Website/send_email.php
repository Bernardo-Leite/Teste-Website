<?php
// Configurações do e-mail
$to = "bernagaming@gmail.com"; // Substitua pelo seu endereço de e-mail
$subject = "Solicitação de Orçamento"; // Assunto do e-mail

// Captura os dados do formulário
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

// Validações simples
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail inválido!";
    exit;
}

// Monta a mensagem
$body = "Nome: $name\n";
$body .= "E-mail: $email\n";
$body .= "Mensagem:\n$message";

// Cabeçalhos do e-mail
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Envia o e-mail
if (mail($to, $subject, $body, $headers)) {
    echo "E-mail enviado com sucesso!";
} else {
    echo "Erro ao enviar o e-mail. Tente novamente.";
}
?>