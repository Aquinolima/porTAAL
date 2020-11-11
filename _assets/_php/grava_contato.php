<?php
// ligação entre o programa web e o banco de dados
include "abrir_banco.php";


// capturando os dados preenchidos pelo usuário e armazenando na memória (variáveis)
$nome = $_POST["name"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$assunto = $_POST["subject"];
$mensagem = $_POST["mensagem"];


// alunos é uma tabela no banco de dados
$executa = "INSERT INTO contato_site (nome_contato, email_contato, telefone_contato, assunto_contato, mensagem_contato) VALUES ('$nome','$email', '$telefone', '$assunto', '$mensagem')";


$resultado_form = mysqli_query($conn, $executa);


// Processo para enviar email com informações.

require_once('../_phpMailer/PHPMailer.php');
require_once('../_phpMailer/SMTP.php');
require_once('../_phpMailer/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'portaal.arquitetura@gmail.com';
    $mail->Password = 'portaal1221';
    $mail->Port = 587;

    $mail->setFrom('portaal.arquitetura@gmail.com');
    $mail->addAddress('portaal.arquitetura@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Contato Site do ' . $nome . '.';
    $mail->Body = 'Chegou um pedido de contato do <strong>' . $nome . '</strong>. <br>
    <strong>Assunto: </strong>' . $assunto . '<br>
    <strong>Mensagem: </strong>' . $mensagem . '<br>
    <strong>E-mail: </strong>' . $email . ' <strong>Telefone: </strong>' . $telefone . '.';
    $mail->AltBody = 'Chegou um pedido de contato! Verificar sistema.';


    if ($mail->send()) {
        echo "<script language='javascript' type='text/javascript'>
    window.location.href='sucesso_contato.php'</script>";
        die();
    } else {
        echo "alert('Erro ao enviar mensagem: {$mail->ErrorInfo}');";
    };
} catch (Exception $e) {
    echo "alert('Erro ao enviar mensagem: {$mail->ErrorInfo}');";
}

?>
