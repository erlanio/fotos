<div class="container container-fluid col-md-offset-2 col-md-9 pagina-inicial">

    <div class="col-md-12 icones-inicio">

        <div class="col-md-4">
            <a href="<?php echo base_url('admin/Album/gerenciar'); ?>"><button type="submit" class="folder"><i class="fa fa-folder" aria-hidden="true"></i><p>Gerenciar Álbuns</p></button></a>
        </div>
        <div class="col-md-4">
            <a href="<?php echo base_url('admin/Slide'); ?>"><button type="submit" class="categoria-inicio"><i class="fa fa-file-image-o" aria-hidden="true"></i><p>Gerenciar Slides</p></button></a>
        </div>
        <div class="col-md-4">
            <a href="<?php echo base_url('admin/Categoria'); ?>"><button type="submit" class="slide-inicio" ><i class="fa fa-reorder" aria-hidden="true"></i><p>Gerenciar Categorias</p></button></a>
        </div>
    </div>    

    
    <div class="col-md-12 icones-inicio">

        <div class="col-md-4 icone">
            <a href="<?php echo base_url('admin/Perfil'); ?>"><button type="submit" class="perfil-inicio"><i class="fa fa-user" aria-hidden="true"></i><p>Gerenciar Perfil</p></button></a>
        </div>
        
        <div class="col-md-4">
            <a href="<?php echo base_url(); ?>" target="_blank"><button type="submit" class="visualizar-inicio"><i class="fa fa-eye" aria-hidden="true"></i><p>Visualizar Site</p></button></a>
        </div>
        
        <div class="col-md-4">
            <a href="<?php echo base_url('Login/logout'); ?>"><button type="submit" class="sair-inicio"><i class="fa fa-sign-out" aria-hidden="true"></i><p>Sair</p></button></a>
        </div>
    </div>    


</div>