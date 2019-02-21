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
<section id="about">

    <section class="container container-about">
        <div class="col-md-5 col-sm-5 col-xs-5 about-thumb">
            <div class="photographer-thumb">
                <img src="<?php echo base_url('assets/imgs/'.$imagem) ?>" alt="Gilberlandio Moreira Monteiro" class="photographer-thumb-image" />
            </div>
        </div>
        <div class="col-md-7 col-sm-7 col-xs-7 about-description">
            <p class="about-header">
                <span class="about-header-category">Sobre</span>
                |
                <span class="about-header-subcategory">Fotografia Criativa</span>
            </p>
            <div class="about-content">
                <h2 class="about-title"><?php echo $nome_artistico; ?></h2>
                <div class="about-text">
                   <?php echo $sobre; ?>

                </div>
                <a class="about-link" href="<?php echo base_url('Home/contato');  ?>" title="Entre em contato">Solicite um orçamento</a>            </div>
        </div>
    </section>