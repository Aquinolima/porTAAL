<?php
// ligação entre o programa web e o banco de dados
include "_assets/_php/abrir_banco.php";

session_start();

if (isset($_SESSION["codigo"])) {
    echo $_SESSION["codigo"];
    echo $_SESSION["nome"];
} else {
    header('location:erro_de_login.php');
};

$nome = $_SESSION["nome"];
$id = $_SESSION["codigo"];
$email = $_SESSION["email"];

$atividade = "Ativo";

?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="_assets/_style/_css/style_cliente.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/all.css">

    <link rel="stylesheet" href="_assets/_style/_css/conf.css">

    <title>porTAAL Arquitetura - Clientes</title>
</head>

<body>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-mattBlackLight fixed-top" style="background-color: #287384;">
            <button class="navbar-toggler sideMenuToggler" style="color: #ecede8; " type="button">
                <i class="material-icons icon">
                    menu
                </i>
            </button>
            <a class="navbar-brand ml-2 mb-1 mr-auto " href="index.php"><img src="_assets/_icons/logo_portaal.png" alt="logo porTAAL"></a>
            <h4 class="text px-3 mr-auto ml-1" style="color: #ecede8"> porTAAL
            </h4>

            <button class="navbar-toggler" style="color: #ecede8;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="material-icons icon">
                    person
                </i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle p-0" style="color: #ecede8;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons icon">
                                person
                            </i>
                            <span class="text"> Perfil</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="dash_clientes_busca.php">Buscar</a>
                            <a class="dropdown-item" href="dash_clientes_editar.php">Configurações</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Sair
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div>
            <div class="wrapper d-flex ">

                <div class="sideMenu bg-mattBlackDark" style="background-color: #ecede8;" id="menulateral">

                    <div class="sidebar">

                        <div class="mb-5">
                            <img class="ml-4 my-3 mr-4" style="width: 70%;" src="_assets/_img/card5.jpg" alt="logo porTAAL">
                            <div class="text px-3" style="color: #FE7E01; font-weight: bold; font-size: 14px;">
                                <?php
                                echo $nome;
                                ?>
                            </div>
                            <div class="text px-3" style="color: #212121; font-size: 14px;">
                                <?php
                                echo $email;
                                ?>
                            </div>
                        </div>

                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a href="dash_clientes_busca.php" class="nav-link px-2 active">
                                            <i class="material-icons icon">person</i>
                                            <span class="text">Serviços</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dash_clientes_blog.php" class="nav-link px-2">
                                            <i class="material-icons icon">dashboard</i>
                                            <span class="text">Blog</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dash_clientes_editar.php" class="nav-link px-2">
                                            <i class="material-icons icon">settings</i>
                                            <span class="text">Configurações</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="mt-5">

                                    <div class="text px-3" style="color: #212121;  font-size: 14px;">
                                        <b> STATUS </b>
                                        <br>
                                        <?php
                                        echo $atividade;
                                        ?>
                                    </div>

                                    <br>

                                    <div class="text px-3" style="color: #212121;  font-size: 14px;">
                                        <b> ID </b>
                                        <br>
                                        <?php
                                        echo $id;
                                        ?>
                                    </div>

                                    <br>

                                    <div class="text px-3" style="color: #212121;  font-size: 14px;">
                                        <b> Último Serviço </b>
                                        <br>
                                        <?php
                                        echo $nome;
                                        ?>
                                    </div>

                                    <br>

                                    <div class="text px-3" style="color: #212121;  font-size: 14px;">
                                        <b> Localização </b>
                                        <br>
                                        <?php
                                        echo $nome;
                                        ?>
                                    </div>


                                </div>
                    </div>
                </div>


                <div class="content">
                    <main>
                        <div class="container-fluid">


                            <div class="row">
                                <div class="col-12 text-center">
                                    <h1 class="display-4 mt-3" style="color: #ecede8;"> <i> Arquitetos Cadastrados</i> </h1>
                                </div>
                            </div>

                            <hr>

                            <form name="cliente_pesquisa_serviços" action="_assets/_php/valida_pesquisa_cliente.php" method="POST">

                                <div class="row my-3">
                                    <div class="col-sm-4 col-md-4  mt-3 ml-auto">
                                        <input type="text" id="name" name="name" value="Pesquise pelo Nome..." class="form-control" maxlength="50" size="50" required>
                                    </div>
                                    <div class="col-sm-2 col-md-2 mt-3 mr-auto">
                                        <button type="submit" class="btn" style="background-color: #FE7E01; color:#ecede8;">Pesquisar</button>
                                    </div>
                                </div>
                            </form>


                            <div class="row">
                                <div class="col-sm-6 col-md-4 my-3 mx-auto">
                                    <div class="card  mb-5">
                                        <img class="card-img-top p-auto" src="_assets/_img/card2.jpg" alt="imagem-card">
                                        <div class="card-body">
                                            <h4 class="card-title">Nome:</h4>
                                            <h6 class="card-subtitle mb-2 text-muted">Profissão:</h6>
                                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                        </div>

                                        <div class="card-footer text-muted">
                                            <a href="#" class="card-link" style="color: #287384;" data-toggle="modal" data-target="#siteModal1"> <b> Portfólio </b> </a>
                                            <a href="#" class="card-link" style="color: #287384;" data-toggle="modal" data-target="#siteModal2"> <b> Saiba Mais </b></a>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <hr>
                            <div class="row mb-3">
                                <div class="col-12 text-center">
                                    <small class="mt-3" style="color: #ecede8;">porTAAL Arquitetura by <a style="color: #212121;" href="https://github.com/Aquinolima">Thiago Aquino</a></small>
                                </div>
                            </div>

                        </div>
                    </main>
                </div>



            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha256-OUFW7hFO0/r5aEGTQOz9F/aXQOt+TwqI1Z4fbVvww04=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js" integrity="sha256-qE/6vdSYzQu9lgosKxhFplETvWvqAAlmAuR+yPh/0SI=" crossorigin="anonymous"></script>
            <script src="_assets/_js/script.js"></script>






            <!-- Start Modal Logout -->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja sair?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Clique em "Sair" para realizar o Logout.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Continuar</button>
                            <a class="btn btn-info" href="_assets/_php/logout.php">Sair</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal Logout -->
            <!-- Start Modal 1 -->
            <div class="modal fade" id="siteModal1" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Portfólio do Profissional</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="_assets/_img/card1.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="_assets/_img/card2.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="_assets/_img/card3.jpg" alt="Third slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="_assets/_img/card4.jpg" alt="Forth slide">
                                        </div>

                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>








                            </div>
                        </div>
                        <div class="modal-footer mx-auto">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#siteModal3">Entrar em
                                contato</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal 1 -->
            <!-- Start Modal 2 -->

            <div class="modal fade" id="siteModal2" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Perfil do Profissional</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">

                                <div class="row">
                                    <div class="col-12 text-center">

                                        <img class="img-modal py-auto" style="width: 70%;" src="_assets/_img/card5.jpg" alt="imagem-card">
                                    </div>

                                    <div class="col-12">
                                        <h4>Nome: <?php
                                                    echo $nome;
                                                    ?></h4>
                                        <h6>Profissão: <?php
                                                        echo $nome;
                                                        ?></h6>
                                        <p>Sou um arquiteto e urbanista formado pela Universidade Guarulhos.
                                            Minha experiência inclui o desenho e gerenciamento de projetos, análise e interpretação de dados e o desenvolvimento e implementação
                                            de processos construtivos.
                                            Gosto de gerar novas ideias e desenvolver soluções viáveis para problemas amplamente relevantes.
                                            Meus colegas me descreveriam como uma pessoa motivada e engenhosa, que mantém uma atitude positiva e
                                            proativa diante das adversidades.
                                            Atualmente, estou buscando oportunidades que me permitam desenvolver e promover idéias projetos únicos e modernos.
                                            Os campos de especialidade incluem projetos em geral e maquetes 3D.</p>
                                    </div>
                                    <div class="col-4 text-center my-2">
                                        <div class="row">
                                            <div class="col-1 mt-2">
                                                <a href="https://facebook.com"><img src="_assets/_icons/_social/001-facebook.png" alt="logo Facebook" width="25px"></a>
                                            </div>
                                            <div class="col-1 pt-2">
                                                <a href="https://instagram.com"><img src="_assets/_icons/_social/011-instagram.png" alt="logo Instagram" width="25px"></a>
                                            </div>
                                            <div class="col-1 pt-2">
                                                <a href="https://twitter.com"><img src="_assets/_icons/_social/002-twitter.png" alt="logo Twitter" width="25px"></a>
                                            </div>
                                            <div class="col-1 pt-2">
                                                <a href="https://www.linkedin.com/"><img src="_assets/_icons/_social/010-linkedin.png" alt="logo Twitter" width="25px"></a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="modal-footer mx-auto">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#siteModal3">Entrar em
                                contato</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Modal 2 -->
            <!-- Start Modal 3 -->
            <div class="modal fade" id="siteModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nova mensagem</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label class="col-form-label">Nome Completo:</label>
                                    <input type="text" class="form-control" id="contact-name">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Telefone:</label>
                                    <input type="text" class="form-control" id="contact-phone">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Mensagem:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-info">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal 3 -->

    </body>

</html>