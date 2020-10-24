<?php
	// ligação entre o programa web e o banco de dados
	include "abrir_banco.php";
?>
<head>
<meta charset="UTF-8">
</head>
<fieldset>
<legend>
Tela de consulta de dados :
</legend>
<center>
<font color="red">
	<h1> CONSULTA DE ALUNOS</h1>
</font>
<table border ="1">
	<tr>
		<th>CODIGO</th>
		<th>NOME</th>
		<th>EMAIL</th>
		<th>TELEFONE</th>
		<th>ALTERAR</th>
		<th>EXCLUIR</th>
	</tr>


<?php
	$executa2 = "SELECT codigo, nome, email, telefone FROM alunos ORDER BY codigo";

	$query = $mysqli->query($executa2);

	while ($dados = $query->fetch_object()) //fetch_object lê linha por linha do $query 
		{
			$cod =  $dados->codigo;
			echo "<tr><th>" . $cod . "</th>";
			echo "<td>" . $dados->nome . "</td>";
			echo "<td>" . $dados->email . "</td>";
			echo "<td>" . $dados->telefone . "</td>";
			echo "<td>" . "<center><a href='consulta_alterar.php?codigo=$cod'><img src='alterar.png' width='20'></a></center>" . "</td>";
			echo "<td>" . "<center><a href='consulta_excluir.html?codigo=$cod'><img src='excluir.png' width='20'></a></center>" . "</td></tr>";
		}
		$query->free(); // libera a memória do servidor após cada consulta.

?>


</table>
<br>
<input type="button" value="Novo Aluno" name="novoAluno"  onclick="location.href='cadastro.html'"></p>

</center>
</fieldset>




