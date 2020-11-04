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
                        <li class="nav-item my-3 mx-1">
                            <a class="nav-link btn btn-lg" href="index.php" role="button">Voltar</a>
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
                    <div class="row">
                        <section class="col-sm-12 my-0 text-center mb-4">
                            <h2 class="text-center my-3 display-4" style="color: #9B2B39;">Cadastrar</h2>
                            <p class="text-center w-responsive mx-auto mb-5">Quer fazer parte do sistema porTAAL? <br>
                                Preencha os campos para iniciar seu cadastro.</p>

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
                <!-- Start Navpills -->
                <!--Section: Contato-->
                <div class="tab-pane fade" id="nav-item-03" role="tabpanel">

                </div>
                <!--Section: Contato-->

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