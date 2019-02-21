<body>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="nav-side-menu">
        <div class="brand"><img src="<?php echo base_url('assets/imgs/logo.png'); ?>" class="img-responsive"></div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li>
                    <a href="<?php echo base_url('admin/Inicio'); ?>">
                        <i class="fa fa-home"></i> Inicio
                    </a>
                </li>

                 <li  data-toggle="collapse" data-target="#products" class="collapsed ">
                    <a href="#"><i class="fa fa-folder"></i> Álbuns <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li><a href="<?php echo base_url('admin/Album'); ?>">Novo Álbum</a></li>
                    <li><a href="<?php echo base_url('admin/Album/gerenciar'); ?>">Gerenciar Álbuns</a></li>                  
                </ul>
                
                <li  data-toggle="collapse" data-target="#album" class="collapsed ">
                    <a href="#"><i class="fa fa-film"></i> Slide <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="album">

                    <li><a href="<?php echo base_url('admin/Slide'); ?>">Gerenciar Slides</a></li>                  
                </ul>


               



                <li data-toggle="collapse" data-target="#service" class="collapsed">
                    <a href="#"><i class="fa fa-reorder"></i> Categorias <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service">
                    <li><a href="<?php echo base_url('admin/Categoria'); ?>">Nova/Apagar/Alterar</a></li>


                </ul>
             
                <li>
                    <a href="<?php echo base_url('admin/Perfil'); ?>">
                        <i class="fa fa-user fa-lg"></i> Meu Perfil
                    </a>
                </li>
                
                <li>
                    <a href="<?php echo base_url('Login/logout'); ?>">
                        <i class="fa fa-sign-out"></i> Sair
                    </a>
                </li>


            </ul>
        </div>
    </div>

