<?php
// ligação entre o programa web e o banco de dados
include "abrir_banco.php";


// capturando os dados preenchidos pelo usuário e armazenando na memória (variáveis)

$login = $_POST["loginAdm"];
$pass = $_POST["senhaAdm"];

$verificaLogin = "portaal@gmail.com";
$verificaSenha = "portaal";

if ($login == $verificaLogin && $pass == $verificaSenha) {
    header('Location: ../../consulta_myacount.php');
} else {
    echo"<script language='javascript' type='text/javascript'>
    alert('Login ou Senha inválidos');window.location
    .href='../../index.php'</script>";
}
?>

