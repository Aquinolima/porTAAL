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
                        <h1 class="display-2"><i class="fas fa-user-astronaut display-2" style="color:#2E879B;"></i> Cadastrar <i class="fas fa-meteor" style="color:#2E879B;"></i></h1>
                        <p>Quer fazer parte do sistema porTAAL? <br><br> Em qual perfil você quer cadastrar?</p>
                    </div>

                </div>
                <hr>
                <div class="row my-5">
                    <div class="col-12">
                        <ul class="nav nav-pills justify-content-center " id="pills-nav" role="tablist">
                            <li class="nav-item my-2">
                                <a id="formCliente" data-toggle="modal" data-target="#form-modal-cadastro-cliente" class="nav-link text-center my-auto active" style="width: 10rem; height: 3rem;" id="nav-pills-01" data-toggle="pill" href="#nav-item-01">
                                    <h4>Cliente</h4>
                                </a>
                            </li>
                            <li class="nav-item my-2">
                                <a id="formServiços" data-toggle="modal" data-target="#form-modal-cadastro-serviços" class="nav-link text-center my-auto" style="width: 10rem; height: 3rem;" id="nav-pills-02" data-toggle="pill" href="#nav-item-02">
                                    <h4>Serviços</h4>
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

    <!-- Start Modal Cadastro Clientes -->
    <div class="modal fade" id="form-modal-cadastro-cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="color: #9B2B39;"><img src="_assets/_icons/logo_portaal.png" alt="logo porTAAL"> - porTAAL Arquitetura</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h5 class="modal-title text-center" style="color: #9B2B39;" id="exampleModalLabel">Cadastro - Perfil de Cliente</h5>
                        <br>
                        <p>Bem-vindo ao sistema porTAAL! <br>Preencha os campos para realizar seu cadastro.</p>
                    </div>
                    <hr>



                    <form id="cadastro-cliente-form" name="cadastro-cliente-form" action="_assets/_php/grava_cadastro_cliente.php" method="POST">
                        <div class="row justify-content-center mb-5 mx-3">

                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <label for="inputNome">Seu Nome</label>
                                    <input type="text" name="nome_cliente" class="form-control" id="inputNome" placeholder="Nome" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="inputSobrenome">Seu Sobrenome</label>
                                    <input type="text" name="sobrenome_cliente" class="form-control" id="inputSobrenome" placeholder="Sobrenome" required>
                                </div>

                                <!-- 
                                <div class="form-group col-sm-12">
                                    <label for="inputEnd">Seu Endereço</label>
                                    <input type="text" name="endereço_cliente" class="form-control" id="inputEnd" placeholder="Enderço completo" required>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="inputCep">Seu CEP</label>
                                    <input type="text" name="cep_cliente" class="form-control" id="inputCep" placeholder="Cep" required>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="inputCidade">Sua Cidade</label>
                                    <input type="text" name="cidade_cliente" class="form-control" id="inputCidade" placeholder="Cidade" required>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="selectEst">Seu Estado</label>
                                    <select name="estado_cliente" id="selectEst" class="form-control" required>
                                        <option value="..." selected>Escolha ...</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                        <option value="EX">Estrangeiro</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="inputTel">Seu Telefone</label>
                                    <input type="text" name="telefone_cliente" class="form-control" id="inputTel" placeholder="Telefone" required>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="inputCel">Seu Celular</label>
                                    <input type="text" name="celular_cliente" class="form-control" id="inputCel" placeholder="Celular" required>
                                </div>
                                -->
                                <div class="form-group col-sm-6">
                                    <label for="inputEmail">Seu E-mail </label>
                                    <input type="text" name="email_cliente" class="form-control" id="inputEmail" placeholder="E-mail" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="inputPass">Sua Senha </label>
                                    <input type="password" name="senha_cliente" class="form-control" id="inputPass" placeholder="Senha" required>
                                </div>

                                <div class="form-group col-sm-6">
                                    <div class="form-check mt-3">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="pref_contato_email" value="email" class="form-check-input" id="inputCheckEmail"> Desejo receber
                                            novidades por e-mail!
                                        </label>
                                        <label class="form-check-label">
                                            <input type="checkbox" name="pref_contato_cel" value="celular" class="form-check-input" id="inputCheckCel"> Desejo receber
                                            novidades por whatsApp!
                                        </label>
                                    </div>
                                </div>

                               


                                <div class="modal-footer ">
                                    <button type="button" class="btn btn-md " style="background-color: #9B2B39; color: #f8f9fa;" data-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-md " style="background-color: #2E879B; color: #f8f9fa;" style="background-color: #9B2B39;">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- End Modal -->


    <!-- Start Modal Cadastro Serviços -->
    <div class="modal fade" id="form-modal-cadastro-serviços" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="color: #9B2B39;"><img src="_assets/_icons/logo_portaal.png" alt="logo porTAAL"> - porTAAL Arquitetura</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h5 class="modal-title text-center" style="color: #9B2B39;" id="exampleModalLabel">Cadastro - Perfil de Serviços</h5>
                        <br>
                        <p>Bem-vindo ao sistema porTAAL! <br>Preencha os campos para realizar seu cadastro.</p>
                    </div>
                    <hr>



                    <form id="cadastro-cliente-form" name="cadastro-cliente-form" action="_assets/_php/grava_cadastro_serviços.php" method="POST">
                        <div class="row justify-content-center mb-5 mx-3">

                            <div class="form-row">
                                <div class="form-group col-sm-4">
                                    <label for="inputNome">Seu Nome</label>
                                    <input type="text" name="nome_cliente_serviço" class="form-control" id="inputNome" placeholder="Nome" required>
                                </div>
                                
                                <div class="form-group col-sm-4">
                                    <label for="inputSobrenome">Seu Sobrenome</label>
                                    <input type="text" name="sobrenome_cliente_serviço" class="form-control" id="inputSobrenome" placeholder="Sobrenome" required>
                                </div>
                                <!-- 
                                <div class="form-group col-sm-8">
                                    <label for="inputEnd">Seu Endereço</label>
                                    <input type="text" name="endereço_cliente_serviço" class="form-control" id="inputEnd" placeholder="Enderço completo" required>
                                </div>
                                -->
                                <div class="form-group col-sm-4">
                                    <label for="inputProf">Sua Profissão</label>
                                    <select name="profissão_cliente_serviço" id="inputProf" class="form-control" required>
                                        <option value="..." selected>Escolha ...</option>
                                        <option value="Arquiteto">Arquiteto</option>
                                        <option value="Decorador">Decorador</option>
                                        <option value="Designer">Designer</option>
                                        <option value="Engenheiro">Engenheiro</option>
                                        <option value="Projetista">Projetista</option>
                                        <option value="Outros">Outros</option>
                                    </select>
                                </div>

                                <!-- 
                                <div class="form-group col-sm-4">
                                    <label for="inputCep">Seu CEP</label>
                                    <input type="text" name="cep_cliente_serviço" class="form-control" id="inputCep" placeholder="Cep" required>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="inputCidade">Sua Cidade</label>
                                    <input type="text" name="cidade_cliente_serviço" class="form-control" id="inputCidade" placeholder="Cidade" required>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="selectEst">Seu Estado</label>
                                    <select name="estado_cliente_serviço" id="selectEst" class="form-control" required>
                                        <option value="..." selected>Escolha ...</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                        <option value="EX">Estrangeiro</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="inputTel">Seu Telefone</label>
                                    <input type="text" name="telefone_cliente_serviço" class="form-control" id="inputTel" placeholder="Telefone" required>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="inputCel">Seu Celular</label>
                                    <input type="text" name="celular_cliente_serviço" class="form-control" id="inputCel" placeholder="Celular" required>
                                </div>
                                -->
                                <div class="form-group col-sm-6">
                                    <label for="inputEmail">Seu E-mail </label>
                                    <input type="text" name="email_cliente_serviço" class="form-control" id="inputEmail" placeholder="E-mail" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="inputPass">Sua Senha </label>
                                    <input type="password" name="senha_cliente_serviço" class="form-control" id="inputPass" placeholder="Senha" required>
                                </div>
<!--
                                <div class="form-group col-sm-6">
                                    <div class="form-check mt-3">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="pref_contato_email" value="email" class="form-check-input" id="inputCheckEmail"> Desejo receber
                                            novidades por e-mail!
                                        </label>
                                        <label class="form-check-label">
                                            <input type="checkbox" name="pref_contato_cel" value="celular" class="form-check-input" id="inputCheckCel"> Desejo receber
                                            novidades por whatsApp!
                                        </label>
                                    </div>
                                </div>
-->
                                


                                <div class="modal-footer ">
                                    <button type="button" class="btn btn-md " style="background-color: #9B2B39; color: #f8f9fa;" data-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-md " style="background-color: #2E879B; color: #f8f9fa;" style="background-color: #9B2B39;">Enviar</button>
                                </div>
                            </div>
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