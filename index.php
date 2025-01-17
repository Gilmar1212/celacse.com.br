<?php
$h1 = "CELACSE";
$dir = $_SERVER['SCRIPT_NAME'];
$dir = pathinfo($dir);
$host = $_SERVER['HTTP_HOST'];
$http = $_SERVER['REQUEST_SCHEME'];

if ($dir["dirname"] == "/") {
    $url = $http . "://" . $host . "/";
} else {
    $url = $http . "://" . $host . $dir["dirname"] . "/";
}
$explode            = explode("/", $_SERVER['REQUEST_URI']);
$urlPagina          = end($explode);
// $urlPagina          = str_replace('.php','',$urlPagina);
$urlPagina          == "index" ? $urlPagina = "" : "";

?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include("inc/head.php") ?>

<body>
    <?php include("inc/topo.php") ?>
    <div>
        <div class="quem-somos">
            <div class="wrapper">
                <div class="h-100">
                    <div class="grid-col-2 d-flex flex-md-column-reverse h-100">
                        <div class="quem-somos__circles">
                            <div class="quem-somos__banner picture-center"> <img src="<?= $url ?>imagens/quem-somos/quem-somos.png" alt="Banner principal" title="Banner principal" class="teste"></div>
                        </div>
                        <div class="wrapper d-flex align-items-center justify-content-center flex-column h-100">
                            <h1 class="text-left w-100 fs-36">
                                <span class="small-bg">Sobre nós</span><br>
                                CELACSE
                            </h1>
                            <div class="quem-somos__content">
                                <p>Somos uma instituição que atua na produção do conhecimento científico em Pós-Graduação Stricto Sensu, especialmente na formação de pesquisadores para proporcionar a tão desejada “Educação Continuada”, preparando e formando para a jornada de sua vida profissional:</p>
                                <ul class="list pl-5">
                                    <li>Mestres e;</li>
                                    <li>Doutores;</li>
                                </ul>
                                <p>
                                    Somos parceiros do ACATE(Associação Catarinense de Tecnologia) e da ABSTARTUPs(Associação Brasileira de Startups), comunidades de empreendedores que visam impulsionar empresas como a nossa para um amplo mercado
                                    Formamos uma Comunidade Acadêmica onde a interatividade entre alunos, professores e profissionais de mercado se faz de forma harmoniosa e constante, visando ao aprendizado e aperfeiçoamento de todos envolvidos.
                                </p>
                                <div class="d-flex justify-content-start"><a class="btn" href="https://api.whatsapp.com/send?phone=5551989732020&text=Ol%C3%A1%2C%20gostaria%20de%20informa%C3%A7%C3%B5es." title="Entre em contato" target="_blank">Entre em contato <i class="fa-solid fa-arrow-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="nossos-parceiros">
        <div class="bg-primary-color">
            <div class="overflow-hidden">
                <div class="wrapper">
                    <div class="container">
                        <div class="container" data-anime="left">
                            <h2 class="text-center light">CURSOS</h2>
                            <div class="container" data-anime="bottom">
                                <div class="d-flex justify-content-center fs-26"><i class="fa-solid fa-arrow-down arrow-animate light text-center"></i></div>
                            </div>
                            <h3 class="light text-center">Os cursos são na área da saúde para:</h3>
                            <div class="d-flex justify-content-center courses">
                                <ul class="list list-blue-dots">
                                    <li class="light ">professores de educação física</li>
                                    <li class="light ">treinadores</li>
                                    <li class="light ">nutricionistas</li>
                                    <li class="light ">fisioterapeutas</li>
                                    <li class="light ">psicólogos</li>
                                </ul>
                            </div>
                            <div class="container" data-anime="bottom">
                                <div class="d-flex justify-content-center fs-26"><i class="fa-solid fa-arrow-down arrow-animate light text-center"></i></div>
                            </div>
                        </div>
                        <div class="search-line" data-anime="right">
                            <h2 class="light text-center">LINHAS DE PESQUISA</h2>
                            <p class="text-center light">As linhas de pesquisa em mestrado e doutorado na área de saúde, exercício físico e esporte são:</p>
                            <div class="d-flex justify-content-center">
                                <ul class="list list-blue-dots">
                                    <li class="light"> Aspectos fisiológicos e mecânicos do exercício físico e do treinamento desportivo;</li>
                                    <li class="light"> Aspectos comportamentais e epidemiológicos da atividade física;</li>
                                    <li class="light"> Aspectos políticos, pedagógicos e psicológicos do esporte;</li>
                                    <li class="light"> Atividade física e saúde em diferentes fases da vida;</li>
                                    <li class="light"> Epigenética e atividade física;</li>
                                    <li class="light"> Avaliação do estado nutricional no atleta;</li>
                                    <li class="light"> Nutrição esportiva e saudável;</li>
                                    <li class="light"> Patologia, fisiopatologia e mecanismo lesivo;</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-linear-gradient" data-anime>
                    <div class="container">
                        <div class="bg-secondary container">
                            <h2 class="text-center light">QUERO PARTICIPAR</h2>
                            <h3 class="text-center light">Deixe seus dados abaixo que muito breve entraremos em contato</h3>

                            <form action="inc/enviar-email.php" method="POST" class="contato">
                                <div class="w-25">
                                    <div class="d-flex flex-column justify-content-center align-items-center">
                                        <input type="text" name="nome" placeholder="Nome*" required>
                                        <input type="email" name="email" placeholder="E-mail*" required>
                                        <input type="tel" name="telefone" placeholder="Telefone*" required>
                                        <!-- <label for="selecione">Serviço*</label><br>
                            <select name="selecione" id="select" required>
                                <option value="Criação de sites">Criação de sites</option>
                                <option value="Marketing digital">Marketing digital</option>
                                <option value="Criação de sistemas">Criação de sistemas</option>
                                <option value="Renovação de layout">Renovação de layout</option>
                            </select> -->
                                        <!-- <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Deixe uma mensagem*"></textarea> -->
                                        <input class="mt-5" type="submit" name="enviar">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-servicos" id="nossos-servicos">
        <div class="overflow-hidden">
            <div class="bg-light p-5" data-anime="right">
                <div class="wrapper">
                    <div class="container">
                        <h2 class="text-center fw-500">Conheça os nossos serviços</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="card col-2">
                            <p class="card-title">CONSIGNADO INSS</p>
                            <div class="go-corner">
                                <div class="go-arrow"><i class="fa-solid fa-star"></i></div>
                            </div>
                        </div>
                        <div class="card col-2">
                            <p class="card-title">CONSIGNADO FEDERAL CIVIL (SIAPE)</p>
                            <div class="go-corner">
                                <div class="go-arrow"><i class="fa-solid fa-star"></i></div>
                            </div>
                        </div>
                        <div class="card col-2">
                            <p class="card-title">CONSIGNADO FORÇAS ARMADAS</p>
                            <div class="go-corner">
                                <div class="go-arrow"><i class="fa-solid fa-star"></i></div>
                            </div>
                        </div>
                        <div class="card col-2">
                            <p class="card-title">CONSIGNADO PÚBLICO</p>
                            <div class="go-corner">
                                <div class="go-arrow"><i class="fa-solid fa-star"></i></div>
                            </div>
                        </div>
                        <div class="card col-2">
                            <p class="card-title">GOVERNOS</p>
                            <div class="go-corner">
                                <div class="go-arrow"><i class="fa-solid fa-star"></i></div>
                            </div>
                        </div>
                        <div class="card col-2">
                            <p class="card-title">PREFEITURAS E AUTARQUIAS</p>
                            <div class="go-corner">
                                <div class="go-arrow"><i class="fa-solid fa-star"></i></div>
                            </div>
                        </div>
                        <div class="card col-2">
                            <p class="card-title">CRÉDITO FGTS</p>
                            <div class="go-corner">
                                <div class="go-arrow"><i class="fa-solid fa-star"></i></div>
                            </div>
                        </div>
                        <div class="card col-2">
                            <p class="card-title">CARTÃO CONSIGNADO</p>
                            <div class="go-corner">
                                <div class="go-arrow"><i class="fa-solid fa-star"></i></div>
                            </div>
                        </div>
                        <div class="card col-2">
                            <p class="card-title">CRÉDITO IMOBILIÁRIO</p>
                            <div class="go-corner">
                                <div class="go-arrow"><i class="fa-solid fa-star"></i></div>
                            </div>
                        </div>
                        <div class="card col-2">
                            <p class="card-title">CRÉDITO VEÍCULOS</p>
                            <div class="go-corner">
                                <div class="go-arrow"><i class="fa-solid fa-star"></i></div>
                            </div>
                        </div>
                        <div class="card col-2">
                            <p class="card-title">CARTÃO BENEFÍCIO CONSIGNADO</p>
                            <div class="go-corner">
                                <div class="go-arrow"><i class="fa-solid fa-star"></i></div>
                            </div>
                        </div>
                        <div class="card col-2">
                            <p class="card-title">CONSÓRCIO</p>
                            <div class="go-corner">
                                <div class="go-arrow"><i class="fa-solid fa-star"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-primary-color">
        <div class="banner" data-anime="">
            <div class="d-flex align-items-center flex-md-column w-100">
                <div class="banner-img-container">
                    <img src="<?= $url ?>imagens/banner-second/banner-second.webp" alt="Banner img" title="Banner img">
                </div>
                <div class="banner__content mr-5">
                    <div class="wrapper">
                        <h2 class="text-left">Por que ser parceiro da Azure Promotora?</h2>
                        <h3 class="text-left">Oferecemos diversas vantagens para você corban.</h3>
                        <p class="text-left light fw-200">
                            Com vasta experiência no mercado, garantimos segurança e confiança em nossos serviços.
                        </p>
                        <p class="text-left light fw-200">
                            Além disso, oferecemos soluções inovadoras que se adaptam às suas necessidades específicas, ajudando a alavancar o seu negócio.
                            Nosso objetivo é construir uma parceria de sucesso, baseada na transparência, confiança e resultados positivos.
                            Escolha a Azure Promotora e experimente a diferença de um atendimento verdadeiramente humanizado.
                        </p>
                        <div class="d-flex justify-content-start justify-content-md-center"><a class="btn" href="https://api.whatsapp.com/send?phone=5551989732020&text=Ol%C3%A1%2C%20gostaria%20de%20informa%C3%A7%C3%B5es." title="Entre em contato" target="_blank">Entre em contato <i class="fa-solid fa-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("inc/footer.php") ?>
</body>
<script src="<?= $url ?>js/animacao.js"></script>
<script src="inc/splider-include/dist/js/splide.min.js"></script>
<script>
    const splide = new Splide('.splide', {
        type: 'loop',
        drag: 'free',
        focus: 'center',
        perPage: 4,
        autoScroll: {
            speed: 1,
        },
    });

    splide.mount();
</script>

</html>