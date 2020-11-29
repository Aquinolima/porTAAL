<?php
// ligação entre o programa web e o banco de dados
include "_assets/_php/abrir_banco.php";

session_start();

if (isset($_SESSION["codigo"])) {
    echo $_SESSION["codigo"];
    echo $_SESSION["nome_cliente"];
} else {
    header('location:erro_de_login.php');
};

$atividade = "Ativo";


$id = $_SESSION["codigo"];



$executa2 = "SELECT * FROM perfil_cliente WHERE codigo=$id";

$query = $conn->query($executa2);

while ($dados = $query->fetch_object()) //fetch_object lê linha por linha do $query 
{
    $nome = $dados->nome_cliente;
    $sobrenome = $dados->sobrenome_cliente;
    $cpf = $dados->cpf_cliente;
    $rg = $dados->rg_cliente;
    $telefone = $dados->telefone_cliente;
    $celular = $dados->celular_cliente;
    $email = $dados->email_cliente;
    $senha = $dados->senha_cliente;
    $cep = $dados->cep_cliente;
    $endereço = $dados->endereço_cliente;
    $cidade = $dados->cidade_cliente;
    $estado = $dados->estado_cliente;
    $img_perfil = $dados->img_perfil_cliente;
    $data = $dados->data_cadastro_cliente;
}
$query->free(); // libera a memória do servidor após cada consulta.

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
                                echo $nome . " " . $sobrenome;
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
                                        <b> Localização </b>
                                        <br>
                                        <?php
                                        echo $cidade . "/" . $estado;
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
                                    <h1 class="display-4 mt-3" style="color: #ecede8;"> <i> Projetistas Cadastrados</i> </h1>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <?php

                                $executa3 = "SELECT * FROM perfil_serviço WHERE profissão_cliente_serviço = 'Projetista ' ORDER BY codigo";

                                $query = $conn->query($executa3);

                                while ($dados = $query->fetch_object()) //fetch_object lê linha por linha do $query 
                                {
                                    $cod =  $dados->codigo;

                                    echo "<div class='col-12 my-3 '>";
                                    echo "<div class='card  mb-5'>";
                                    echo "<div class='row'>";
                                    echo "<div class='row my-3 mx-2'>";
                                    echo "<div class='col-12 col-md-6 col-lg-6 my-auto text-center'>";
                                    echo "<img class='img-modal py-auto' src='_assets/_img/card5.jpg' alt='imagem-card'>";
                                    echo "</div>";
                                    echo "<div class='col-12  col-md-5 col-lg-5  my-3 mb-auto mx-3 text-center'>";
                                    echo " <div class='text-justify'>";
                                    echo "<h2 class='display-5' style='color: #9B2B39;'>" .  $dados->nome_cliente_serviço . " " . $dados->sobrenome_cliente_serviço . "</h2>";
                                    echo " <h4 class='card-subtitle mb-2 text-muted'>" . $dados->profissão_cliente_serviço . "</h4>";
                                    echo "<h5 class='card-subtitle mb-2 text-muted'>Especialidade:" . $dados->espec_cliente_serviço . "</h5>";
                                    echo "<h2><a href='" . $dados->cliente_serviço_face . "'><i class='fab fa-facebook-square mx-2 my-auto' style='color: #212121;'></i></a>";
                                    echo "<a href='" . $dados->cliente_serviço_insta . "'><i class='fab fa-instagram-square mx-2 my-auto' style='color: #212121;'></i></i></a>";
                                    echo "<a href='" . $dados->cliente_serviço_twitter . "'><i class='fab fa-twitter-square mx-2 my-auto' style='color: #212121;'></i></a>";
                                    echo "<a href='" . $dados->cliente_serviço_linkedin . "'><i class='fab fa-linkedin mx-2 my-auto' style='color: #212121;'></i></a>";
                                    echo "</h2><h5 class='card-subtitle mb-2 text-muted'>Contato</h5>";
                                    echo "<small class='my-0' style='color: #212121;'><b>E-mail: " . $dados->email_cliente_serviço . "</b></small><br>";
                                    echo "<small class='my-0' style='color: #212121;'><b>Celular: " . $dados->celular_cliente_serviço . "</b></small><br>";
                                    echo "<small class='my-0' style='color: #212121;'><b>Telefone: " . $dados->telefone_cliente_serviço . "</b></small><br>";
                                    echo "<small class='my-0' style='color: #212121;'><b>Localização: " .  $dados->cidade_cliente_serviço . "/" . $dados->estado_cliente_serviço . "</b></small><br>";
                                    echo "<small class='my-0' style='color: #212121;'><b>Preferência para o contato: " . $dados->pref_contato . "</b></small></div></div>";
                                    echo " <div class='col-12 mx-3 my-2 text-center'>";
                                    echo "<div class='text-justify  px-1'>";
                                    echo "<h6 class='card-subtitle mb-2 text-muted'>Descrição:</h6>";
                                    echo "<p class='card-text mr-5 text-justify'>" . $dados->descrição_cliente_serviço . "</p>";
                                    echo "</div></div></div>";
                                    echo "<div id='minhaDiv" . $cod . "' class='row col-12 mx-auto mb-3justify-content-center' style='display: none'>";
                                    echo "<div class='row col-12 mx-5 my-2 text-center'>";
                                    echo "<div class='text-justify  px-3'>";
                                    echo "<h6 class='card-subtitle mb-2 text-muted'>Portfólio:</h6>";
                                    echo "</div></div>";
                                    echo "<div class='row col-12 mx-auto justify-content-center'>";
                                    echo "<div id='carouselExampleIndicators' class='carousel slide' style='width: 500px;' data-ride='carousel'>";
                                    echo "<ol class='carousel-indicators'>";
                                    echo "<li data-target='#carouselExampleIndicators' data-slide-to='0' class='active'></li>";
                                    echo "<li data-target='#carouselExampleIndicators' data-slide-to='1'></li>";
                                    echo "<li data-target='#carouselExampleIndicators' data-slide-to='2'></li>";
                                    echo "<li data-target='#carouselExampleIndicators' data-slide-to='3'></li>";
                                    echo "</ol><div class='carousel-inner'>";
                                    echo "<div class='carousel-item active' style='width: 500px; height:350px;'>";
                                    echo "<img class='d-block w-100' src='_assets/_img/card1.jpg' alt='First slide'>";
                                    echo "</div><div class='carousel-item' style='width: 500px; height:350px;'>";
                                    echo "<img class='d-block w-100' src='_assets/_img/card2.jpg' alt='Second slide'>";
                                    echo "</div><div class='carousel-item' style='width: 500px; height:350px;'>";
                                    echo "<img class='d-block w-100' src='_assets/_img/card3.jpg' alt='Third slide'>";
                                    echo "</div><div class='carousel-item' style='width: 500px; height:350px;'>";
                                    echo "<img class='d-block w-100' src='_assets/_img/card4.jpg' alt='Forth slide'>";
                                    echo "</div></div>";
                                    echo "<a class='carousel-control-prev' href='#carouselExampleIndicators' role='button' data-slide='prev'>";
                                    echo "<span class='carousel-control-prev-icon' aria-hidden='true'></span>";
                                    echo "<span class='sr-only'>Previous</span></a>";
                                    echo "<a class='carousel-control-next' href='#carouselExampleIndicators' role='button' data-slide='next'>";
                                    echo "<span class='carousel-control-next-icon' aria-hidden='true'></span>";
                                    echo "<span class='sr-only'>Next</span>";
                                    echo "</a></div></div></div>";
                                    echo "<div id='minhaDivContato" . $cod . "' class='row col-12 mx-auto my-3 justify-content-center' style='display: none'>";
                                    echo "<div class='row col-12 mx-5 my-2 text-center'>";
                                    echo "<div class='text-justify  px-3'>";
                                    echo "<h6 class='card-subtitle mb-2 ml-5 text-muted'>Contato:</h6>";
                                    echo "</div></div><div class='row col-12 mx-auto justify-content-center'>";
                                    echo "<form id='edita-cliente-form' name='edita-cliente-form' action='_assets/_php/grava_cadastro_cliente.php' method='POST'>";
                                    echo "<div class='row justify-content-center mb-2 mx-3'>";
                                    echo "<div class='form-row'>";
                                    echo "<div class='form-group col-sm-6'>";
                                    echo "<label for='inputNome'>Seu Nome</label>";
                                    echo "<input type='text' value='" . $nome . "' name='nome_cliente' class='form-control' id='inputNome' placeholder='Nome' required>";
                                    echo "</div><div class='form-group col-sm-6'>";
                                    echo "<label for='inputEmail'>Seu Email</label>";
                                    echo "<input type='text' value='" . $email . "' name='email_cliente' class='form-control' id='inputEmail' placeholder='E-mail' required>";
                                    echo "</div><div class='form-group col-sm-4'>";
                                    echo "<label for='inputCidade'>Sua Cidade</label>";
                                    echo "<input type='text' value='" . $cidade . "' name='cidade_cliente' class='form-control' id='inputCidade' placeholder='Cidade' required>";
                                    echo "</div><div class='form-group col-sm-4'>";
                                    echo "<label for='selectEst'>Seu Estado</label>";
                                    echo "<select name='estado_cliente' id='selectEst' class='form-control' required>";
                                    echo "<option value='" . $estado . "' selected>" . $estado . "</option>";
                                    echo "<option value='AC'>Acre</option><option value='AL'>Alagoas</option><option value='AP'>Amapá</option><option value='AM'>Amazonas</option><option value='BA'>Bahia</option><option value='CE'>Ceará</option><option value='DF'>Distrito Federal</option><option value='ES'>Espírito Santo</option><option value='GO'>Goiás</option><option value='MA'>Maranhão</option><option value='MT'>Mato Grosso</option><option value='MS'>Mato Grosso do Sul</option><option value='MG'>Minas Gerais</option><option value='PA'>Pará</option><option value='PB'>Paraíba</option><option value='PR'>Paraná</option><option value='PE'>Pernambuco</option> <option value='PI'>Piauí</option><option value='RJ'>Rio de Janeiro</option><option value='RN'>Rio Grande do Norte</option><option value='RS'>Rio Grande do Sul</option><option value='RO'>Rondônia</option><option value='RR'>Roraima</option><option value='SC'>Santa Catarina</option><option value='SP'>São Paulo</option><option value='SE'>Sergipe</option><option value='TO'>Tocantins</option><option value='EX'>Estrangeiro</option></select></div>";
                                    echo "<div class='form-group col-sm-4'>";
                                    echo "<label for='inputPass'>Celular </label>";
                                    echo "<input type='text' value='" . $celular . "' name='celular_cliente' class='form-control' id='inputPass' placeholder='Senha' required>";
                                    echo "</div><div class='form-group my-auto col-4'>";
                                    echo "<div class='form-check mt-3'><label class='form-check-label'>";
                                    echo "<input type='checkbox' name='pref_contato_email' value='email' class='form-check-input' id='inputCheckEmail'> Desejo o retorno do contato por e-mail!</label><label class='form-check-label'>";
                                    echo "<input type='checkbox' name='pref_contato_cel' value='celular' class='form-check-input' id='inputCheckCel'> Desejo o retorno do contato por whatsApp!";
                                    echo "</label></div></div>";
                                    echo "<div class='form-group col-8'>";
                                    echo "<label for='inputMsg'>Mensagem </label>";
                                    echo "<textarea class='form-control' id='inputMsg' name='mensagem_cliente' cols='15' rows='5' placeholder='- Modelo - Gostaria de receber informações sobre seu contato.'>Gostaria de receber informações sobre seu contato.</textarea>";
                                    echo "</div></div><hr><div class='row justify-content-center mb-5 mx-3'>";
                                    echo "<button type='submit' class='btn btn-info btn-md'>Enviar</button></div></form></div></div>";
                                    echo "</div><div class='row py-3 col-12 justify-content-center'>";
                                    echo "<div class='modal-footer'>";
                                    echo "<button type='button' class='btn btn-toggle btn-info ml-3' data-element='#minhaDiv" . $cod . "' style='text-align: left;'>Portfólio</button>";
                                    echo "<button type='button' class='btn btn-toggle btn-info mr-3' data-element='#minhaDivContato" . $cod . "' style='text-align: right;'>Entrar em ";
                                    echo "contato</button></div></div> </div></div>";
                                }
                                $query->free(); // libera a memória do servidor após cada consulta.

                                ?>

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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(function() {
                    $(".btn-toggle").click(function(e) {
                        e.preventDefault();
                        el = $(this).data('element');
                        $(el).toggle();
                    });
                });
            </script>
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