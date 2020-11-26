<?php
// ligação entre o programa web e o banco de dados
include "abrir_banco.php";


// capturando os dados preenchidos pelo usuário e armazenando na memória (variáveis)

$login = $_POST["loginAdm"];
$pass = $_POST["senhaAdm"];

if(empty($login) or empty($pass)){
    echo "<center><h1>Digite um email e senha para continuar</h1></center>";
    echo"<script language='javascript' type='text/javascript'>
    alert('Digite seu Login e Senha para entrar!');window.location
    .href='../../login_adm.php'</script>";
    die();
}

$executa = "SELECT * FROM login_adm WHERE email_adm = '$login' and senha_adm = '$pass'";

    $query = $conn->query($executa);

    $dados = $query->fetch_object(); //fetch_object lê linha por linha do $query 
    if (isset($dados))
    {
        $cod =  $dados->codigo;
        $nome = $dados->nome_adm;
        $email = $dados->email_adm;
        $funcao = $dados->funçao_adm;
        $ativo = $dados->status_adm;

        session_start();
        $_SESSION["codigo"] = $cod;
        $_SESSION["nome"] = $nome;
        $_SESSION["email"] = $email;
        $_SESSION["funçao_adm"] = $funcao;

        
        if($ativo == 1){
        //echo "$cod - $nome - $email - $função";
        echo"código = $cod - nome= $nome - email= $email - função= $função'";
            header('location:../../consulta_myaccount.php');
         }else{
            echo"<script language='javascript' type='text/javascript'>
            alert('Atividade de usuario suspensa. Favor entrar em contato com a porTAAL. Obrigado!');window.location
            .href='../../contato.php'</script>";
            die();
            }
    }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Usuario ou senha inválidos!');window.location
        .href='../../login_adm.php'</script>";
        die();
    }    
