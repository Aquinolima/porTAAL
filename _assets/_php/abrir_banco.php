<?php

$servidor = 'localhost';
//$servidor = '127.0.0.1';
$usuario = 'root';
$senha = '';
$banco = 'portaal';

// Conecta-se ao banco de dados MySQL
$conn = mysqli_connect($servidor, $usuario, $senha, $banco);

// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

?>