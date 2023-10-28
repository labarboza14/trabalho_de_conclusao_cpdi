<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Valida os dados
    if(empty($nome) || empty($email) || empty($mensagem)){
        echo "Por favor, preencha todos os campos";
    } else {
        // Envia o email
        $destinatario = "gloriarbarboza@gmail.com";
        $assunto = "Formulário de Contato";
        $mensagemCompleta = "Nome: " . $nome . "\nEmail: " . $email . "\nMensagem: " . $mensagem;
        $headers = "From: " . $email;

        if(mail($destinatario, $assunto, $mensagemCompleta, $headers)){
            echo "Mensagem enviada com sucesso!";
        } else {
            echo "Ocorreu um erro ao enviar a mensagem";
        }
    }
}
?>

