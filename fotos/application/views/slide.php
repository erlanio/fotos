

    <section class="slide banner">
        <ul class="banner-list" id="home-banner-slider">
            <?php
            foreach ($slide as $data) {
                $titulo = $data->titulo_slide;
                $categoria = $data->desc_categoria;
                $local = $data->local_slide;
                $imagem = $data->imagem_slide;
            
            ?>
            <li class="banner-list-item">
                <img src="<?php echo base_url('assets/imgs/slide/'.$imagem); ?>" alt="Ensaio" class="banner-image" />
                <a href="#" title="Ensaios Jaqueline & Henrile">
                    <div class="banner-list-content">
                        <p class="banner-event-type slider-text"><?php echo $categoria; ?></p>
                        <p class="banner-event-title slider-text"><?php echo $titulo; ?></p>
                        <p class="banner-event-location slider-text"><?php echo $local; ?></p>
                    </div>
                </a>
            </li>
            
            <?php } ?>
        </ul>
        <nav class="featured-nav">
            <a href="#" title="Anterior" class="owlButtonPrev" id="owlButtonPrevFeatured">
                <i class="icon-prev"></i>
            </a>
            <a href="#" title="Próximo" class="owlButtonNext" id="owlButtonNextFeatured">
                <i class="icon-next"></i>
            </a>
        </nav>
    </section>

<section id="home">