<?php
include "abrir_banco.php";


$codigo = $_POST["codigo"];

$arquivo = $_FILES['arquivo']['name'];

$extensao = strtolower(substr($_FILES['arquivo']['name'], -5));
$novo_nome = md5(time()) . $extensao;
$diretorio = "../_img/_upload/";

echo $arquivo;
echo "<br>";
echo $codigo;
echo "<br>";
echo $diretorio;
echo "<br>";
echo $extensao;
echo "<br>";
echo $novo_nome;


move_uploaded_file($_FILES['arquivo']['tmp_name'],"../_img/_upload/".$novo_nome);

$arq_final = $diretorio . $novo_nome;


$executa = "UPDATE `perfil_cliente` SET `img_perfil_cliente`='$novo_nome' WHERE `codigo`='$codigo'";

$resultado_form = mysqli_query($conn, $executa);


echo"<script language='javascript' type='text/javascript'>
            alert('Alterações feitas com sucesso!');window.location
            .href='../../dash_clientes_editar.php'</script>";
            die();


?>

