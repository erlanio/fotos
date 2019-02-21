<section class="container recent">
    <h2 class="section-title">
        Trabalhos <span class="section-title-weight"> recentes </span>        </h2>
    <ul class="recent-jobs">


        <?php
        foreach ($albuns as $data) {
            $categoria = $data->desc_categoria;
            $titulo = $data->nome_album;
            $capa = $data->capa_album;
            $id_album = $data->id_album;


            $url = convert_accented_characters($titulo);
            $url = strtolower(url_title($url));
            
            ?> 

            <li class="col-md-3 no-padding-left">
                <a href="<?php echo base_url('album/view/' . $url . '/' . $id_album); ?>" title="" class="recent-jobs-link">
                    <div class="recent-jobs-item">
                        <div class="recent-jobs-mask">
                            <img src="<?php echo base_url('assets/imgs/capas/' . $capa); ?>" />
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
</section>
</section>

