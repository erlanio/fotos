<?php
foreach ($usuario as $data) {
    $nome = $data->nome;
    $nome_artistico = $data->nome_artistico;
    $telefone = $data->telefone;
    $endereco = $data->endereco;
    $facebook = $data->facebook;
    $instagram = $data->instagram;
    $sobre = $data->sobre;
    $imagem = $data->imagem;
    $email = $data->email;
}
?>
﻿ <section class="container-fluid container-lt-gray">
    <div class="container social">
        <div class="col-md-4 facebook">
            <div class="fb-like-box" data-href="<?php echo $facebook; ?>" data-width="360" data-height="300" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
        </div>
        <div class="col-md-4 about-compact">
            <img src="<?php echo base_url('assets/imgs/' . $imagem); ?>" alt="Sobre Edson Moreira Fotografias" />
            <div class="about-compact-content">
                <p class="about-compact-text">

<?php echo $sobre; ?>

                </p>                   
                <a href="about.php" title="Saiba mais" class="about-compact-link">Saiba mais</a>
            </div>
        </div>
        <div class="col-md-3 budget">
            <a class="budget-title" href="/contato" title="Entre em contato">Contato</a>                <ul class="budget-contact">
                <li class="budget-contact-item">
<?php echo $telefone; ?>
                </li>
                <li class="budget-contact-item">
                    <?php echo $email; ?>                      </li>
                <li class="budget-contact-item">
<?php echo $endereco; ?>
                </li>
            </ul>
            <ul class="budget-social-list">

                <li class="budget-social-item">
                    <a href="<?php echo $facebook; ?>" target="_blank" title="Facebook de Edson Moreira" class="budget-social-link">
                        <i class="fa fa-facebook-square budget-social-icon"></i>
                    </a>
                </li>


                <li class="budget-social-item">
                    <a href="<?php echo $instagram; ?>" target="_blank" title="Instagram de Edson Moreira" class="budget-social-link">
                        <i class="fa fa-instagram budget-social-icon"></i>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</section>

<section class="container-fluid footer-alboom no-padding container-gray">
    <div class="alboom-credits">
        <a href="https://www.facebook.com/erlanio.freire.92" target="_blank" title="Erlanio Freire - Sites para fotógrafos e videomakers">
            Developed by: <strong>Erlanio Freire</strong>
        </a>
    </div>
</section>

<a href="#" id="goto-top" onclick="$('html,body').animate({scrollTop: 0}, 'slow');
        return false;" class="repl goto-top">Ir para o topo</a>

<script src="https://use.fontawesome.com/0984dc04da.js"></script>
<script src="<?php echo base_url('assets/js/'); ?>jquery1.11.1.min.js?v=2.8.227"></script>
<script src="<?php echo base_url('assets/js/'); ?>bootstrap.min.js?v=2.8.227"></script>
<script src="<?php echo base_url('assets/js/'); ?>jquery.validate_pt_BR.min.js?v=2.8.227"></script>
<script src="<?php echo base_url('assets/js/'); ?>bootstrap-datepicker_pt_BR.min.js?v=2.8.227"></script>
<script src="<?php echo base_url('assets/js/'); ?>owl.carousel.min.js?v=2.8.227"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.3/handlebars.runtime.min.js"></script>
<script src="//storage.alboom.ninja/static/plugins/instashow/jquery.instashow.min.js?v=2.8.227"></script>
<script src="//storage.alboom.ninja/static/js/scripts.min.js?v=2.8.227"></script>
<script src="//storage.alboom.ninja/static/template/10/js/scripts.min.js?v=2.8.227"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $(document).bind("contextmenu", function (event) {
            event.preventDefault();
            $("<div class='custom-menu'>&#169; " + $('#logo').attr('alt') + "</div>").appendTo("body").css({top: event.pageY + "px", left: event.pageX + "px"});
        });
        $(document).bind("mousedown", function (event) {
            $("div.custom-menu").remove();
        });
    });
</script>
</body>
</html>
