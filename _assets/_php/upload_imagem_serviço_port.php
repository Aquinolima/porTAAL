<?php
include "abrir_banco.php";


$codigo = $_POST["codigo"];

$arquivo1 = $_FILES['port1']['name'];
$arquivo2 = $_FILES['port2']['name'];
$arquivo3 = $_FILES['port3']['name'];
$arquivo4 = $_FILES['port4']['name'];

$extensao1 = strtolower(substr($_FILES['port1']['name'], -5));
$extensao2 = strtolower(substr($_FILES['port2']['name'], -5));
$extensao3 = strtolower(substr($_FILES['port3']['name'], -5));
$extensao4 = strtolower(substr($_FILES['port4']['name'], -5));

$novo_nome1 = md5(time()) . $extensao1;
$novo_nome2 = md5(time()) . $extensao2;
$novo_nome3 = md5(time()) . $extensao3;
$novo_nome4 = md5(time()) . $extensao4;

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


move_uploaded_file($_FILES['port1']['tmp_name'],"../_img/_upload/".$novo_nome1);
move_uploaded_file($_FILES['port2']['tmp_name'],"../_img/_upload/".$novo_nome2);
move_uploaded_file($_FILES['port3']['tmp_name'],"../_img/_upload/".$novo_nome3);
move_uploaded_file($_FILES['port3']['tmp_name'],"../_img/_upload/".$novo_nome4);

$arq_final = $diretorio . $novo_nome;


$executa = "UPDATE `perfil_serviço` SET `port1_serviço`='$novo_nome1', `port2_serviço`='$novo_nome2', `port3_serviço`='$novo_nome3', `port4_serviço`='$novo_nome4' WHERE `codigo`='$codigo'";

$resultado_form = mysqli_query($conn, $executa);


echo"<script language='javascript' type='text/javascript'>
            alert('Alterações feitas com sucesso!');window.location
            .href='../../dash_clientes_serviços_editar.php'</script>";
            die();


?>

