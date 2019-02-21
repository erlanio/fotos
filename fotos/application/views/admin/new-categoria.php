<div class="container container-fluid col-md-offset-2 col-md-9">
    <div class="col-md-12">
        <h3>Nova Categoria</h3>
        

            <div class="panel panel-primary">
                <div class="panel-heading ">
                    <h3 class="panel-title">Cadastrar Nova Categoria</h3>
                    
                </div>
                <div class="panel-body">
                    
                    <div class="col-md-12 ">
                        <div id='resposta-server'></div>
                        

                        <div class="form-group">
                            <label for="titulo" id="titulo-t">Nome Categoria: *</label><span id="error-email" class="aviso-erro"></span>
                            <input type="text" required="" class="form-control" id="nome-categoria" name="nome-categoria" >
                        </div>
                        <input type="submit" class="btn btn-success col-md-12 col-xs-12" id="enviar-categoria" value="Enviar">                     
                        <input type="submit" class="btn btn-danger col-md-12 col-xs-12" id="alterar-categoria" value="Alterar">                     
                    </div>
                </div>
            </div>
               
                <div class="col-md-12 tabela-categoria">
                    <table class="table table-condensed tabela" id="tabela-categoria">
                        <thead>
                            <tr>

                                <th>Categoria</th>
                                <th>Editar</th>
                                <th>Apagar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($categoria as $data) {
                                $id = $data->id_categoria;
                                $nome = $data->desc_categoria;
                                ?>
                            <tr id="<?php echo $id; ?>">

                                    <th id="nome-categoria-<?php echo $id; ?>"><?php echo $nome; ?></th>                
                                    <th><i class="glyphicon glyphicon-edit" onclick="editarCategoria('<?php echo $id; ?>', '<?php echo $nome; ?>');"></i></th>
                                    <th><i class="glyphicon glyphicon-trash" onclick="apagarCategoria('<?php echo $id; ?>', '<?php echo $nome; ?>');"></i></th>
                                </tr>
                            <?php } ?>
                        </tbody>
                </div>
            </div>