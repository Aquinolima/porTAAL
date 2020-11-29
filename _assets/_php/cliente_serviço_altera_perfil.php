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

$desc = $_POST["descrição_cliente_serviço"];
$espec = $_POST["especialização_cliente_serviço"];


//$data = $_POST["data_cadastro_cliente"];




$executa = "UPDATE `perfil_serviço` SET `descrição_cliente_serviço`='$desc', `espec_cliente_serviço`='$espec'  WHERE `codigo`='$cod'";

$query = $conn->query($executa);


echo"<script language='javascript' type='text/javascript'>
            alert('Alterações feitas com sucesso!');window.location
            .href='../../dash_clientes_serviços_perfil.php'</script>";
            die();

?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="../_style/_css/style.css">
    <link rel="stylesheet" href="../node_modules/font-awesome/css/all.css">
    <script src="../../node_modules/font-awesome/js/all.js"></script>

    <title>porTAAL Arquitetura</title>
</head>

<body>
    <!-- Start Header with Navbar -->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light container">
                <a class="navbar-brand h1 mb-0" href="../../index.php"><img src="../_icons/logo_portaal.png" alt="logo porTAAL"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSite">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="../../index.php">Home <span class="sr-only">(página
                                    atual)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../about.php">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../contato.php">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://facebook.com"><img src="../_icons/_social/001-facebook.png" alt="logo Facebook" width="25px"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://twitter.com"><img src="../_icons/_social/002-twitter.png" alt="logo Twitter" width="25px"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://instagram.com"><img src="../_icons/_social/011-instagram.png" alt="logo Instagram" width="25px"></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item mx-1 my-3">
                            <a class="nav-link btn btn-lg" href="../../index.php" role="button">Sair</a>
                        </li>

                    </ul>
                </div>
            </nav>
            <hr class="navbar navbar-expand-lg navbar-light bg-light container">
        </div>
    </header>
    <!-- End Header with Navbar -->

    <div class="jumbotron jumbotron-fluid mb-0 py-5">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 my-0 text-center">

                 
                        <h2 class="display-4" style="color: #9B2B39;">Cadastro alterado com sucesso!</h2>
                        <br>
                        <input type="button" value="Voltar" name="cancelar" onclick="location.href='../../consulta_myaccount.php'"></p>
                    
                </div>

            </div>

        </div>
    </div>

    <!-- Start Footer -->
    <footer>
        <div class="container mt-0">
            <div class="row">
                <div class="col-12 ">
                    <hr>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-4">
                    <img class="logo-footer" src="../_img/portaal.png" alt="logo-portaal">
                </div>
                <div class="col-4 pt-2">
                    <ul class="list-group mb-3 ">
                        <li class="list-item">
                            <a class="list-link" href="../../index.php">Home</a>
                        </li>
                        <li class="list-item">
                            <a class="list-link" href="../../about.php">Sobre Nós</a>
                        </li>
                        <li class="list-item">
                            <a class="list-link" href="../../contato.php">Contato</a>
                        </li>
                    </ul>

                </div>
                <div class="col-4 pt-2">
                    <ul class="list-group mb-3 justify-content-center">
                        <li class="list-item">
                            <a class="list-link mx-2" href="https://facebook.com"><img src="../_icons/_social/001-facebook.png" alt="logo Facebook" width="25px"></a>

                            <a class="list-link mx-2" href="https://twitter.com"><img src="../_icons/_social/002-twitter.png" alt="logo Twitter" width="25px"></a>

                            <a class="list-link mx-2" href="https://instagram.com"><img src="../_icons/_social/011-instagram.png" alt="logo Instagram" width="25px"></a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->


    <!-- jQuery, Popper.js, and Bootstrap JS  -->
    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>

</html>