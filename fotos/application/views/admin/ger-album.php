<div class="container container-fluid col-md-offset-2 col-md-9">
    <div class="col-md-12">
        <h3>Gerenciar Álbuns</h3>

        <div class="col-md-2">
            <button class="btn btn-success" data-toggle="modal" data-target="#add-album"><i class="glyphicon glyphicon-plus"></i> Novo Álbum</button>
        </div>


        <div class="col-md-12 tabela-categoria">
            <table class="table table-condensed tabela" id="tabela-categoria">
                <thead>
                    <tr>

                        <th>Título</th>
                        <th>Ações</th>
                        <th>Imagens</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($album as $data) {
                        $id = $data->id_album;
                        $nome = $data->nome_album;
                        ?>
                        <tr id="album-<?php echo $id; ?>">

                            <th><?php echo $nome; ?></th>

                            <th><i class="glyphicon glyphicon-edit"  data-toggle="modal" data-tt="tooltip" data-target="#ger-album-<?php echo $id ?>" title="Editar!"></i>
                                <i class="glyphicon glyphicon-trash" data-tt="tooltip" onclick="apagarAlbum('<?php echo $id ?>', '<?php echo $nome; ?>');" title="Apagar!"></i></th>
                            <th><a href="<?php echo base_url('admin/Album/imagens/'.$id); ?>"><i class="glyphicon glyphicon-th" title="Gerenciar Imagens"></i></a></th>
                        </tr>
                    <?php } ?>
                </tbody>
        </div>
    </div>
</div>
<?php
foreach ($album as $data) {
    $id = $data->id_album;
    $nome = $data->nome_album;
    $local = $data->local_album;
    $data_album = $data->data_album;
    $imagem = $data->capa_album;
    ?>
    <div class="modal modal-wide fade" id="ger-album-<?php echo $id; ?>" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?php echo $nome; ?></h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url('admin/Album/editar'); ?>" enctype="multipart/form-data" >
                        <div class="form-group">
                            <label for="titulo" id="titulo-t">Título: *</label><span id="error-email" class="aviso-erro"></span>
                            <input type="text" required="" class="form-control" value="<?php echo $nome; ?>" id="titulo-album" name="titulo-album" >
                        </div>
                        <input type="hidden" name="id_album" value="<?php echo $id; ?>">
                        <div class="form-group">
                            <label for="titulo" id="titulo-t">Lócal: *</label><span id="error-email-repete" class="aviso-erro"></span>
                            <input type="text" required="" class="form-control" value="<?php echo $local; ?>" id="local-album" name="local-album" >
                        </div>

                        <div class="form-group col-md-6">
                            <label for="titulo" id="titulo-t">Categoria: *</label><span id="error-instituicao" class="aviso-erro"></span>
                            <select class="row  form-control" id="categoria-album" name="categoria-album" required="">
                                <?php
                                foreach ($categoria as $data) {
                                    $id = $data->id_categoria;
                                    $nome = $data->desc_categoria;
                                    echo "<option value='$id'>$nome</option>";
                                }
                                ?>

                            </select>                                     
                        </div>

                        <div class="form-group col-md-6">
                            <label for="example-date-input" class="col-2 col-form-label">Data:*</label>
                            <div class="row col-10">
                                <input class="form-control" type="date" value="<?php echo $data_album; ?>" id="data-album" name="data-album">
                            </div>
                        </div>

                        <div class="form-group col-md-3">
                            <img src="<?php echo base_url('assets/imgs/capas/' . $imagem); ?>" class=" img-responsive">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Capa:* </label><span id="error-capa"></span>
                            <input type="file" name="capa-update" id="capa">

                        </div>

                        <button class="btn btn-warning col-md-12" id="enviar-album">Alterar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

<?php } ?>

<!--MODAL ADD ALBUM-->

<div class="modal modal-wide fade" id="add-album" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Adicionar Novo Álbum</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url('admin/Album/inserir'); ?>" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label for="titulo" id="titulo-t">Título: *</label><span id="error-email" class="aviso-erro"></span>
                        <input type="text" required="" class="form-control" id="titulo-album" name="titulo-album" >
                    </div>

                    <div class="form-group">
                        <label for="titulo" id="titulo-t">Lócal: *</label><span id="error-email-repete" class="aviso-erro"></span>
                        <input type="text" required="" class="form-control"  id="local-album" name="local-album" >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="titulo" id="titulo-t">Categoria: *</label><span id="error-instituicao" class="aviso-erro"></span>
                        <select class="row  form-control" id="categoria-album" name="categoria-album" required="">
                            <?php
                            foreach ($categoria as $data) {
                                $id = $data->id_categoria;
                                $nome = $data->desc_categoria;
                                echo "<option value='$id'>$nome</option>";
                            }
                            ?>

                        </select>                                     
                    </div>

                    <div class="form-group col-md-6">
                        <label for="example-date-input" class="col-2 col-form-label">Data:*</label>
                        <div class="row col-10">
                            <input class="form-control" type="date"  id="data-album" name="data-album">
                        </div>
                    </div>


                    <div class="form-group col-md-6">
                        <label>Capa:* </label><span id="error-capa"></span>
                        <input type="file" name="capa" id="capa">

                    </div>

                    <button class="btn btn-success col-md-12" id="enviar-album">Enviar</button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- GERENCIAR IMAGENS-->

<?php
foreach ($album as $data) {
    $id = $data->id_album;
    $nome = $data->nome_album;
    $local = $data->local_album;
    $data_album = $data->data_album;
    $imagem = $data->capa_album;
    ?>
    <div class="modal modal-wide fade" id="ger-album-<?php echo $id; ?>" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?php echo $nome; ?></h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url('admin/Album/editar'); ?>" enctype="multipart/form-data" >
                        <div class="form-group">
                            <label for="titulo" id="titulo-t">Título: *</label><span id="error-email" class="aviso-erro"></span>
                            <input type="text" required="" class="form-control" value="<?php echo $nome; ?>" id="titulo-album" name="titulo-album" >
                        </div>
                        <input type="hidden" name="id_album" value="<?php echo $id; ?>">
                        <div class="form-group">
                            <label for="titulo" id="titulo-t">Lócal: *</label><span id="error-email-repete" class="aviso-erro"></span>
                            <input type="text" required="" class="form-control" value="<?php echo $local; ?>" id="local-album" name="local-album" >
                        </div>

                        <div class="form-group col-md-6">
                            <label for="titulo" id="titulo-t">Categoria: *</label><span id="error-instituicao" class="aviso-erro"></span>
                            <select class="row  form-control" id="categoria-album" name="categoria-album" required="">
                                <?php
                                foreach ($categoria as $data) {
                                    $id = $data->id_categoria;
                                    $nome = $data->desc_categoria;
                                    echo "<option value='$id'>$nome</option>";
                                }
                                ?>

                            </select>                                     
                        </div>

                        <div class="form-group col-md-6">
                            <label for="example-date-input" class="col-2 col-form-label">Data:*</label>
                            <div class="row col-10">
                                <input class="form-control" type="date" value="<?php echo $data_album; ?>" id="data-album" name="data-album">
                            </div>
                        </div>

                        <div class="form-group col-md-3">
                            <img src="<?php echo base_url('assets/imgs/capas/' . $imagem); ?>" class=" img-responsive">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Capa:* </label><span id="error-capa"></span>
                            <input type="file" name="capa-update" id="capa">

                        </div>

                        <button class="btn btn-warning col-md-12" id="enviar-album">Alterar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

<?php } ?>
