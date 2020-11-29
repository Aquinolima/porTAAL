<?php
// ligação entre o programa web e o banco de dados
include "abrir_banco.php";


// capturando os dados preenchidos pelo usuário e armazenando na memória (variáveis)

$login = $_POST["loginServiço"];
$pass = $_POST["senhaServiço"];

if(empty($login) or empty($pass)){
    echo "<center><h1>Digite um email e senha para continuar</h1></center>";
    echo"<script language='javascript' type='text/javascript'>
    alert('Digite seu Login e Senha para entrar!');window.location
    .href='../../login_adm.php'</script>";
    die();
}

$executa = "SELECT * FROM perfil_serviço WHERE email_cliente_serviço = '$login' and senha_cliente_serviço = '$pass'";

    $query = $conn->query($executa);

    $dados = $query->fetch_object(); //fetch_object lê linha por linha do $query 
    if (isset($dados))
    {
        $cod =  $dados->codigo;
        $nome = $dados->nome_cliente_serviço;
        $sobrenome = $dados->sobrenome_cliente_serviço;
        $profissão = $dados->profissão_cliente_serviço;
        $cpf = $dados->cpf_cliente_serviço;
        $rg = $dados->rg_cliente_serviço;
        $telefone = $dados->telefone_cliente_serviço;
        $celular = $dados->celular_cliente_serviço;
        $email = $dados->email_cliente_serviço;
        $senha = $dados->senha_cliente_serviço;
        $cep = $dados->cep_cliente_serviço;
        $endereço = $dados->endereço_cliente_serviço;
        $cidade = $dados->cidade_cliente_serviço;
        $estado = $dados->estado_cliente_serviço;
        $img_perfil = $dados->img_perfil_cliente_serviço;
        $face = $dados->cliente_serviço_face;
        $insta = $dados->cliente_serviço_insta;
        $twitter = $dados->cliente_serviço_twitter;
        $linkedin = $dados->cliente_serviço_linkedin;
        $port_img_1 = $dados->port1_perfil_cliente_serviço;
        $port_img_2 = $dados->port2_perfil_cliente_serviço;
        $port_img_3 = $dados->port3_perfil_cliente_serviço;
        $port_img_4 = $dados->port4_perfil_cliente_serviço;
        $espec = $dados->espec_cliente_serviço;
        $descrição = $dados->descrição_cliente_serviço;
        $ativo = $dados->status_cliente_serviço;

        session_start();
        $_SESSION["codigo"] = $cod;
        $_SESSION["nome_cliente_serviço"] = $nome;
        $_SESSION["sobrenome_cliente_serviço"] = $sobrenome;
        $_SESSION["email_cliente_serviço"] = $email;
        $_SESSION["profissão_cliente_serviço"] = $profissão;
        $_SESSION["cidade_cliente_serviço"] = $cidade;
        $_SESSION["estado_cliente_serviço"] = $estado;
        $_SESSION["descrição_cliente_serviço"] = $descrição;
        $_SESSION["espec_cliente_serviço"] = $espec;
        $_SESSION["cliente_serviço_face"] = $face;
        $_SESSION["cliente_serviço_insta"] = $insta;
        $_SESSION["cliente_serviço_twitter"] = $twitter;
        $_SESSION["cliente_serviço_linkedin"] = $linkedinn;
       
        


        
        if($ativo == 1){
        //echo "$cod - $nome - $email - $função";
        echo"código = $cod - nome= $nome - email= $email - função= $profissão'";
            header('location:../../dash_clientes_serviços_perfil.php');
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
