<?php
// ligação entre o programa web e o banco de dados
include "abrir_banco.php";


// capturando os dados preenchidos pelo usuário e armazenando na memória (variáveis)
$cod = $_POST["txtcodigo"];
$nome = $_POST["txtnome"];
$email = $_POST["txtemail"];
$telefone = $_POST["txttelefone"];


// alunos é uma tabela no banco de dados
// $executa = "UPDATE INTO cadastro (nome, email, telefone) VALUES ('$nome','$email','$telefone') WHERE codigo=$codigo";
$executa = "UPDATE `cadastro` SET `nome`='$nome', `email`='$email', `telefone`=$telefone WHERE `codigo`=$cod";

$query = $mysqli->query($executa);


echo "<fieldset>";
echo "<center><img src='img/checked.png'>";
echo "<br><br><br>";
echo "<font color='red'>";
echo "<h1> Alteração realizada com sucesso<br>";
echo "<br><br>";
echo "<button type='button'><a href='consulta.php'>Consultar</a></button>";
echo "</font></center>";        
echo "</fieldset>";

?>