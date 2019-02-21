<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Administrador do Site</title>
        <link rel="shortcut icon" href="http://auroranoticias.com.br/news/assets/imgs/logo.png" />
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/estilo-login.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/menu-lateral.css'); ?>" rel="stylesheet">
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/funcoes.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/funcoesJquery.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootbox.min.js'); ?>"></script>


    </head>
    <body>


    <body>
        <div class="container">
            <div class="card card-container">



<!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
                <img src="<?php echo base_url('assets/imgs/logo.png'); ?>" class="img-responsive" col-md-4/><br>

                <?php if (isset($mensagem)) { ?>


                <div class="alert alert-<?php echo $alert; ?>">
                        <strong><?php echo $mensagem; ?></strong>
                    </div>
                <?php } ?>

                <form class="form-signin" method="post" action="<?php echo base_url('Login/logar'); ?>">
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required autofocus>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="senha" required>                
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
                </form><!-- /form -->
                <a href="<?php echo base_url('login/RecuperarSenha'); ?>" class="forgot-password">
                    Esqueceu a senha?
                </a>
            </div>
        </div>
    </body>
</html>

