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
                        <img class="ml-4 my-3 mr-4" style="width: 70%;" src="_assets/_img/card5.jpg" alt="img cliente">
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
                            <a href="dash_clientes_busca.php" class="nav-link px-2">
                                <i class="material-icons icon">person</i>
                                <span class="text">Serviços</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dash_clientes_blog.php" class="nav-link px-2 ">
                                <i class="material-icons icon">dashboard</i>
                                <span class="text">Blog</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dash_clientes_editar.php" class="nav-link px-2 active">
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


            <div id="editaCliente" class="content">
                <main>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h1 class="display-4 mt-3" style="color: #ecede8;"> <i> Configuração Perfil

                                        <?php
                                        echo $nome;
                                        ?>

                                    </i> </h1>
                            </div>
                        </div>

                        <hr>

                        <div class="row justify-content-center mb-3">
                            <div class="col-12 col-sm-4 col-md-4 col-lg-5 col-xl-5 text-center mr-auto">
                                <img class="ml-4 mt-3 mr-4" style="width: 252px;" src="_assets/_img/card5.jpg" alt="img perfil cliente">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-left mr-2 pr-3 mt-3">
                                <form action="/action_page.php">
                                    <div class="row">
                                        <div class="col-12  text-center">
                                            <label for="myfile">Selecione a imagem e depois clique em Alterar:</label>
                                        </div>
                                        <div class="col-12  text-center">
                                            <input type="file" id="myfile" name="myfile">
                                        </div>
                                        <div class="col-12  text-center">
                                            <button type="submit" class="btn btn-md mt-4" style="background-color: #FE7E01; color: #f8f9fa;">Alterar</button>
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>

                        <form id="edita-cliente-form" name="edita-cliente-form" action="_assets/_php/cliente_altera_cadastro.php" method="POST">
                            <input type="text" name="txtcodigo" value="<?php echo $id; ?>" style="display: none;">
                            <div class="row justify-content-center mb-2 mx-3">
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label for="inputNome">Seu Nome</label>
                                        <input type="text" value="<?php echo $nome; ?>" name="nome_cliente" class="form-control" id="inputNome" placeholder="Nome" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="inputSobrenome">Seu Sobrenome</label>
                                        <input type="text" value="<?php echo $sobrenome; ?>" name="sobrenome_cliente" class="form-control" id="inputSobrenome" placeholder="Sobrenome" required>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="inputEnd">Seu Endereço</label>
                                        <input type="text" value="<?php echo $endereço; ?>" name="endereço_cliente" class="form-control" id="inputEnd" placeholder="Enderço completo" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="inputCep">Seu CEP</label>
                                        <input type="text" value="<?php echo $cep; ?>" name="cep_cliente" class="form-control" id="inputCep" placeholder="Cep" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="inputCidade">Sua Cidade</label>
                                        <input type="text" value="<?php echo $cidade; ?>" name="cidade_cliente" class="form-control" id="inputCidade" placeholder="Cidade" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="selectEst">Seu Estado</label>
                                        <select name="estado_cliente" id="selectEst" class="form-control" required>
                                            <option value="<?php echo $estado; ?>" selected><?php echo $estado; ?></option>
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
                                        <input type="text" value="<?php echo $telefone; ?>" name="telefone_cliente" class="form-control" id="inputTel" placeholder="Telefone" required>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="inputCel">Seu Celular</label>
                                        <input type="text" value="<?php echo $celular; ?>" name="celular_cliente" class="form-control" id="inputCel" placeholder="Celular" required>
                                    </div>

                                    <div class="form-group col-sm-3">
                                        <label for="rgCliente">Seu Rg </label>
                                        <input type="text" value="<?php echo $rg; ?>" name="rg_cliente" class="form-control" id="rgCliente" placeholder="Rg" required>
                                    </div>

                                    <div class="form-group col-sm-3">
                                        <label for="cpfCliente">Seu CPF </label>
                                        <input type="text" value="<?php echo $cpf; ?>" name="cpf_cliente" class="form-control" id="cpfCliente" placeholder="CPF" required>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="inputEmail">Seu E-mail </label>
                                        <input type="text" value="<?php echo $email; ?>" name="email_cliente" class="form-control" id="inputEmail" placeholder="E-mail" required>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="inputPass">Sua Senha </label>
                                        <input type="password" value="<?php echo $senha; ?>" name="senha_cliente" class="form-control" id="inputPass" placeholder="Senha" required>
                                    </div>

                                    <div class="form-group col-sm-4">
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

                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-center mb-5 mx-3">
                                <button type="submit" class="btn btn-md " style="background-color: #FE7E01; color: #f8f9fa;">Editar</button>
                            </div>
                        </form>
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