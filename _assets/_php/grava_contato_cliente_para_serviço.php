<?php
// ligação entre o programa web e o banco de dados
include "abrir_banco.php";


// capturando os dados preenchidos pelo usuário e armazenando na memória (variáveis)
$nome = $_POST["nome_cliente"];
$email = $_POST["email_cliente"];
$cidade = $_POST["cidade_cliente"];
$estado = $_POST["estado_cliente"];
$celular = $_POST["celular_cliente"];
$mensagem = $_POST["mensagem_cliente"];
$emailServiço = $_POST["emailDoServiço"];

$pref_contato_email = $_POST["pref_contato_email"];
$pref_contato_cel = $_POST["pref_contato_cel"];


$resposta_checkbox = "$pref_contato_cel e $pref_contato_email";



// alunos é uma tabela no banco de dados
//$executa = "INSERT INTO contato_site (nome_contato, email_contato, telefone_contato, assunto_contato, mensagem_contato) VALUES ('$nome','$email', '$telefone', '$assunto', '$mensagem')";


//$resultado_form = mysqli_query($conn, $executa);


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
    $mail->addAddress($emailServiço);

    $mail->isHTML(true);
    $mail->Subject = 'Tem mensagem de Cliente da porTAAL Arquitetura';
    $mail->Body = 'Chegou um pedido de contato do <strong>' . $nome . '</strong> de  <strong>' . $cidade . '/' . $estado . '</strong>. <br>
    <strong>Mensagem: </strong>' . $mensagem . '<br>
    <strong>Preferência de contato por: </strong>' . $resposta_checkbox . '<br>
    <strong>E-mail: </strong>' . $email . ' <strong>Celular: </strong>' . $celular . '. <br>
    Favor entrar em contato o mais rápido possivel! <br>
    <br>
    Atenciosamente, Equipe porTAAL Arquitetura';
    $mail->AltBody = 'Chegou um pedido de contato do ' . $nome . ' de  ' . $cidade . '/' . $estado . '. <br>
    Mensagem: ' . $mensagem . '<br>
    Preferência de contato por: ' . $resposta_checkbox . '<br>
    E-mail: ' . $email . ' / Celular: ' . $celular . '. <br>
    Favor entrar em contato o mais rápido possivel! <br>
    <br>
    Atenciosamente, Equipe porTAAL Arquitetura';


    if ($mail->send()) {
        echo"<script language='javascript' type='text/javascript'>
            alert('Mensagem enviada com sucesso!');window.location
            .href='../../dash_clientes_busca.php'</script>";
            die();
    } else {
        echo "alert('Erro ao enviar mensagem: {$mail->ErrorInfo}');";
    };
} catch (Exception $e) {
    echo "alert('Erro ao enviar mensagem: {$mail->ErrorInfo}');";
}

?>
