<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'] ?? '';
    $empresa = $_POST['empresa'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $assunto = $_POST['assunto'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';

    $mail = new PHPMailer(true);
    try {
        // Configurações do servidor
        $mail->isSMTP();
        $mail->Host = 'Situsinformatica@gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'Situsinformatica@gmail.com'; // SEU E-MAIL
        $mail->Password = 'Situs123*';     // SENHA DE APP
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Remetente e destinatário
        $mail->setFrom('Situsinformatica@gmail.com', 'Situs Informática');
        $mail->addAddress('Uilian.c.s.souza@gmail.com'); // Pode ser o mesmo

        // Conteúdo
        $mail->isHTML(true);
        $mail->Subject = 'Novo contato via site - ' . $assunto;
        $mail->Body = "
            <strong>Nome:</strong> {$nome}<br>
            <strong>Empresa:</strong> {$empresa}<br>
            <strong>E-mail:</strong> {$email}<br>
            <strong>Telefone:</strong> {$telefone}<br><br>
            <strong>Mensagem:</strong><br>{$mensagem}
        ";

        $mail->send();
        echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href = 'index.html';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Erro ao enviar: {$mail->ErrorInfo}'); window.history.back();</script>";
    }
}
?>
