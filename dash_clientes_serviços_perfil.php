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

    <title>porTAAL Arquitetura - Profissionais</title>
</head>

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
                        <a class="dropdown-item" href="dash_clientes_serviços_perfilbusca.php">Seu Perfil</a>
                        <a class="dropdown-item" href="dash_clientes_serviços_editar.php">Configurações</a>
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
                        <img class="ml-4 my-3 mr-4" style="width: 70%;" src="_assets/_img/card5.jpg" alt="img Cliente">
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
                            <a href="dash_clientes_serviços_perfil.php" class="nav-link px-2 active">
                                <i class="material-icons icon">person</i>
                                <span class="text">Perfil</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dash_clientes_serviços_blog.php" class="nav-link px-2 ">
                                <i class="material-icons icon">dashboard</i>
                                <span class="text">Blog</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dash_clientes_serviços_editar.php" class="nav-link px-2">
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
                            <b> Profissão </b>
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
                                <h1 class="display-4 mt-3" style="color: #ecede8;"> <i> Conte nos sobre você!</i> </h1>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-12 text-center">
                                <p class="mb-5" style="color: #ecede8;"> <b>O resumo do seu perfil é o seu cartão de visitas e o primeiro espaço a ser lido. Por isso, é super importante dedicar um tempinho 'contando sua história de forma atrativa, diferenciada e vendedora'.</b></p>
                                <p class="mb-5" style="color: #ecede8;"> <b>Lembre-se! - Essas informações serão sua apresntação aos clientes!</b></p>
                            </div>
                        </div>

                        <div class="row">




                            <div class="modal-content mx-3">
                                <div class="modal-header">
                                    <div>
                                        <h5 class="modal-title">
                                            <?php
                                            echo $nome;
                                            ?> -
                                            <?php
                                            echo $nome;
                                            ?></h5>
                                    </div>
                                    <div class="col-4  text-center pt-2 justify-content-center">
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
                                <div class="modal-body">
                                    <div class="container-fluid">

                                        <div class="row">
                                            <div class="col-12 text-center">

                                                <img class="img-modal py-auto" style="width: 70%;" src="_assets/_img/card5.jpg" alt="imagem-card">
                                            </div>
                                            <div class="col-12">
                                                <h4>Sobre Você:</h4>
                                                <h6>Descreva sua formação e caracteristicas suas como profissional.</h6>
                                                <form action="#" method="post">
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="caracteristicaProfissional" name="txt_serviços" rows="10">
Sou um arquiteto e urbanista formado pela Universidade Guarulhos.
Minha experiência inclui o desenho e gerenciamento de projetos, análise e interpretação de dados e o desenvolvimento e implementação de processos construtivos.
Gosto de gerar novas ideias e desenvolver soluções viáveis para problemas amplamente relevantes.
Meus colegas me descreveriam como uma pessoa motivada e engenhosa, que mantém uma atitude positiva e proativa diante das adversidades.
Atualmente, estou buscando oportunidades que me permitam desenvolver e promover idéias projetos únicos e modernos.
Os campos de especialidade incluem projetos em geral e maquetes 3D.</textarea>
                                                    </div>
                                            </div>
                                            <div class="col-12  text-center pt-2">
                                                <button type="submit" class="btn btn-info">Salvar Descrição</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>



                                <div class="modal-footer mx-auto">

                                    <div class="row">
                                        <div class="col-12">
                                            <h4>Seu Portfólio:</h4>
                                            <h6>Selecione até 4 Imagens para seu Portfólio.</h6>

                                            <div class="row">
                                                <div class="col-6  text-center pt-2">
                                                    <form class="form">
                                                        <div class="form-group">
                                                            <div class="col-12 text-center">

                                                                <img class="img-modal py-auto" style="width: 70%;" src="_assets/_img/card5.jpg" alt="imagem-card">
                                                            </div>
                                                            <label for="port1">Imagem 1</label>
                                                            <input type="file" class="form-control-file" id="port1">
                                                            <button type="submit" class="btn btn-info">Salvar Imagem 1</button>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="col-6  text-center pt-2">
                                                    <form class="form">
                                                        <div class="form-group">
                                                            <div class="col-12 text-center">

                                                                <img class="img-modal py-auto" style="width: 70%;" src="_assets/_img/card5.jpg" alt="imagem-card">
                                                            </div>
                                                            <label for="port1">Imagem 2</label>
                                                            <input type="file" class="form-control-file" id="port1">
                                                            <button type="submit" class="btn btn-info">Salvar Imagem 2</button>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="col-6  text-center pt-2">
                                                    <form class="form">
                                                        <div class="form-group">
                                                            <div class="col-12 text-center">

                                                                <img class="img-modal py-auto" style="width: 70%;" src="_assets/_img/card5.jpg" alt="imagem-card">
                                                            </div>
                                                            <label for="port1">Imagem 3</label>
                                                            <input type="file" class="form-control-file" id="port1">
                                                            <button type="submit" class="btn btn-info">Salvar Imagem 3</button>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="col-6  text-center pt-2">
                                                    <form class="form">
                                                        <div class="form-group">
                                                            <div class="col-12 text-center">

                                                                <img class="img-modal py-auto" style="width: 70%;" src="_assets/_img/card5.jpg" alt="imagem-card">
                                                            </div>
                                                            <label for="port1">Imagem 4</label>
                                                            <input type="file" class="form-control-file" id="port1">
                                                            <button type="submit" class="btn btn-info">Salvar Imagem 4</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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
</body>

</html>