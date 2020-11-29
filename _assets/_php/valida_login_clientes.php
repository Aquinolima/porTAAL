<?php
// ligação entre o programa web e o banco de dados
include "abrir_banco.php";


// capturando os dados preenchidos pelo usuário e armazenando na memória (variáveis)

$login = $_POST["loginClientes"];
$pass = $_POST["senhaClientes"];

if(empty($login) or empty($pass)){
    echo "<center><h1>Digite um email e senha para continuar</h1></center>";
    echo"<script language='javascript' type='text/javascript'>
    alert('Digite seu Login e Senha para entrar!');window.location
    .href='../../login_adm.php'</script>";
    die();
}

$executa = "SELECT * FROM perfil_cliente WHERE email_cliente = '$login' and senha_cliente = '$pass'";

    $query = $conn->query($executa);

    $dados = $query->fetch_object(); //fetch_object lê linha por linha do $query 
    if (isset($dados))
    {
        $cod =  $dados->codigo;
        $nome = $dados->nome_cliente;
        $sobrenome = $dados->sobrenome_cliente;
        $cpf = $dados->cpf_cliente;
        $rg = $dados->rg_cliente;
        $telefone = $dados->telefone_cliente;
        $celular = $dados->celular_cliente;
        $email = $dados->email_cliente;
        $senha = $dados->senha_cliente;
        $cep = $dados->cep_cliente;
        $endereço = $dados->endereço_cliente;
        $cidade = $dados->cidade_cliente;
        $estado = $dados->estado_cliente;
        $img_perfil = $dados->img_perfil_cliente;
        $ativo = $dados->status_cliente;

        session_start();
        $_SESSION["codigo"] = $cod;
        $_SESSION["nome_cliente_serviço"] = $nome;
        $_SESSION["sobrenome_cliente_serviço"] = $sobrenome;
        $_SESSION["email_cliente_serviço"] = $email;
        $_SESSION["cidade_cliente_serviço"] = $cidade;
        $_SESSION["estado_cliente_serviço"] = $estado;
               


        
        if($ativo == 1){
        //echo "$cod - $nome - $email - $função";
        echo"código = $cod - nome= $nome - email= $email";
            header('location:../../dash_clientes_busca.php');
         }else{
            echo"<script language='javascript' type='text/javascript'>
            alert('Atividade de usuario suspensa. Favor entrar em contato com a porTAAL. Obrigado!');window.location
            .href='../../contato.php'</script>";
            die();
            }
    }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Usuario ou senha inválidos!');window.location
        .href='../../login.php'</script>";
        die();
    }    
