<?php
// ligação entre o programa web e o banco de dados
include "abrir_banco.php";


// capturando os dados preenchidos pelo usuário e armazenando na memória (variáveis)
$nome = $_POST["nome_cliente_serviço"];
$sobrenome = $_POST["sobrenome_cliente_serviço"];
$profissão = $_POST["profissão_cliente_serviço"];
//$cpf = $_POST["cpf_cliente_serviço"];
//$rg = $_POST["rg_cliente_serviço"];
$telefone = $_POST["telefone_cliente_serviço"];
$celular = $_POST["celular_cliente_serviço"];
$email = $_POST["email_cliente_serviço"];
$senha = $_POST["senha_cliente_serviço"];
$cep = $_POST["cep_cliente_serviço"];
$endereço = $_POST["endereço_cliente_serviço"];
$cidade = $_POST["cidade_cliente_serviço"];
$estado = $_POST["estado_cliente_serviço"];
$pref_email = $_POST["pref_email_cliente_serviço"];
$pref_cel = $_POST["pref_cel_cliente_serviço"];
//$status = $_POST["status_cliente_serviço"];
//$data = $_POST["data_cadastro_cliente_serviço"];
//$img_cliente = $_POST["img_perfil_cliente_serviço"];



// alunos é uma tabela no banco de dados
$executa = "INSERT INTO perfil_serviço (nome_cliente_serviço, sobrenome_cliente_serviço, profissão_cliente_serviço, 
telefone_cliente_serviço, celular_cliente_serviço, email_cliente_serviço, senha_cliente_serviço, 
endereço_cliente_serviço, cep_cliente_serviço, cidade_cliente_serviço, estado_cliente_serviço, 
pref_email_cliente_serviço, pref_cel_cliente_serviço) VALUES ('$nome','$sobrenome', '$profissão', '$telefone', 
'$celular', '$email', '$senha', '$endereço', '$cep', '$cidade', '$estado', '$pref_email', '$pref_cel')";


$resultado_form = mysqli_query($conn, $executa);
?>



<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="../_style/_css/style.css">
    <link rel="stylesheet" href="../../node_modules/font-awesome/css/all.css">
    <script src="../../node_modules/font-awesome/js/all.js"></script>
    <title>porTAAL Arquitetura</title>
</head>

<body>
    <!-- Start Header with Navbar -->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light container">
                <a class="navbar-brand h1 mb-0" href="index.php"><img src="../_icons/logo_portaal.png" alt="logo porTAAL"></a>
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
                        <li class="nav-item my-3 mx-1">
                            <a class="nav-link btn btn-lg" href="../../index.php" role="button">Voltar</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <hr class="navbar navbar-expand-lg navbar-light bg-light container">
        </div>
    </header>
    <!-- End Header with Navbar -->
    <main>
        <div class="jumbotron jumbotron-fluid mb-0 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center my-3">
                        <h1 class="display-2"><i class="fas fa-user-astronaut display-2" style="color:#2E879B;"></i> Cadastro realizado com sucesso! <i class="fas fa-meteor" style="color:#2E879B;"></i></h1>
                        <p>Quer fazer seu Login ou continuar navegando?</p>
                    </div>

                </div>
                <hr>
                <div class="row my-5">
                    <div class="col-12">
                        <ul class="nav nav-pills justify-content-center " id="pills-nav" role="tablist">
                            <li class="nav-item my-2">
                                <a class="nav-link text-center my-auto active" style="width: 10rem; height: 3rem;" id="nav-pills-01" data-toggle="pill" onclick="location.href='../../index.php'">
                                    <h4>Voltar</h4>
                                </a>
                            </li>
                            <li class="nav-item my-2">
                                <a class="nav-link text-center my-auto" style="width: 10rem; height: 3rem; color:whitesmoke" id="nav-pills-02" data-toggle="pill" onclick="location.href='../../login.php'">
                                    <h4>Login</h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row my-3 justify-content-center">
                    <div class="col-sm-4 col-xs-12 justify-content-center" style="width: 18rem;">
                        <div class=" text-center">
                            <h3><i class="fas fa-map-marker-alt mt-4 fa-2x" style="color: #9B2B39;"></i></h3>
                            <p>Guarulhos, SP 07121-240</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 justify-content-center" style="width: 18rem; ">
                        <div class=" text-center">
                            <h3><i class="fas fa-phone mt-4 fa-2x" style="color: #9B2B39;"></i></h3>
                            <p>11 98571-8918 / 11 2468-8927</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12 justify-content-center" style="width: 18rem; ">
                        <div class=" text-center">
                            <h3><i class="fas fa-envelope mt-4 fa-2x" style="color: #9B2B39;"></i></h3>
                            <p>taalarquitetura@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
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