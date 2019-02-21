
<section id="jobs">
    <section class="container jobs-listing">
        <div class="jobs">
            <ul class="jobs-categories-list">

                <?php
                foreach ($categoria as $data) {
                    $id = $data->id_categoria;
                    $desc_categoria = $data->desc_categoria;
                    ?> 

                    <?php if ($this->uri->segment(3) == $id) { ?>
                        <li class="active jobs-categories-item"><a href="<?php echo base_url('Home/categoria/' . $id); ?>"><?php echo $desc_categoria; ?></a></li>
                    <?php } else { ?>
                        <li class="jobs-categories-item"><a href="<?php echo base_url('Home/categoria/' . $id); ?>"><?php echo $desc_categoria; ?></a></li>
                    <?php } ?>
                <?php } ?>

            </ul>
            <ul class="recent-jobs" id="contentSection">

                <?php
                foreach ($albunsCategoria as $dados) {
                    $id_album = $dados->id_album;
                    $categoria = $dados->desc_categoria;
                    $titulo = $dados->nome_album;
                    $imagem = $dados->capa_album;
                    
                    $url = convert_accented_characters($titulo);
                    $url = strtolower(url_title($url));
                    ?>

                    <li class="col-md-3 no-padding-left">
                        <a href="<?php echo base_url('album/view/' . $url . '/' . $id_album); ?>">
                            <div class="recent-jobs-item">
                                <div class="recent-jobs-mask">
                                    <img src="<?php echo base_url('assets/imgs/capas/' . $imagem); ?>" class="recent-jobs-thumb" />
                                    <ul class="recent-jobs-mask-infos" data-album-id="79430">

                                    </ul>
                                </div>
                                <div class="recent-jobs-content">
                                    <span class="recent-jobs-category"><?php echo $categoria; ?></span>
                                    <h3 class="recent-jobs-title"><?php echo $titulo; ?></h3>
                                </div>
                            </div>
                        </a>
                    </li>
                <?php } ?>


            </ul>

        </div>
    </section>
</section>