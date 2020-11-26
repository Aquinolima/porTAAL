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

    <title>porTAAL Arquitetura - Clientes</title>
</head>

<body>
    <!-- 
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
                            <a class="nav-link btn btn-lg" href="_assets/_php/logout.php" role="button">Sair</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <hr class="navbar navbar-expand-lg navbar-light bg-light container">
        </div>
    </header>    
    -->

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
                            <a class="dropdown-item" href="#">Buscar</a>
                            <a class="dropdown-item" href="#">Configurações</a>
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
                                <a href="#" class="nav-link px-2">
                                    <i class="material-icons icon">
                                        person
                                    </i>
                                    <span class="text">Perfil</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link px-2">
                                    <i class="material-icons icon">
                                        dashboard
                                    </i>
                                    <span class="text">Serviços</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link px-2">
                                    <i class="material-icons icon">
                                        settings
                                    </i>
                                    <span class="text">Configurações</span>
                                </a>
                            </li>

                            <!--
                            <li class="nav-item">
                                <a href="#" class="nav-link  sideMenuToggler px-2">
                                    <i class="material-icons icon expandView ">
                                        code
                                    </i>

                                    <span class="text">Esconder</span>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="#" class="nav-link px-2">
                                    <i class="material-icons icon"> insert_chart </i><span class="text">Charts</span></a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link px-2">
                                    <i class="material-icons icon">
                                        pages
                                    </i>
                                    <span class="text">Pages</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link px-2">
                                    <i class="material-icons icon">
                                        computer
                                    </i>
                                    <span class="text">Demo</span>
                                </a>
                            </li>
                            
                            -->

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
                            <!-- 

                            <div class="row">
                                <div class="col-md-4 my-3">
                                    <div class="bg-mattBlackLight px-3 py-3">
                                        <h4 class="mb-2">New Clients</h4>
                                        <div class="progress" style="height: 16px;">
                                            <div class="progress-bar bg-warning text-mattBlackDark" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                25
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-3">
                                    <div class="bg-mattBlackLight px-3 py-3">
                                        <h4 class="mb-2">New Projects</h4>
                                        <div class="progress" style="height: 16px;">
                                            <div class="progress-bar bg-info text-mattBlackDark" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                50
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-3">
                                    <div class="bg-mattBlackLight p-3">
                                        <h4 class="mb-2">Completed</h4>
                                        <div class="progress" style="height: 16px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                80
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="bg-mattBlackLight my-2 p-3">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Ratione libero totam rerum eos nam ab perspiciatis voluptatum
                                        in. Quidem natus autem quae. Velit accusamus sit, perspiciatis
                                        sunt earum tempora veniam.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bg-mattBlackLight my-2 p-3">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Ratione libero totam rerum eos nam ab perspiciatis voluptatum
                                        in. Quidem natus autem quae. Velit accusamus sit, perspiciatis
                                        sunt earum tempora veniam.
                                    </div>
                                </div>
                            </div>

-->

                            <form>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <input type="text" class="form-control" name="pesquisaNome" value="Nome">
                                        <small id="emailHelp" class="form-text"  style="color:#ecede8;">Pesquise pelo nome do profissional ou pela profissão.</small>
                                    </div>
                                    <div class="col-md-2 mb-3 ">
                                        <select class="custom-select" id="validationCustom04" required>
                                            <option selected disabled value="">Profissão...</option>
                                            <option>Todas</option>
                                            <option>Arquiteto</option>
                                            <option>Bombeiro Civil</option>
                                            <option>Decorador</option>
                                            <option>Designer</option>
                                            <option>Engenheiro</option>
                                            <option>Projetista</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 mb-3 mr-auto ">
                                        <button type="submit" class="btn" style="background-color: #FE7E01; color:#ecede8;">Pesquisar</button>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-sm-6 col-md-4 my-3 mx-auto">
                                    <div class="card  mb-5">
                                        <img class="card-img-top p-auto" src="_assets/_img/card2.jpg" alt="imagem-card">
                                        <div class="card-body">
                                            <h4 class="card-title">Título</h4>
                                            <h6 class="card-subtitle mb-2 text-muted">Subtítulo</h6>
                                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                            <a href="#" class="card-link" style="color: #287384;" data-toggle="modal" data-target="#siteModal1"> <b>Acessar</b> </a>
                                            <a href="#" class="card-link" style="color: #287384;" data-toggle="modal" data-target="#siteModal2"> <b> Saiba Mais </b></a>
                                        </div>

                                        <div class="card-footer text-muted">
                                            Texto de rodapé
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 my-3 mx-auto">
                                    <div class="card  mb-5">
                                        <img class="card-img-top p-auto" src="_assets/_img/card2.jpg" alt="imagem-card">
                                        <div class="card-body">
                                            <h4 class="card-title">Título</h4>
                                            <h6 class="card-subtitle mb-2 text-muted">Subtítulo</h6>
                                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                            <a href="#" class="card-link" style="color: #287384;" data-toggle="modal" data-target="#siteModal1"> <b>Acessar</b> </a>
                                            <a href="#" class="card-link" style="color: #287384;" data-toggle="modal" data-target="#siteModal2"> <b> Saiba Mais </b></a>
                                        </div>

                                        <div class="card-footer text-muted">
                                            Texto de rodapé
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 my-3 mx-auto">
                                    <div class="card  mb-5">
                                        <img class="card-img-top p-auto" src="_assets/_img/card2.jpg" alt="imagem-card">
                                        <div class="card-body">
                                            <h4 class="card-title">Título</h4>
                                            <h6 class="card-subtitle mb-2 text-muted">Subtítulo</h6>
                                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                            <a href="#" class="card-link" style="color: #287384;" data-toggle="modal" data-target="#siteModal1"> <b>Acessar</b> </a>
                                            <a href="#" class="card-link" style="color: #287384;" data-toggle="modal" data-target="#siteModal2"> <b> Saiba Mais </b></a>
                                        </div>

                                        <div class="card-footer text-muted">
                                            Texto de rodapé
                                        </div>
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
                            <h5 class="modal-title">Título Modal</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Texto descrição Modal.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                but also the leap into electronic typesetting, remaining essentially unchanged. It was
                                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                and more recently with desktop publishing software like Aldus PageMaker including versions of
                                Lorem Ipsum.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                but also the leap into electronic typesetting, remaining essentially unchanged. It was
                                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                and more recently with desktop publishing software like Aldus PageMaker including versions of
                                Lorem Ipsum.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                but also the leap into electronic typesetting, remaining essentially unchanged. It was
                                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                and more recently with desktop publishing software like Aldus PageMaker including versions of
                                Lorem Ipsum.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                but also the leap into electronic typesetting, remaining essentially unchanged. It was
                                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                and more recently with desktop publishing software like Aldus PageMaker including versions of
                                Lorem Ipsum.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
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
                            <h5 class="modal-title">Título Modal</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-6">
                                        <h4>Título</h4>
                                        <h6>Subtítulo</h6>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                            been
                                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                            galley
                                            of type and scrambled it to make a type specimen book. It has survived not only five
                                            centuries,
                                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                            and more recently with desktop publishing software like Aldus PageMaker including versions of
                                            Lorem Ipsum.</p>
                                    </div>
                                    <div class="col-6">
                                        <img class="img-modal py-auto" src="_assets/_img/card6.jpg" alt="imagem-card">
                                        <img class="img-modal py-auto" src="_assets/_img/card5.jpg" alt="imagem-card">
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