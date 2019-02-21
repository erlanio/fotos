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


<section id="contact">

    <section class="container container-contact">
        <div class="col-md-5 col-sm-5 col-xs-12">
            <div class="photographer-thumb">
                <img src="<?php echo base_url('assets/imgs/' . $imagem); ?>" alt="Edson Moreira" class="photographer-thumb-image" />
            </div>
            <div class="photographer-contact-info">                               
                
                <p class="photographer-contact-info-call">Ou se preferir, entre em contato</p>
                <ul class="contact-info-list">
                    <li class="contact-info-item">
                        E-mail                            <span><?php echo $email; ?> </span>
                    </li>
                    <li class="contact-info-item">
                        Telefone                            <span>
                            <?php echo $telefone; ?>                                                         </span>
                    </li>
                    <li class="contact-info-item contact-info-item-address">
                        Endere&ccedil;o                                <span> <?php echo $endereco; ?>
                        </span>                        
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 contact-description">
            <p class="about-header">
                <span class="about-header-category">Contato</span>
                |
                <span class="about-header-subcategory">Quero conhece-los melhor. Vamos Conversar?</span>
            </p>
            <?php if($this->uri->segment(3) == 1){ ?>
                <div class="alert alert-success col-md-12">
                    Enviado com sucesso
                </div>
                <?php } ?>
            
            <div class="about-content contact-content">
                <h2 class="about-title">Vamos contar sua hist&oacute;ria?</h2>

            </div>
             
            <form class="contact-form" id="builded-form" action="<?php echo base_url('Home/contatoEnviar'); ?>" method="POST" role="form">
                <fieldset class="contact-form-fieldset">
                    <div class="clearfix">
                        <div class="col-md-12 col-sm-12 col-xs-12 contact-form-input">
                            <input class="contact-input" type="text" name="nome" placeholder="Nome *" required="required" />
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12 contact-form-input">
                        <input class="contact-input" type="text" name="local-evento" placeholder="Local do evento " />
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12 contact-form-input">
                        <input class="contact-input" type="date" name="data-evento" placeholder="Data do evento " />
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12 contact-form-input">
                        <input class="contact-input" type="text" name="cidade" placeholder="Cidade " />
                    </div>
                    <div class="clearfix">
                        <div class="col-md-12 col-sm-12 col-xs-12 contact-form-input">
                            <input class="contact-input" type="email" name="email" placeholder="E-mail *" required="required" />
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12 contact-form-input">
                        <input class="contact-input" type="text" name="telefone" placeholder="Telefone *" required="required" />
                    </div>
                    <div class="clearfix">
                        <div class="col-md-12 col-sm-12 col-xs-12 contact-form-input cf-textarea">
                            <textarea class="contact-input textarea" name="mensagem" placeholder="Mensagem *" required="required" rows="4">
                                
                            </textarea>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 contact-form-input">
                        <button class="contact-form-btn" type="submit" name="send" data-sending="Enviando..." id="enviar-email" >Enviar</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </section>

</section>