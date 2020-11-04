<!doctype html>
<html lang="pt-br">

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
                            <a class="nav-link btn btn-lg" href="cadastrar.php" role="button">Cadastrar</a>
                        </li>

                        <li class="nav-item my-3 mx-1">
                            <a class="nav-link btn btn-lg" href="login.php" role="button">Entrar</a>
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
                    <div class="col-12 text-center">
                        <h1 class="display-3" style="color: #9B2B39;">O que podemos fazer por você hoje?</h1>
                        <p class="lead"> Nós não vêmos a realização dos projetos como construções e reformas. Nossa
                            filosofia é realizar sonhos. </p>
                        <p class="lead"> E tudo começa com um traço!</p>
                        <hr>
                    </div>
                </div>
                <!-- Start Navpills -->
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-pills justify-content-center my-3" id="pills-nav" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="nav-pills-02" data-toggle="pill" href="#nav-item-02"><i class="fas fa-address-card" style="color: #f8f9fa;"></i> Sobre
                                    Nós</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="nav-pills-01" data-toggle="pill" href="#nav-item-01"> <i class="fas fa-paint-roller" style="color: #f8f9fa;"></i> Serviços</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav-pills-03" data-toggle="pill" href="#nav-item-03"><i class="fas fa-paper-plane" style="color: #f8f9fa;"></i> Contato</a>
                            </li>
                        </ul>


                        <div class="tab-content mt-5 px-5" id="nav-pills-content">

                            <!--Section: Serviços-->
                            <div class="tab-pane fade show active " id="nav-item-01" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-4 mt-4 text-center ">
                                        <p><i class="fas fa-search-dollar display-2" style="color: #2E879B;"></i></p>
                                        <p>Obtenha o preço e o tempo
                                            para o serviço desejado.</p>
                                    </div>
                                    <div class="col-sm-4 mt-4 text-center">
                                        <p><i class="fas fa-calendar-alt display-2" style="color: #2E879B;"></i></p>
                                        <p>Agende o melhor dia e horário
                                            para realização do serviço.</p>
                                    </div>
                                    <div class="col-sm-4 mt-4 text-center">
                                        <h1><i class="fas fa-handshake display-2" style="color:#2E879B;"></i></h1>
                                        <p>Tenha a garantia de 3 meses
                                            para os serviços realizados.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 mt-5 text-center ">
                                        <hr>
                                        <p class=" display-4" style="color: #9B2B39;"><b>Faça seu cadastro!</b></p>
                                        <hr>
                                        <ul class="nav nav-pills justify-content-center mt-5 " id="pills-nav" role="tablist">
                                            <li class="nav-item mx-2 my-2">
                                                <a class="nav-link" href="contato.php"><h3 >Cliente</h3></a>
                                            </li>
                                            <li class="nav-item mx-2 my-2">
                                                <a class="nav-link" href="contato.php"><h3>Serviços</h3></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <!--Section: Serviços-->
                            <!--Section: Sobre Nós-->

                            <div class="tab-pane fade" id="nav-item-02" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-12 col-lg-6 my-2 text-center">
                                        <!-- Start Embed -->
                                        <div class="embed-responsive embed-responsive-16by9 px-1">
                                            <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/gfkO-mec83Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <!-- End Embed -->
                                    </div>
                                    <div class="col-sm-12 col-lg-6 my-0 text-center">
                                        <div class="text-justify  px-1">
                                            <h2 class="display-4" style="color: #9B2B39;">Mais de 10 anos de
                                                experiência.
                                            </h2>
                                            <p>
                                                Somos um escritório de Arquitetura e Urbanismo que possui sede em
                                                Guarulhos-São Paulo,
                                                já está no mercado há mais de 20 anos, desenvolve projetos do mais
                                                elevado
                                                padrão,
                                                nas áreas industriais, comerciais, residenciais e corporativas.
                                                Para atingir tal finalidade a empresa conta com uma equipe de
                                                profissionais altamente qualificados e credenciados no CAU e CREA.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 my-0 text-center">
                                        <div class="text-justify  px-1">
                                            <p>
                                                Nós da TAAL não vê a realização dos projetos apenas como construções e
                                                reformas, mas como experiência de transformação na vida dos clientes.
                                                Com
                                                essa
                                                filosofia, é realizado um trabalho buscando a perfeição em cada detalhe
                                                necessário.
                                            </p>
                                            <p>
                                                Com essa filosofia criamos o porTAAL, um sistema que integra o cliente
                                                aos
                                                profissionais mais bem preparados do mercado com o selo de qualidade que
                                                só
                                                a TAAL Arquitetura possui.
                                                Afinal, seu sonho começa com um traço!
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!--Section: Sobre Nós-->

                            <!--Section: Contato-->
                            <div class="tab-pane fade" id="nav-item-03" role="tabpanel">
                                <div class="row">
                                    <section class="col-sm-12 my-0 text-center mb-4">
                                        <h2 class="text-center my-3 display-4" style="color: #9B2B39;">Contato</h2>
                                        <p class="text-center w-responsive mx-auto mb-5">Você tem alguma dúvida?
                                            Fale conosco agora mesmo. Nosso time respoderá em poucas horas.</p>

                                        <div class="row">

                                            <!--Form Contato-->
                                            <div class="col-md-9 mb-md-0 my-3">
                                                <form id="contact-form" name="contact-form" action="_assets/_php/grava_contato.php" method="POST">

                                                    <div class="row">

                                                        <div class="col-md-6 text-left">
                                                            <div class="md-form mb-0">
                                                                <label for="name" class="">Seu Nome</label>
                                                                <input type="text" id="name" name="name" class="form-control" maxlength="50" size="50" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 text-left">
                                                            <div class="md-form mb-0">
                                                                <label for="email" class="">Seu Email</label>
                                                                <input type="text" id="email" name="email" class="form-control" maxlength="50" size="50" required>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 text-left">
                                                            <div class="md-form mb-0">
                                                                <label for="subject" class="">Assunto</label>
                                                                <input type="text" id="subject" name="subject" class="form-control" maxlength="50" size="50" required>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 text-left">
                                                            <div class="md-form mb-0">
                                                                <label for="telefone" class="">Telefone</label>
                                                                <input type="text" id="telefone" name="telefone" class="form-control" maxlength="20" size="20" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12 text-left">

                                                            <div class="md-form">
                                                                <label class="" for="mensagem">Sua Mensagem</label>
                                                                <textarea type="text" id="message" name="mensagem" rows="2" class="form-control md-textarea" maxlength="400" size="50" required></textarea>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12 text-left">

                                                            <input class="btn btn-lg mt-3" style="background-color: #2E879B;                                                          border: none;
                                                            color: #f8f9fa;" id="btn-contact-sub" type="submit" value="Enviar" name="enviar">
                                                            <input class="btn btn-lg mt-3" style="background-color: #2E879B;                                                          border: none;
                                                            color: #f8f9fa;" id="btn-contact-res" type="reset" value="Limpar" name="limpar">
                                                        </div>
                                                    </div>


                                                </form>
                                            </div>
                                            <!--End - Form Contato-->


                                            <div class="col-md-3 text-center">
                                                <ul class="list-unstyled mb-0">
                                                    <li><i class="fas fa-map-marker-alt fa-2x" style="color: #9B2B39;"></i>
                                                        <p>Guarulhos, SP 07121-240</p>
                                                    </li>

                                                    <li><i class="fas fa-phone mt-4 fa-2x" style="color: #9B2B39;"></i>
                                                        <p>11 98571-8918 / 11 2468-8927</p>
                                                    </li>

                                                    <li><i class="fas fa-envelope mt-4 fa-2x" style="color: #9B2B39;"></i>
                                                        <p>taalarquitetura@gmail.com</p>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                    </section>
                                </div>
                            </div>
                            <!--Section: Contato-->
                        </div>
                    </div>
                </div>


                <!-- End Navpills -->

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
                    <a id="myAccount" href="login.php">My account</a>
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