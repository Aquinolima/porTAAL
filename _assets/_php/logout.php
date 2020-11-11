<?php
session_start();
unset($_SESSION["codigo"]);
echo"<script language='javascript' type='text/javascript'>
alert('Logout realizado com sucesso! Obrigado!');window.location
.href='../../index.php'</script>";
die();
?>