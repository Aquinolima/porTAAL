<?php
// ligação entre o programa web e o banco de dados
include "abrir_banco.php";


// capturando os dados preenchidos pelo usuário e armazenando na memória (variáveis)
$data = new DateTime();

$nome = $_POST["name"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$assunto = $_POST["subject"];
$mensagem = $_POST["mensagem"];
$data_contato = $data->format('d/m/Y h:i:s');



$executa = "INSERT INTO contato_site (nome_contato, email_contato, telefone_contato, assunto_contato, 
mensagem_contato, data_contato) VALUES ('$nome','$email', '$telefone', '$assunto', '$mensagem', '$data_contato')";


$query = $mysqli->query($executa);
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="../_assets/_style/_css/style.css">
    <link rel="stylesheet" href="../../node_modules/font-awesome/css/all.css">
    <script src="../../node_modules/font-awesome/js/all.js"></script>

    <title>porTAAL Arquitetura</title>
</head>

<body style="background-color: #2E879B;;">
    <main class="jumbotron jumbotron-fluid mb-0 py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-3">Sua mensagem foi enviada com sucesso!</h1>
                    <p class="lead"> Clique no botão para voltar ao nosso site. </p>
                    <hr>
                </div>
            </div>
            <!-- Start Navpills -->
            <div class="row">
                <div class="col-sm-12 text-center ">
                    <ul class="nav nav-pills justify-content-center mt-5 " id="pills-nav" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" style="background-color: brown;" id="nav-pills-01" data-toggle="pill" href="../../index.php">
                                <h3>Voltar</h3>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Navpills -->
        </div>
    </main>
</body>
