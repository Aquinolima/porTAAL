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




$codigo = $_GET["codigo"];

$executa2 = "SELECT * FROM perfil_serviço WHERE codigo=$codigo";

$query = $conn->query($executa2);

while ($dados = $query->fetch_object()) //fetch_object lê linha por linha do $query 
{
    $nome = $dados->nome_cliente_serviço;
    $sobrenome = $dados->sobrenome_cliente_serviço;
    $profissão = $dados->profissão_cliente_serviço;
    $cpf = $dados->cpf_cliente_serviço;
    $rg = $dados->rg_cliente_serviço;
    $email = $dados->email_cliente_serviço;
    $telefone = $dados->telefone_cliente_serviço;
    $celular = $dados->celular_cliente_serviço;
    $cep = $dados->cep_cliente_serviço;
    $endereço = $dados->endereço_cliente_serviço;
    $cidade = $dados->cidade_cliente_serviço;
    $estado = $dados->estado_cliente_serviço;
    $pref = $dados->pref_contato;
    $status = $dados->status_cliente_serviço;
    $data = $dados->data_cadastro_cliente_serviço;
    $pass = $dados->senha_cliente_serviço;
}
$query->free(); // libera a memória do servidor após cada consulta.
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

                    <form method="POST" action="_assets/_php/alterar_serviços.php">

                        <input type="hidden" name="txtcodigo" value="<?php echo $codigo ?>">

                        <h2 class="display-4" style="color: #9B2B39;">Preencha os campos para alterar o cadastro?</h2>
                        <br>

                        <div class="col-sm-12 my-0 text-center">
                            <p></p><strong>Data da Cadastro:</strong><?php echo $data ?></p>
                            <hr>

                            <div class="row justify-content-center mb-5 mx-3">

                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <strong><label for="inputNome">Nome</label></strong>
                                        <input type="text" name="nome_cliente" class="form-control" id="inputNome" value="<?php echo $nome ?>" required>
                                    </div>
                                    <div class="form-group col-sm-5">
                                        <strong><label for="inputSobrenome">Sobrenome</label></strong>
                                        <input type="text" name="sobrenome_cliente" class="form-control" id="inputSobrenome" value="<?php echo $sobrenome ?>" required>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <strong><label for="inputProfissão">Profissão</label></strong>
                                        <input type="text" name="profissão_cliente" class="form-control" id="inputProfissão" value="<?php echo $profissão ?>" required>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <strong><label for="inputCPF">CPF</label></strong>
                                        <input type="text" name="cpf_cliente" class="form-control" id="inputCPF" value="<?php echo $cpf ?>" required>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <strong><label for="inputRG">RG</label></strong>
                                        <input type="text" name="rg_cliente" class="form-control" id="inputRG" value="<?php echo $rg ?>" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <strong><label for="inputEnd">Endereço</label>
                                            <input type="text" name="endereço_cliente" class="form-control" id="inputEnd" value="<?php echo $endereço ?>" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <label for="inputCep">CEP</label>
                                        <input type="text" name="cep_cliente" class="form-control" id="inputCep" value="<?php echo $cep ?>" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="inputCidade">Cidade</label>
                                        <input type="text" name="cidade_cliente" class="form-control" id="inputCidade" value="<?php echo $cidade ?>" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="selectEst">Estado</label>
                                        <select name="estado_cliente" id="selectEst" class="form-control" required>
                                            <option value="<?php echo $estado ?>" selected><?php echo $estado ?></option>
                                            <option value="...">Indefinido</option>
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
                                        <label for="inputTel">Telefone</label>
                                        <input type="text" name="telefone_cliente" class="form-control" id="inputTel" value="<?php echo $telefone ?>" required>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="inputCel">Celular</label>
                                        <input type="text" name="celular_cliente" class="form-control" id="inputCel" value="<?php echo $celular ?>" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="inputEmail">E-mail </label>
                                        <input type="text" name="email_cliente" class="form-control" id="inputEmail" value="<?php echo $email ?>" required>
                                    </div>
                                </div>
                                <div class="form-row text-center">

                                    <div class="form-group col-sm-4">
                                        <label for="inputPref">Preferência de contato </label>
                                        <input type="text" name="pref_cliente" class="form-control" id="inputPref" value="<?php echo $pref ?>" required>
                                    </div>

                                    <div class="form-group col-sm-4 ">
                                        <div class="form-check mt-0">
                                            <p>Status de Atividade</p>
                                            <label class="form-radio-label">
                                                <input type="radio" name="radio_atividade" value="1" class="form-radio-input" id="inputRadioAtivo"> Liberado para Atividade.
                                            </label>
                                            <label class="form-radio-label">
                                                <input type="radio" name="radio_atividade" value="0" class="form-radio-input" id="inputRadioBlock"> Bloqueado para Atividade.
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="inputPass">Sua Senha </label>
                                        <input type="password" name="senha_cliente" class="form-control" id="inputPass" value="<?php echo $pass ?>" required>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row mx-auto">
                                    <div class="form-group col-sm-2 mr-auto">
                                        <button type="button" class="btn btn-md " style="background-color: #9B2B39; color: #f8f9fa;" onclick="location.href='consulta_myaccount.php'">Cancelar</button>
                                    </div>
                                    <div class="form-group col-sm-2 ml-auto">
                                        <button type="submit" class="btn btn-md " style="background-color: #2E879B; color: #f8f9fa;" style="background-color: #9B2B39;">Alterar</button>
                                    </div>
                                </div>
                            </div>
                    </form>

                </div>


            </div>

        </div>

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