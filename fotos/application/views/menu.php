<header class="container-fluid container-white" id="header">
    <section class="container header">
        <div class="col-md-3 col-sm-3 col-xs-12 section-logo-box">
            <a href="<?php echo base_url('Home'); ?>" title="Fot&oacute;grafo de casamentos e ensaios Jo&atilde;o Pessoa - Edson Moreira" class="alboom-logo">
                <img src="<?php echo base_url('assets/imgs/logo.png'); ?>" class="alboom-logo-replacement" id="logo" />
            </a>
        </div>
        <nav class="col-md-9 col-sm-9 col-xs-12 section-menu-list" id="menu">
            <span class="alboom-logo-menu">
                <img src="img/logo.png" alt="Edson Moreira Fotográfias" class="alboom-logo-replacement" />
            </span>
            <a href="#" title="Menu" class="repl responsive-menu-close" id="responsive-menu-close">Menu</a>
            <ul class="header-menu  ">
                <li class="header-menu-item">
                    <a href="<?php echo base_url('Home'); ?>" title="Página inicial de Edson Moreira Fotográfias" class="header-menu-link">
                        In&iacute;cio                   </a>
                </li>
                <li class="header-menu-item has-submenu">
                    <a href="#" title="Trabalhos de Edson Moreira Fotográfias" class="header-menu-link">Trabalhos</a>

                    <ul class="header-submenu">
                        <?php
                        foreach ($categoria as $data) {
                            $id = $data->id_categoria;
                            $desc_categoria = $data->desc_categoria;
                            $url = convert_accented_characters($desc_categoria);
                            $url = strtolower(url_title($url));
                            ?> 

                            <li class="header-submenu-item">
                                <a href="<?php echo base_url('Home/categoria/'.$url.'/'. $id); ?>" title=""><?php echo $desc_categoria; ?></a>
                            </li>
                        <?php } ?>


                    </ul>

                </li>

                <li class="header-menu-item">
                    <a href="<?php echo base_url('Home/about'); ?>" title="Sobre Edson Moreira Fotográfias" class="header-menu-link">
                        Quem sou eu?                   </a>
                </li>
                <li class="header-menu-item">
                    <a class="header-menu-link" href="<?php echo base_url('Home/contato'); ?>" title="Entre em contato">Contato</a>                </li>
            </ul>
        </nav>
        <a href="#" title="Menu" class="repl responsive-menu-open" id="responsive-menu-open">Menu</a>
    </section>
</header>