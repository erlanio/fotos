<div class="container container-fluid col-md-offset-2 col-md-9">
    <div class="col-md-12">
        <h3>Novo Slide</h3>


        <form method="post" id="form-slide"  enctype="multipart/form-data" action="<?php echo base_url('admin/Slide/inserir'); ?>" onsubmit="return false">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Cadastrar Novo Slide</h3>
                </div>

                <div class="alert alert-danger">
                    <strong><i class="glyphicon glyphicon-info-sign"></i> Atenção! As imagens devem conter as seguintes dimensões: Largura: 1140px, Altura: 540px;</strong>
                </div>

                <div class="panel-body">                  
                    <div class="col-md-12">

                        <?php if (isset($mensagem)) { ?>
                            <div class="col-md-12">
                                <div class="alert <?php echo $alert; ?>">
                                    <?php echo $mensagem; ?>
                                </div>
                            </div>
                        <?php } ?>

                        <div class="form-group">
                            <label for="titulo" id="titulo-t">Título: *</label><span id="error-email" class="aviso-erro"></span>
                            <input type="text" required="" class="form-control" id="titulo-slide" name="titulo-slide" >
                        </div>

                        <div class="form-group">
                            <label for="titulo" id="titulo-t">Lócal: *</label><span id="error-email-repete" class="aviso-erro"></span>
                            <input type="text" required="" class="form-control" id="local-slide" name="local-slide" >
                        </div>

                        <div class="form-group col-md-6">
                            <label for="titulo" id="titulo-t">Categoria: *</label><span id="error-instituicao" class="aviso-erro"></span>
                            <select class="row  form-control" id="categoria-slide" name="categoria-slide" required="">
                                <?php
                                foreach ($categoria as $data) {
                                    $id = $data->id_categoria;
                                    $nome = $data->desc_categoria;
                                    echo "<option value='$id'>$nome</option>";
                                }
                                ?>

                            </select>                                     
                        </div>


                        <div class="form-group">
                            <label>Imagem* </label><span id="error-slide"></span>
                            <input type="file" name="imagem-slide" id="imagem-slide">
                        </div>
                    </div>
                    <button class="btn btn-success col-md-12" id="enviar-slide">Enviar</button>
                </div>
            </div>
        </form>

        <!--COMEÇA TABELA -->    

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
                    foreach ($slide as $data) {
                        $id = $data->id_slide;
                        $nome = $data->titulo_slide;
                        $imagem = $data->imagem_slide
                        ?>
                        <tr id="slide-<?php echo $id; ?>">

                            <th><?php echo $nome; ?></th>

                            <th><i class="glyphicon glyphicon-edit"  data-toggle="modal" data-tt="tooltip" data-target="#ger-slide-<?php echo $id ?>" title="Editar!"></i>
                                <i class="glyphicon glyphicon-trash" data-tt="tooltip" onclick="apagarSlide('<?php echo $id ?>', '<?php echo $nome; ?>');" title="Apagar!"></i></th>
                            <th class="col-md-1"><img src="<?php echo base_url('assets/imgs/slide/' . $imagem); ?>" class="img-responsive"></th>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <?php
        foreach ($slide as $data) {
            $id_slide = $data->id_slide;
            $titulo = $data->titulo_slide;
            $local = $data->local_slide;
            $imagem = $data->imagem_slide;
            $id_categoria = $data->id_categoria_slide;
            ?>
            <div class="modal modal-wide fade" id="ger-slide-<?php echo $id_slide; ?>" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><?php echo $titulo; ?></h4>
                        </div>
                        <div class="modal-body">




                            <form method="post" action="<?php echo base_url('admin/slide/editar'); ?>" enctype="multipart/form-data" >
                                <div class="form-group">
                                    <label for="titulo" id="titulo-t">Título: *</label><span id="error-email" class="aviso-erro"></span>
                                    <input type="text" required="" class="form-control" value="<?php echo $titulo; ?>" id="titulo-slide" name="titulo" >
                                </div>
                                <input type="hidden" name="id-slide-update" value="<?php echo $id_slide; ?>">


                                <div class="form-group col-md-6">
                                    <label for="titulo" id="titulo-t">Categoria: *</label><span id="error-instituicao" class="aviso-erro"></span>
                                    <select class="row  form-control" id="categoria-slide" name="categoria-slide-update" required="">
                                        <?php
                                        foreach ($categoria as $data) {
                                            $id = $data->id_categoria;
                                            $nome = $data->desc_categoria;
                                            if ($id_categoria == $id) {
                                                echo "<option value='$id'>$nome</option>";
                                            } else {
                                                echo "<option value='$id'>$nome</option>";
                                            }
                                        }
                                        ?>

                                    </select>                                     
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="titulo" id="titulo-t">Lócal: *</label><span id="error-email-repete" class="aviso-erro"></span>
                                    <input type="text" required="" class="form-control" value="<?php  echo $local ?>" id="local-slide-update" name="local-slide-update" >
                                </div>


                                <div class="form-group col-md-3">
                                    <img src="<?php echo base_url('assets/imgs/slide/' . $imagem); ?>" class=" img-responsive">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Capa:* </label><span id="error-capa"></span>
                                    <input type="file" name="imagem-slide-upload" id="imagem-slide-update">

                                </div>

                                <button class="btn btn-warning col-md-12" id="enviar-album">Alterar</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        <?php } ?>

    </div>
</div>