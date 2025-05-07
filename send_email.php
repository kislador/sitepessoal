<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Configuração do e-mail
    $to = "ryanvacaro@gmail.com"; // Substitua pelo seu e-mail
    $subject = "Nova Inscrição na Newsletter";
    $message = "Novo usuário se inscreveu para a newsletter:\n\n" . "E-mail: " . $email;
    $headers = "From: no-reply@seudominio.com";

    // Envia o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Obrigado por se inscrever!";
    } else {
        echo "Ocorreu um erro. Tente novamente mais tarde.";
    }
}
?>
