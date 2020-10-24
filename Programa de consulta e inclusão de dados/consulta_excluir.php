<?php
	// ligação entre o programa web e o banco de dados
	include "abrir_banco.php";

	$codigo = $_GET["codigo"];

	$executa2 = "SELECT codigo, nome, email, telefone FROM cadastro WHERE codigo=$codigo";

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
	<title>porTAAL - Exclusão</title>
</head>
<body>

<!-- ------------------------------------------------------------ -->

<fieldset>
<legend>
	Tela de exclusão de dados :
</legend>
<center>

<!-- Aqui começa o formulário de incluir dados  -->
    <form method="POST" action="excluir.php">

	<input type="hidden" name="txtcodigo" value="<?php echo $codigo ?>" >

	<font color="red">
	<h1> APAGAR CADASTRO </h1>
	</font>
	
	<h2>Tem certeza que deseja apagar o cadastro:</h2>
	<p><strong>NOME: <?php echo $nome ?></strong></p>
	<p><strong>E-MAIL: <?php echo $email ?></strong></p>
	<p><strong>TELEFONE: <?php echo $telefone ?></strong></p>

	<!--
	<table border="0">
	<tr>
	  <th>NOME:</th>
	  <td><input type="text" name="txtnome" maxlength="50" size="50" value="<?php //echo $nome ?>" required></td>
	</tr>
	<tr>
	  <th>E-MAIL: </th>
	  <td><input type="text" name="txtemail" maxlength="50" size="50" value="<?php //echo $email ?>" required></td>
	</tr>
	<tr>
	  <th>TELEFONE: </th>
	  <td><input type="text" name="txttelefone" maxlength="20" size="20" value="<?php //echo $telefone ?>" required></td>
	</tr>
	</table>
	-->
	<br>
	<input type="submit" value="Excluir" name="excluir">
	<!-- 
	<input type="reset" value="Limpar" name="limpar"> 
	-->
	<input type="button" value="Cancelar" name="cancelar"  onclick="location.href='consulta.php'"></p>
	</form>
</center>
   
<!-- Aqui termina o formulário de incluir dados, se necessário você pode substituí-lo pelo seu formulário -->
</fieldset>

</body>
</html>