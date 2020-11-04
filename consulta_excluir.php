<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "portaal";

//Criar a conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$codigo = $_GET["codigo"];

$executa2 = "SELECT * FROM contato_site WHERE codigo=$codigo";

$result_contato = "SELECT * FROM contato_site ORDER BY codigo ";
$cod = "SELECT codigo FROM contato_site";
$resultado_contato = mysqli_query($conn, $result_contato);
$row_contato = mysqli_fetch_assoc($resultado_contato);
$total = mysqli_num_rows($resultado_contato);

?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="_assets/_style/_css/style.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/all.css">
    <script src="node_modules/font-awesome/js/all.js"></script>

    <title>porTAAL Arquitetura</title>
</head>

<body>
    <!-- Start Header with Navbar -->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light container">
                <a class="navbar-brand h1 mb-0" href="index.php"><img src="_assets/_icons/logo_portaal.png" alt="logo porTAAL"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSite">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(página
                                    atual)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato.php">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://facebook.com"><img src="_assets/_icons/_social/001-facebook.png" alt="logo Facebook" width="25px"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://twitter.com"><img src="_assets/_icons/_social/002-twitter.png" alt="logo Twitter" width="25px"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://instagram.com"><img src="_assets/_icons/_social/011-instagram.png" alt="logo Instagram" width="25px"></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item mx-1 my-3">
                            <a class="nav-link btn btn-lg" href="index.php" role="button">Sair</a>
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

                    <!-- Aqui começa o formulário de incluir dados  -->
                    <form method="POST" action="_assets/_php/excluir.php">

                        <input type="hidden" name="txtcodigo" value="<?php echo $codigo ?>">

                        <h2>Tem certeza que deseja apagar o cadastro:</h2>
                        <br>

                        <div class="col-sm-12 my-0 text-center">
                            <strong>
                                <tr>
                                    <th>Código: <?= $row_contato['codigo'] ?></th><br>
                                    <th>Nome: <?= $row_contato['nome_contato'] ?></th><br>
                                    <th>E-mail: <?= $row_contato['email_contato'] ?></th><br>
                                    <th>Telefone: <?= $row_contato['telefone_contato'] ?></th><br>
                                    <th>Assunto: <?= $row_contato['assunto_contato'] ?></th><br><br>
                                    <th>Mensagem:</Mensagem:> <?= $row_contato['mensagem_contato'] ?></th><br><br>
                                    <th>Data: <?= $row_contato['data_contato'] ?></th>
                                </tr>
                            </strong>
                            <br>
                        </div>

                        <br>
                        <input type="submit" value="Excluir" name="excluir">

                        <input type="button" value="Cancelar" name="cancelar" onclick="location.href='consulta_myacount.php'"></p>
                    </form>

                    <!-- Aqui termina o formulário de incluir dados, se necessário você pode substituí-lo pelo seu formulário -->

                    <br>
                </div>

            </div>
            <!-- Start Navpills -->
            <!--Section: Sobre Nós-->

            <div class="tab-pane fade" id="nav-item-02" role="tabpanel">

            </div>
            <!--Section: Sobre Nós-->

            <!-- End Navpills -->

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
                    <img class="logo-footer" src="_assets/_img/portaal.png" alt="logo-portaal">
                </div>
                <div class="col-4 pt-2">
                    <ul class="list-group mb-3 ">
                        <li class="list-item">
                            <a class="list-link" href="index.php">Home</a>
                        </li>
                        <li class="list-item">
                            <a class="list-link" href="about.php">Sobre Nós</a>
                        </li>
                        <li class="list-item">
                            <a class="list-link" href="contato.php">Contato</a>
                        </li>
                    </ul>

                </div>
                <div class="col-4 pt-2">
                    <ul class="list-group mb-3 justify-content-center">
                        <li class="list-item">
                            <a class="list-link mx-2" href="https://facebook.com"><img src="_assets/_icons/_social/001-facebook.png" alt="logo Facebook" width="25px"></a>

                            <a class="list-link mx-2" href="https://twitter.com"><img src="_assets/_icons/_social/002-twitter.png" alt="logo Twitter" width="25px"></a>

                            <a class="list-link mx-2" href="https://instagram.com"><img src="_assets/_icons/_social/011-instagram.png" alt="logo Instagram" width="25px"></a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->


    <!-- jQuery, Popper.js, and Bootstrap JS  -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>

</html>