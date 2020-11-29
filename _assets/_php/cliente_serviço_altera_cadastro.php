<?php
// ligação entre o programa web e o banco de dados
include "abrir_banco.php";

session_start();

if (isset($_SESSION["codigo"])) {
    echo $_SESSION["codigo"];
    echo $_SESSION["nome"];
} else {
    header('location:erro_de_login.php');
};



// capturando os dados preenchidos pelo usuário e armazenando na memória (variáveis)
$cod = $_POST["txtcodigo"];

$nome = $_POST["nome_cliente_serviço"];
$sobrenome = $_POST["sobrenome_cliente_serviço"];
$endereço = $_POST["endereço_cliente_serviço"];
$cep = $_POST["cep_cliente_serviço"];
$cidade = $_POST["cidade_cliente_serviço"];
$estado = $_POST["estado_cliente_serviço"];
$telefone = $_POST["telefone_cliente_serviço"];
$celular = $_POST["celular_cliente_serviço"];
$rg = $_POST["rg_cliente_serviço"];
$cpf = $_POST["cpf_cliente_serviço"];
$email = $_POST["email_cliente_serviço"];
$senha = $_POST["senha_cliente_serviço"];
$profissão = $_POST["profissão_cliente_serviço"];
$face = $_POST["cliente_serviço_face"];
$insta = $_POST["cliente_serviço_insta"];
$twitter = $_POST["cliente_serviço_twitter"];
$linkedin = $_POST["cliente_serviço_linkedin"];
$pref_contato_email = $_POST["pref_contato_email"];
$pref_contato_cel = $_POST["pref_contato_cel"];


$resposta_checkbox = "$pref_contato_cel e $pref_contato_email";





$executa = "UPDATE `perfil_serviço` SET `nome_cliente_serviço`='$nome', `sobrenome_cliente_serviço`='$sobrenome' 
, `profissão_cliente_serviço`='$profissão', `cpf_cliente_serviço`='$cpf', `rg_cliente_serviço`='$rg', `telefone_cliente_serviço`='$telefone'
, `celular_cliente_serviço`='$celular', `sobrenome_cliente_serviço`='$sobrenome', `email_cliente_serviço`='$email'
, `senha_cliente_serviço`='$senha', `cep_cliente_serviço`='$cep', `cidade_cliente_serviço`='$cidade'
, `endereço_cliente_serviço`='$endereço', `estado_cliente_serviço`='$estado', `pref_contato`='$resposta_checkbox'
, `cliente_serviço_face`='$face', `cliente_serviço_insta`='$insta', `cliente_serviço_twitter`='$twitter', `cliente_serviço_linkedin`='$linkedin' WHERE `codigo`='$cod'";

$query = $conn->query($executa);


echo"<script language='javascript' type='text/javascript'>
            alert('Alterações feitas com sucesso!');window.location
            .href='../../dash_clientes_serviços_editar.php'</script>";
            die();

?>