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

    <title>porTAAL Arquitetura - Clientes</title>

</head>

<body>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-mattBlackLight fixed-top" style="background-color: #287384;">
            <button class="navbar-toggler sideMenuToggler" style="color: #ecede8; " type="button">
                <i class="material-icons icon">menu</i>
            </button>
            <a class="navbar-brand ml-2 mb-1 mr-auto " href="index.php"><img src="_assets/_icons/logo_portaal.png" alt="logo porTAAL"></a>
            <h4 class="text px-3 mr-auto ml-1" style="color: #ecede8"> porTAAL</h4>
            <button class="navbar-toggler" style="color: #ecede8;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="material-icons icon">person</i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle p-0" style="color: #ecede8;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons icon">person</i>
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
                                <a href="dash_clientes_busca.php" class="nav-link px-2">
                                    <i class="material-icons icon">person</i>
                                    <span class="text">Serviços</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dash_clientes_blog.php" class="nav-link px-2 active">
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
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h1 class="display-4 mt-3" style="color: #ecede8;"> <i> Fique por dentro dos principais assuntos! </i> </h1>
                                </div>
                            </div>

                            <hr>

                            <div class="row">

                                <div class="col-sm-6 col-md-4 my-3 mx-auto">
                                    <div class="card  mb-5">
                                        <img class="card-img-top p-auto" src="_assets/_img/card_arq.jpg" alt="imagem-card">
                                        <div class="card-body">
                                            <h4 class="card-title">O que faz um arquiteto?</h4>
                                            <h6 class="card-subtitle mb-2 text-muted"> As principais atribuições dessa profissão.</h6>
                                            <p class="card-text">Saiba como é a carreira, quais as habilidades e como é o mercado de trabalho para um arquiteto.</p>
                                            <a href="#" class="card-link" style="color: #287384;" data-toggle="modal" data-target="#siteModal1"> <b> Saiba Mais </b> </a>
                                            <a href="https://www.decorfacil.com/o-que-faz-um-arquiteto/" class="card-link" style="color: #287384;"> <b> Acessar Site </b></a>
                                        </div>

                                        <div class="card-footer text-muted">
                                            por decorfacil - 17 de fevereiro de 2019
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 my-3 mx-auto">
                                    <div class="card  mb-5">
                                        <img class="card-img-top p-auto" src="_assets/_img/card_des.jpg" alt="imagem-card">
                                        <div class="card-body">
                                            <h4 class="card-title">Designer de interiores</h4>
                                            <h6 class="card-subtitle mb-2 text-muted"> Saiba mais sobre essa profissão.</h6>
                                            <p class="card-text">Cores, texturas, senso de proporção, estética e ergonomia. Esses são alguns dos elementos que integram o cotidiano de um designer de interiores.</p>
                                            <a href="#" class="card-link" style="color: #287384;" data-toggle="modal" data-target="#siteModal2"> <b> Saiba Mais </b> </a>
                                            <a href="https://www.decorfacil.com/designer-de-interiores/" class="card-link" style="color: #287384;"> <b> Acessar Site </b></a>
                                        </div>

                                        <div class="card-footer text-muted">
                                            por decorfacil - 30 de março de 2020
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 my-3 mx-auto">
                                    <div class="card  mb-5">
                                        <img class="card-img-top p-auto" src="_assets/_img/card_hab.jpg" alt="imagem-card">
                                        <div class="card-body">
                                            <h4 class="card-title">Habite-se: </h4>
                                            <h6 class="card-subtitle mb-2 text-muted"> O que é e quanto custa tirar a certidão do seu imóvel.</h6>
                                            <p class="card-text">Toda edificação, deve ter esse documento para comprovar a regularidade da construção.</p>
                                            <a href="#" class="card-link" style="color: #287384;" data-toggle="modal" data-target="#siteModal3"> <b> Saiba Mais </b> </a>
                                            <a href="https://www.decorfacil.com/habite-se/" class="card-link" style="color: #287384;"> <b> Acessar Site </b></a>
                                        </div>

                                        <div class="card-footer text-muted">
                                        por redação - 20 de novembro de 2020
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
            <!-- Start Modal 1  -->
            <div class="modal fade" id="siteModal1" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">O que faz um arquiteto?</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>O arquiteto é o responsável pela criação de projetos para edifícios, casas,
                                estabelecimentos comerciais, entre outros. O objetivo do seu trabalho é planejar
                                e organizar áreas internas e externas dos mais variados ambientes.</p>
                            <p>O projeto desenvolvido pelo arquiteto deve obedecer a uma arquitetura funcional que proporcione
                                conforto, seja esteticamente bonito, mas sem precisar agredir o meio ambiente.
                                O maior trunfo de um arquiteto é proporcionar harmonia entre iluminação, móveis e ventilação.</p>
                            <p>Em uma construção, o arquiteto precisa se comunicar com as partes responsáveis para definirem
                                um projeto que atenda às necessidades do cliente. Dessa forma, o profissional consegue escolher
                                e especificar os melhores materiais que serão utilizados na construção.</p>
                            <hr>
                            <h6> Quais são as atribuições de um arquiteto? </h6>
                            <p>Segundo o Conselho de Arquitetura e Urbanismo do Brasil ― CAU o arquiteto possui um perfil
                                generalista, mas algumas atribuições são determinantes para a função. Confira quais são..</p>
                            <ul>
                                <li>O arquiteto deve supervisionar, coordenar, fazer a gestão e orientação técnica de uma obra;</li>
                                <li>Deve fazer a coleta de dados, estudo, planejamento, projeto e especificação;</li>
                                <li>O estudo de viabilidade técnica e ambiental também deve ser executado pelo arquiteto;</li>
                                <li>O arquiteto deve prestar assistência técnica, assessoria e consultoria;</li>
                                <li>Deve ser o responsável pela direção de obras e de serviço técnico;</li>
                                <li>Precisa fazer vistoria, perícia, avaliação, monitoramento, laudo, parecer técnico, auditoria e arbitragem;</li>
                                <li>O arquiteto pode desempenhar o cargo e função técnica;</li>
                                <li>Deve fazer treinamento, ensino, pesquisa e extensão universitária;</li>
                                <li>O profissional é o responsável pelo desenvolvimento, análise, experimentação, ensaio, padronização, mensuração e controle de qualidade;</li>
                                <li>Precisa elaborar orçamento;</li>
                                <li>Precisa fazer a produção e divulgação técnica especializada;</li>
                                <li>O arquiteto deve ser o responsável pela execução, fiscalização e condução de obra, instalação e serviço técnico.</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal 1 -->
            <!-- Start Modal 2  -->
            <div class="modal fade" id="siteModal2" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">O que faz um designer de interiores? </h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>O designer de interiores tem a missão de estabelecer uma relação harmônica entre o espaço e
                                as pessoas, criando muito mais do que ambientes bonitos, mas também confortáveis, funcionais
                                e que valorizam o estilo de vida dos moradores, seus desejos e as sensações que eles esperam
                                ter dentro de casa.</p>
                            <p>De modo geral, o trabalho de um designer de interiores se baseia em dois pontos chaves:
                                planejamento e execução, como dito anteriormente. Contudo, apesar de parecer algo simples
                                esse trabalho é bem mais complexo na prática.</p>
                            <p>Isso porque ele envolve uma série de especificidades que precisam ser seguidas a risca para
                                garantir um projeto de qualidade e excelência. Confira abaixo as etapas que o designer de
                                interiores deve seguir, desde o inicio do projeto até o momento de entregá-lo ao cliente:</p>
                            <hr>
                            <h6> 1. Briefing </h6>
                            <p>A primeira coisa que um designer de interiores deve fazer é ouvir o cliente e suas necessidades.
                                Sabe aquela pessoa que coleciona fotos e pins da internet, mas não sabe como ordenar isso?
                                Então essa será sua função. Reunir todas as ideias, expectativas e transformá-las em
                                realidade na casa – ou outro local – do cliente.</p>
                            <p>No briefing, o designer também deve se atentar para quanto o cliente pode e espera desembolsar com o projeto.</p>
                            <h6>2. Projeto inicial</h6>
                            <p>No projeto inicial o designer de interiores faz o levantamento de todo o ambiente. Tira as medidas, avalia o que já
                                existe no espaço, como o tipo de piso, portas e janelas. Nessa etapa também é importante registrar o ambiente com
                                fotos para auxiliar na definição do projeto principal.</p>
                            <p>E aqui também que é realizado o primeiro desenho do projeto, conhecida como planta baixa. Esse esboço inicial traz
                                as principais ideias do projeto.</p>
                            <h6>3. Anteprojeto</h6>
                            <p>O anteprojeto é uma evolução do projeto inicial. Nessa fase o designer de interiores já recebeu um ok do
                                cliente e pode partir para a fase mais elaborada do projeto que é a versão em 3D. Atualmente existem diversos
                                softwares que realizam esse trabalho.</p>
                            <p>O projeto em 3D faz uma simulação muito realista de como o projeto irá ficar depois de pronto.</p>
                            <h6>4. Projeto executivo</h6>
                            <p>O projeto executivo é a continuidade do anteprojeto e nele constam informações importantes para que marceneiros,
                                eletricistas e pintores possam dar continuidade ao que foi elaborado até o momento. Nessa etapa, o cliente
                                já aprovou a versão em 3D e o projeto pode finalmente começar a sair do papel.</p>
                            <p>Na parte executiva do projeto é importante que o designer tenha em mãos todos os custos com a obra, de
                                modo que o cliente não seja surpreendido com orçamentos fora da sua realidade. </p>
                            <h6>5. Acompanhamento e gerenciamento</h6>
                            <p>A última etapa do trabalho de um designer de interiores é o acompanhamento e gerenciamento do projeto
                                já em fase de execução. Nessa fase, o profissional se responsabiliza para que tudo saia de acordo com
                                o que foi combinado com o cliente. Também é tarefa do designer de interiores garantir o prazo de entrega
                                dos serviços e produtos contratados e a qualidade dos mesmos.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal 2 -->
            <!-- Start Modal 3  -->
            <div class="modal fade" id="siteModal3" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">O que é o habite-se? </h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>O habite-se é uma espécie de certidão emitida pelas prefeituras municipais. Esse documento serve para atestar que o imóvel está apto e em condições de ser habitado com segurança pelos moradores.</p>
                            <p>O habite-se comprova também que o imóvel seguiu todas as exigências legais para ser construído e que está de acordo com o projeto inicial da obra.</p>
                           <hr>
                            <h6> Como tirar o habite-se? </h6>
                            <p>O habite-se deve ser solicitado pelo proprietário do imóvel ou pela construtora responsável pela obra.</p>
                            <p>Essa solicitação precisa ser realizada junto a prefeitura municipal. Em algumas cidades, no entanto, o habite-se deve ser requerido com a subprefeitura, secretaria de habitação, secretaria de planejamento urbano, departamento de engenharia, entre outros nomes. Informe-se antes para se certificar do local exato onde o documento é emitido na sua cidade.</p>
                            <p>O habite-se também pode variar de nome dependendo do município. É comum encontrar o documento com variações do tipo Auto de Conclusão, Certificado de Conclusão de Obra, Alvará de Utilização, Carta de Habitação, entre outros.</p>
                            <h6>Quanto tempo demora para o habite-se ser emitido?</h6>
                            <p>Assim como o valor, o tempo de emissão do habite-se varia muito de caso para caso, bem como de prefeitura para prefeitura.</p>
                            <p>Tudo vai depender se a documentação apresentada está em ordem e como a prefeitura ou órgão municipal responsável trabalha.</p>
                            <p>Para obter respostas mais precisas, o ideal é buscar por informações diretamente com a prefeitura de onde o imóvel será registrado.</p>
                            <h6>Como saber se um imóvel possui habite-se?</h6>
                            <p>Antes de comprar ou alugar um imóvel é importante certificar-se de que o mesmo possui toda a documentação exigida por lei, incluindo o habite-se. Mas como conseguir essas informações?</p>
                            <p>O modo mais prático, rápido e seguro de verificar se um imóvel possui habite-se é dirigindo-se até a prefeitura municipal. Lá é possível consultar toda a situação do imóvel, desde débitos com IPTU até multas, restrições e toda documentação.</p>
                            <p>Também é possível obter essas informações junto ao cartório de registros de imóveis da cidade.</p>
                            <p>Lembrando que uma casa pode ser comprada mesmo sem o habite-se, contudo, é importante que o futuro proprietário tenha em mente todas as implicações legais que a falta dessa documentação pode causar no futuro.</p>
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal 3 -->

    </body>

</html>