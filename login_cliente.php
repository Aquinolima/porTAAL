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
                    <div class="col-12 text-center my-3">
                        <h1 class="display-2"><i class="fas fa-user-astronaut display-3" style="color:#2E879B;"></i> Login <i class="fas fa-meteor display-3" style="color:#2E879B;"></i></h1>
                        <p>Bem-vindo ao sistema porTAAL! <br><br> Digite seu e-mail e senha!</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <form id="login-adm-form" name="login-adm-form" action="_assets/_php/valida_login_adm.php" method="POST">

                            <div class="form-group col-sm-4 my-0 mx-auto">
                                <label for="loginAdm" class="col-form-label">Login:</label>
                                <input type="text" name="loginAdm" class="form-control" id="contact-name">
                            </div>
                            <div class="form-group col-sm-4 my-0 mx-auto">
                                <label for="senha_cliente" class="col-form-label">Senha:</label>
                                <input type="password" name="senha_cliente" class="form-control" id="contact-phone">
                            </div>
                            <div class="form-group col-sm-4  my-3 mx-auto">
                                <button type="submit" class="btn btn-md " style="background-color: #2E879B; color: #f8f9fa;" style="background-color: #9B2B39;">Entrar</button>
                            </div>
                        </form>
                        <div class="form-group col-sm-4  my-3 mx-auto">
                            <a class="forget_pass" style="color: #9B2B39;" href="login_cliente.php">Esqueci minha senha!</a>
                        </div>
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

    <!-- Start Modal Login Clientes -->
    <div class="modal fade" id="form-modal-login-cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="color: #9B2B39;"><img src="_assets/_icons/logo_portaal.png" alt="logo porTAAL"> - porTAAL Arquitetura</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h5 class="modal-title text-center" style="color: #9B2B39;" id="exampleModalLabel">Login - Perfil de Cliente</h5>
                        <br>
                        <p>Bem-vindo ao sistema porTAAL! <br>Sigite seu email e senha para entrar.</p>
                    </div>
                    <hr>
                    <form id="login-adm-form" name="login-adm-form" action="_assets/_php/valida_login_adm.php" method="POST">
                        <div class="form-group">
                            <label for="loginAdm" class="col-form-label">Login:</label>
                            <input type="text" name="loginAdm" class="form-control" id="contact-name">
                        </div>
                        <div class="form-group">
                            <label for="senhaAdm" class="col-form-label">Senha:</label>
                            <input type="password" name="senhaAdm" class="form-control" id="contact-phone">
                        </div>
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-md " style="background-color: #9B2B39; color: #f8f9fa;" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-md " style="background-color: #2E879B; color: #f8f9fa;" style="background-color: #9B2B39;">Enviar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Start Modal Login Serviços -->
    <div class="modal fade" id="form-modal-login-serviços" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="color: #9B2B39;"><img src="_assets/_icons/logo_portaal.png" alt="logo porTAAL"> - porTAAL Arquitetura</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h5 class="modal-title text-center" style="color: #9B2B39;" id="exampleModalLabel">Login - Perfil de Serviços</h5>
                        <br>
                        <p>Bem-vindo ao sistema porTAAL! <br>Sigite seu email e senha para entrar.</p>
                    </div>
                    <hr>
                    <form id="login-adm-form" name="login-adm-form" action="_assets/_php/valida_login_adm.php" method="POST">
                        <div class="form-group">
                            <label for="loginAdm" class="col-form-label">Login:</label>
                            <input type="text" name="loginAdm" class="form-control" id="contact-name">
                        </div>
                        <div class="form-group">
                            <label for="senhaAdm" class="col-form-label">Senha:</label>
                            <input type="password" name="senhaAdm" class="form-control" id="contact-phone">
                        </div>
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-md " style="background-color: #9B2B39; color: #f8f9fa;" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-md " style="background-color: #2E879B; color: #f8f9fa;" style="background-color: #9B2B39;">Enviar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- End Modal -->


    <!-- jQuery, Popper.js, and Bootstrap JS  -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>