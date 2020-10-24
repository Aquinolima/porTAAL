<?php
	// ligação entre o programa web e o banco de dados
	include "abrir_banco.php";

	$codigo = $_GET["codigo"];

	$executa2 = "SELECT codigo, nome, email, telefone FROM alunos WHERE codigo=$codigo";

	$query = $mysqli->query($executa2);

	while ($dados = $query->fetch_object()) //fetch_object lê linha por linha do $query 
		{
			$nome = $dados->nome;
			$email = $dados->email;
			$telefone = $dados->telefone;
		}
	$query->free(); // libera a memória do servidor após cada consulta.
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>AULA</title>
</head>
<body>

<!-- ------------------------------------------------------------ -->

<fieldset>
<legend>
	Tela de alteração de dados :
</legend>

<!-- Aqui começa o formulário de incluir dados  -->
    <form method="POST" action="altera.php">

	<input type="hidden" name="txtcodigo" value="<?php echo $codigo ?>" >

	<font color="red">
	<h1> ALTERAÇÃO DE ALUNOS </h1>
	</font>

	<table border="0">
	<tr>
	  <th>NOME:</th>
	  <td><input type="text" name="txtnome" maxlength="50" size="50" value="<?php echo $nome ?>" required></td>
	</tr>
	<tr>
	  <th>E-MAIL: </th>
	  <td><input type="text" name="txtemail" maxlength="50" size="50" value="<?php echo $email ?>" required></td>
	</tr>
	<tr>
	  <th>TELEFONE: </th>
	  <td><input type="text" name="txttelefone" maxlength="20" size="20" value="<?php echo $telefone ?>" required></td>
	</tr>
    </table>
	<br>
	<input type="submit" value="Alterar" name="enviar">
	<!-- 
	<input type="reset" value="Limpar" name="limpar"> 
	-->
	<input type="button" value="Consultar" name="consultar"  onclick="location.href='consulta.php'"></p>
    </form>
   
<!-- Aqui termina o formulário de incluir dados, se necessário você pode substituí-lo pelo seu formulário -->
</fieldset>

</body>
</html>