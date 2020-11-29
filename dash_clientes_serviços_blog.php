<?php
// ligação entre o programa web e o banco de dados
include "_assets/_php/abrir_banco.php";

session_start();

if (isset($_SESSION["codigo"])) {
    echo $_SESSION["codigo"];
    echo $_SESSION["nome_cliente_serviço"];
} else {
    header('location:erro_de_login.php');
};

$atividade = "Ativo";


$id = $_SESSION["codigo"];



$executa2 = "SELECT * FROM perfil_serviço WHERE codigo=$id";

$query = $conn->query($executa2);

while ($dados = $query->fetch_object()) //fetch_object lê linha por linha do $query 
{
    $nome = $dados->nome_cliente_serviço;
    $sobrenome = $dados->sobrenome_cliente_serviço;
    $profissão = $dados->profissão_cliente_serviço;
    $cpf = $dados->cpf_cliente_serviço;
    $rg = $dados->rg_cliente_serviço;
    $telefone = $dados->telefone_cliente_serviço;
    $celular = $dados->celular_cliente_serviço;
    $email = $dados->email_cliente_serviço;
    $pass = $dados->senha_cliente_serviço;
    $senha = $dados->senha_cliente_serviço;
    $cep = $dados->cep_cliente_serviço;
    $endereço = $dados->endereço_cliente_serviço;
    $cidade = $dados->cidade_cliente_serviço;
    $estado = $dados->estado_cliente_serviço;
    $img_perfil = $dados->img_perfil_cliente_serviço;
    $port_img_1 = $dados->port1_serviço;
    $port_img_2 = $dados->port2_serviço;
    $port_img_3 = $dados->port3_serviço;
    $port_img_4 = $dados->port4_serviço;
    $espec = $dados->espec_cliente_serviço;
    $descrição = $dados->descrição_cliente_serviço;
    $face = $dados->cliente_serviço_face;
    $insta = $dados->cliente_serviço_insta;
    $twitter = $dados->cliente_serviço_twitter;
    $linkedin = $dados->cliente_serviço_linkedin;
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

    <title>porTAAL Arquitetura - Profissionais</title>

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
                            <a class="dropdown-item" href="dash_clientes_serviços_perfilbusca.php">Seu Perfil</a>
                            <a class="dropdown-item" href="dash_clientes_serviços_editar.php">Configurações</a>
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
                            <img class="ml-4 my-3 mr-4" style="width: 70%;" src="_assets/_img/_upload/<?php echo $img_perfil ?>" alt="logo porTAAL">
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
                                <a href="dash_clientes_serviços_perfil.php" class="nav-link px-2">
                                    <i class="material-icons icon">person</i>
                                    <span class="text">Perfil</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dash_clientes_serviços_blog.php" class="nav-link px-2 active ">
                                    <i class="material-icons icon">dashboard</i>
                                    <span class="text">Blog</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dash_clientes_serviços_editar.php" class="nav-link px-2">
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
                                <b> Profissão </b>
                                <br>
                                <?php
                                echo $profissão;
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
                                        <img class="card-img-top p-auto" src="_assets/_img/card_ideia.jpg" alt="imagem-card">
                                        <div class="card-body">
                                            <h4 class="card-title">Como selecionar uma boa ideia de negócio.</h4>
                                            <h6 class="card-subtitle mb-2 text-muted"> Empreendedorismo </h6>
                                            <p class="card-text">Conte com a ajuda do Sebrae para saber qual é o melhor tipo de empreendimento para você montar e ter sucesso.</p>
                                            <a href="#" class="card-link" style="color: #287384;" data-toggle="modal" data-target="#siteModal1"> <b> Saiba Mais </b> </a>
                                            <a href="https://www.sebrae.com.br/sites/PortalSebrae/sebraeaz/como-selecionar-uma-boa-ideia-de-negocio,0d1a4e5778dad510VgnVCM1000004c00210aRCRD" class="card-link" style="color: #287384;"> <b> Acessar Site </b></a>
                                        </div>

                                        <div class="card-footer text-muted">
                                            por Sebrae - Novembro de 2017
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 my-3 mx-auto">
                                    <div class="card  mb-5">
                                        <img class="card-img-top p-auto" src="_assets/_img/card_pix.png" alt="imagem-card">
                                        <div class="card-body">
                                            <h4 class="card-title"> Entenda o que são pagamentos instantâneos – PIX</h4>
                                            <h6 class="card-subtitle mb-2 text-muted">Finanças</h6>
                                            <p class="card-text">A iniciativa PIX implementa um sistema de pagamentos instantâneos e promete revolucionar o mercado financeiro e facilitar para pagadores e recebedores.</p>
                                            <a href="#" class="card-link" style="color: #287384;" data-toggle="modal" data-target="#siteModal2"> <b> Saiba Mais </b> </a>
                                            <a href="https://www.sebrae.com.br/sites/PortalSebrae/artigos/entenda-o-que-sao-pagamentos-instantaneos-pix,6c506cab65ee3710VgnVCM1000004c00210aRCRD" class="card-link" style="color: #287384;"> <b> Acessar Site </b></a>
                                        </div>

                                        <div class="card-footer text-muted">
                                            por Sebra - Setembro de 2020
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 my-3 mx-auto">
                                    <div class="card  mb-5">
                                        <img class="card-img-top p-auto" src="_assets/_img/card_natal.png" alt="imagem-card">
                                        <div class="card-body">
                                            <h4 class="card-title">Então é Natal, o que fazer para vender mais?</h4>
                                            <h6 class="card-subtitle mb-2 text-muted"> Mercado de Vendas</h6>
                                            <p class="card-text">Confira a nossa lista de Natal. São dicas imperdíveis para você incrementar a estratégia de venda do seu negócio para o fim do ano!</p>
                                            <a href="#" class="card-link" style="color: #287384;" data-toggle="modal" data-target="#siteModal3"> <b> Saiba Mais </b> </a>
                                            <a href="https://www.sebrae.com.br/sites/PortalSebrae/artigos/entao-e-natal-o-que-fazer-para-vender-mais,4119985409a75710VgnVCM1000004c00210aRCRD" class="card-link" style="color: #287384;"> <b> Acessar Site </b></a>
                                        </div>

                                        <div class="card-footer text-muted">
                                            por Sebrae - Outubro de 2020
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
                            <h5 class="modal-title">Como selecionar uma boa ideia de negócio</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Iniciar um empreendimento é uma tarefa que exige a tomada de uma série de escolhas e decisões, e isso exige conhecimento do futuro empreendedor.</p>
                            <p>Por isso, o Sebrae disponibiliza ao seu cliente mais de 450 ideias de negócios com orientações de “como montar”. Este produto mostra o que você precisa saber antes de iniciar em empreendimento: espaço físico adequado, número de empregados, equipamentos principais, valor do investimento, quais custos o negócio tem, a legislação que deve atender, entre outros.</p>
                            <p>É importante lembrar que o Ideias de Negócios não substitui a elaboração de um Plano de Negócios. Ele dá uma visão geral sobre os aspectos de abertura destas empresas, entretanto é necessário se adequar a cada realidade.</p>
                            <p>Para o futuro empreendedor que é aposentado, o Sebrae realizou uma pesquisa em 2017 que apontou que a maioria dos entrevistados pretende abrir um negócio no setor do comércio (59,6%), enquanto 30,1% pretendem abrir um negócio no setor de serviços.</p>
                            O ramo da alimentação foi citado por mais de 24% dos entrevistados quando perguntados a que tipo de atividade se dedicaria sua futura empresa. Veja “como abrir”:
                            <hr>
                            <h6> Quer descobrir outras ideias de negócio? </h6>
                            <p>Conte com a ajuda do Sebrae para saber qual é o melhor tipo de empreendimento para você montar e ter sucesso.</p>

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
                            <h5 class="modal-title">Entenda o que são pagamentos instantâneos – PIX </h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>O Banco Central do Brasil vem trabalhando em um projeto que promete revolucionar o sistema de pagamentos brasileiros, permitindo com que pagadores e recebedores façam transação de transferência de recursos de instantânea e segura.</p>
                            <hr>
                            <p>Segundo o Banco Central:</p>
                            <p>“Pagamentos instantâneos são as transferências monetárias eletrônicas na qual a transmissão da ordem de pagamento e a disponibilidade de fundos para o usuário recebedor ocorre em tempo real e cujo serviço está disponível durante 24 horas por dia, sete dias por semana e em todos os dias no ano. As transferências ocorrem diretamente da conta do usuário pagador para a conta do usuário recebedor, sem a necessidade de intermediários, o que propicia custos de transação menores. </p>
                            <p>No Brasil, esse sistema se chamará PIX, e estará disponível para a população brasileira a partir de novembro de 2020. Além de aumentar a velocidade em que pagamentos ou transferências são feitos e recebidos, tem o potencial de alavancar a competitividade e a eficiência do mercado; baixar o custo, aumentar a segurança e aprimorar a experiência dos clientes; promover a inclusão financeira e preencher uma série de lacunas existentes na cesta de instrumentos de pagamentos disponíveis atualmente à população. Em linha com a revolução tecnológica em curso, possibilita a inovação e o surgimento de novos modelos de negócio e a redução do custo social relacionada ao uso de instrumentos baseados em papel.”</p>
                            <hr>
                            <p>Na prática, será um serviço de pagamento rápido, barato e seguro. O usuário poderá efetuar um pagamento com uso de lista de contatos no celular ou QR Code</p>
                            <p>O PIX causará impacto para os pequenos negócios (Recebedores), porque o custo de adesão será menor que dos demais meios eletrônicos. Haverá disponibilização imediata dos recursos, o que tende a reduzir necessidade de crédito, facilidade de automatização e de conciliação de pagamentos, facilidade e rapidez de checkout.</p>
                            <p>Também trará benefícios para os clientes dos pequenos negócios (Pagadores), porque é mais rápido, barato, mais prático (uso da lista de contatos de celular ou de QR Code para iniciar pagamentos), mais simples (só precisa de dispositivo digital para realizar o pagamento, dispensa uso de cartão, folha de cheque, cédulas, maquininhas) e possibilidade de integração com outros serviços no smartphone.</p>
                            <p><img src="_assets/_img/card_pix2.png" alt="pagamento"></p>
                            <p>O PIX causará impacto no ecossistema financeiro no Brasil, uma vez que permitirá a redução do uso de cédulas, irá gerar serviços com maior qualidade e menos custo, resultará um maior potencial de inclusão financeira em um ambiente totalmente seguro.</p>
                            <p>O Sistema é totalmente regulamentado pelo Banco Central, com total transparência e participação da sociedade no seu processo construtivo. Todas as normas que regulamentam o PIX podem ser acessadas na página do Banco Central na internet. Sua última publicação sobre regulamentação, ocorreu no dia 16 de junho de 2020, por meio da CIRCULAR Nº 4.027, que trata sobre o Regulamento do Sistema de Pagamentos Instantâneos (SPI) e da Conta Pagamentos Instantâneos (Conta PI).</p>
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
                            <h5 class="modal-title">Então é Natal, o que fazer para vender mais?</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Como andam as ações da sua empresa para as vendas deste fim de ano? Você ainda não se mexeu e quer ajuda para começar ou a execução do planejamento já está a todo vapor e quer ver o que ainda pode melhorar?</p>
                            <p>O natal é um dos eventos mais lucrativos do ano, uma celebração global que sempre trouxe grandes resultados de vendas para a maioria das empresas. A data, que acalenta o coração de muita gente, é a mais esperada do ano pelo comércio, pois as pessoas estão mais dispostas a gastar com presentes e lembrancinhas para os entes queridos. Mesmo com a situação financeira de diversas famílias abalada neste ano devido à pandemia do Coronavírus, estima-se que será ainda a data sazonal com mais venda no ano.</p>
                            <p>2020 colocou em evidência um forte modelo de negócio, que já existia há tempos, mas foi repensado e intensificado por várias empresas: a venda digital. Quantas empresas que não faziam parte do digital e agora estão colhendo ótimos resultados desse canal?</p>
                            <p>Os consumidores digitais vieram com tudo também. Mesmo quem tinha receio de comprar online, viu como uma alternativa para continuar o consumo. Podemos dizer que 2020 foi o ANO DO COMÉRCIO ONLINE.</p>
                            <p>Assim, é importante, mesmo com a Retomada das Atividades em seu estado/município, manter a atenção nas vendas por redes sociais, vendas por WhatsApp e Loja Online – se existir.</p>
                            <p><img src="_assets/_img/card_pac.png" alt="imgpac"></p>
                            <p>Nós preparamos uma lista de Natal para presentear você. Mas não se preocupe, tudo o que queremos é dar dicas para sua estratégia de vendas. É mais do que hora de arregaçar as mangas e começar a trabalhar.</p>
                            <hr>
                            <p>Clique no link abaixo para ver a lista completa.</p>
                            <a href="https://www.sebrae.com.br/sites/PortalSebrae/artigos/entao-e-natal-o-que-fazer-para-vender-mais,4119985409a75710VgnVCM1000004c00210aRCRD" class="card-link" style="color: #287384;"> <b> Ver Lista </b></a>
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