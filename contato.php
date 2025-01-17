<?php
$h1 = "Azure";
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
$urlAnalytics = str_replace("http://www/.", '', $url);
$urlAnalytics = str_replace("/", '', $urlAnalytics);

?>
<!DOCTYPE html>
<html lang="pt-br">


<?php include("inc/head.php")?>
<?php include("inc/topo.php")?>   
<body>
  
    <div class="bg-primary-color">
        <div class="container">
            <div class="bg-secondary container">
                <h2 class="text-center light">Entre em Contato</h2>
                <form action="inc/enviar-email.php" method="POST" class="contato">
                <div class="w-25">
                        <div class="d-flex flex-column justify-content-center align-items-center">                            
                            <input type="text" name="nome" value="Nome*" required>                            
                            <input type="email" name="email" value="E-mail*" required>                            
                            <input type="tel" name="telefone" value="Telefone*" required>
                            <!-- <label for="selecione">Serviço*</label><br>
                            <select name="selecione" id="select" required>
                                <option value="Criação de sites">Criação de sites</option>
                                <option value="Marketing digital">Marketing digital</option>
                                <option value="Criação de sistemas">Criação de sistemas</option>
                                <option value="Renovação de layout">Renovação de layout</option>
                            </select> -->
                            <label for="mensagem">Deixe uma mensagem*</label><br>
                            <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
                            <input class="mt-5" type="submit" name="enviar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include("inc/footer.php")?>
</body>
<script src="<?= $url ?>js/animacao.js"></script>

</html>