<?php
    require("assets/class/Assunto.class.php");
    $assunto = new Assunto();

    $active = 0;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
    <title>TESTE-Preview-LandingPage</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <header class="container-fluid">
        <div class="row justify-content-center">
            <div class="secao-items">SEÇÃO UM</div>
            <div class="secao-items">SEÇÃO DOIS</div>
            <div class="secao-items">SEÇÃO TRÊS</div>
        </div>
        <div class="row justify-content-center logo">
            <img src="assets/images/logo.png" alt="logo">
        </div>
        <div class="row justify-content-center title">
            <p>LOREM IPSUM</p>
        </div>
        <div class="row subtitle">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
        </div>
        <div class="row justify-content-center">
            <div class="pb-2">
                <button class="botao btn-rose rounded-0 btn">LOREM IPSUM</button>
            </div>
            <div>
                <button class="botao btn btn-transparent rounded-0 bg-transparent">LOREM IPSUM</button>
            </div>
        </div>

    </header>

    <div class="container container-fluid">
        <div id="indicadores" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris noso ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="carousel-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris noso ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="carousel-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris noso ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="carousel-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris noso ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="container-fluid ols">
                <ol class="carousel-indicators">
                    <div class="row">
                        <!-- active-slide -->
                        <div data-target="#indicadores" data-slide-to="0" class="indicators-items"></div>
                        <div data-target="#indicadores" data-slide-to="1" class="indicators-items"></div>
                        <div data-target="#indicadores" data-slide-to="2" class="indicators-items"></div>
                        <div data-target="#indicadores" data-slide-to="3" class="indicators-items"></div>
                    </div>
                </ol>
            </div>
        </div>
    </div>

    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 coluna-section container-fluid formulario">
                <form id="form" method="POST" action="form.php">
                    <p>CONTATO</p>
                    <input type="name" name="name" id="name" placeholder="Nome"><br>
                    <input type="text" name="telefone" id="tel" placeholder="Telefone"><br>
                    <input type="email" name="email" id="email" placeholder="E-mail"><br>
                    <select name="assunto" id="assunto">
                    <?php
                        $assuntos = $assunto->readAssunto();
                        foreach($assuntos as $item):
                    ?>
                        <option> <?php echo $item['assunto']; ?> </option>
                    <?php endforeach; ?>
                    </select><br>
                    <textarea name="mensagem" id="mensagem" placeholder="Mensagem"></textarea><br>
                    <button class="btn sendMsg">Enviar</button><br>
                </form>    
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 coluna-section camera"><img class="img-fluid" src="assets/images/camera.png" alt="Câmera"></div>
        </div>
    </section>

   


    <footer class="container-fluid">
        <div class="row icons">
            <div class="face">
                <img src="assets/images/face-icon.png" alt="Facebook">
            </div>
            <div class="insta">
                <img src="assets/images/insta-icon.png" alt="Instagram">
            </div>
            <div class="youtube">
                <img src="assets/images/youtube-icon.png" alt="Youtube">
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="assets/js/carousel.js"></script>
    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/form.js"></script>
    <script type="text/javascript" src="assets/js/telefone.js"></script>
    
</body>
</html>