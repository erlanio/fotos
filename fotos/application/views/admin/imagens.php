<?php
foreach ($album as $data) {
    $img1 = $data->img1;
    $img2 = $data->img2;
    $img3 = $data->img3;
    $img4 = $data->img4;
    $img5 = $data->img5;
    $img6 = $data->img6;
    $img7 = $data->img7;
    $img8 = $data->img8;
    $img9 = $data->img9;
    $img10 = $data->img10;
    $nome = $data->nome_album;
    $id_imagem = $data->id_imagem;
}
?>
<div class="container container-fluid col-md-offset-2 col-md-9">
    <div class="col-md-12 inicio">
        <h2>Gerenciar Álbum: <strong><?php echo $nome; ?></strong></h2>
        <div class="alert alert-danger">
            <strong>Atenção! As imagens devem conter as seguintes dimensões: 
                Largura: 1140px |
                Altura: 1620px</strong>
        </div>
        <div class="alert alert-danger">
            <strong>Atenção! As imagens devem estar no formado: .jpg, jpeg, gif, png, bmp</strong>
        </div>

        <div class="col-md-12 bloco-upload-img">
            <div class="col-md-6">
                <div id="visualizar" class="col-md-12"><img src="<?php echo base_url('assets/imgs/albuns/' . $img1); ?>" class="img-responsive col-md-8" id="img1"></div>
                <form id="formulario" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/Imagens/inserir'); ?>">
                    <input type="file" id="imagem" name="img1" />
                    <input type="hidden" name="id_imagem" value="<?php echo $id_imagem ?>">
                </form>
            </div>

            <div class="col-md-6 ">
                <div id="visualizar2" class="col-md-12"><img src="<?php echo base_url('assets/imgs/albuns/' . $img2); ?>" class="img-responsive col-md-8" id="img2"></div>
                <form id="formulario2" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/Imagens/inserir'); ?>">

                    <input type="file" id="imagem2" name="img2" />
                    <input type="hidden" name="id_imagem" value="<?php echo $id_imagem ?>">
                </form>
            </div>
        </div>

        <div class="col-md-12 bloco-upload-img">

            <div class="col-md-6">
                <div id="visualizar3" class="col-md-12"><img src="<?php echo base_url('assets/imgs/albuns/' . $img3); ?>" class="img-responsive col-md-8" id="img3"></div>
                <form id="formulario3" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/Imagens/inserir'); ?>">

                    <input type="file" id="imagem3" name="img3" />
                    <input type="hidden" name="id_imagem" value="<?php echo $id_imagem ?>">
                </form>
            </div>

            <div class="col-md-6">
                <div id="visualizar4" class="col-md-12"><img src="<?php echo base_url('assets/imgs/albuns/' . $img4); ?>" class="img-responsive col-md-8" id="img4"></div>
                <form id="formulario4" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/Imagens/inserir'); ?>">

                    <input type="file" id="imagem4" name="img4" />
                    <input type="hidden" name="id_imagem" value="<?php echo $id_imagem ?>">
                </form>
            </div>
        </div>

        <div class="col-md-12 bloco-upload-img">
            <div class="col-md-6">
                <div id="visualizar5" class="col-md-12"><img src="<?php echo base_url('assets/imgs/albuns/' . $img5); ?>" class="img-responsive col-md-8" id="img5"></div>
                <form id="formulario5" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/Imagens/inserir'); ?>">

                    <input type="file" id="imagem5" name="img5" />
                    <input type="hidden" name="id_imagem" value="<?php echo $id_imagem ?>">
                </form>
            </div>

            <div class="col-md-6">
                <div id="visualizar6" class="col-md-12"><img src="<?php echo base_url('assets/imgs/albuns/' . $img6); ?>" class="img-responsive col-md-8" id="img6"></div>
                <form id="formulario6" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/Imagens/inserir'); ?>">

                    <input type="file" id="imagem6" name="img6" />
                    <input type="hidden" name="id_imagem" value="<?php echo $id_imagem ?>">
                </form>
            </div>
        </div>
        
        <div class="col-md-12 bloco-upload-img">
            <div class="col-md-6">
                <div id="visualizar7" class="col-md-12"><img src="<?php echo base_url('assets/imgs/albuns/' . $img7); ?>" class="img-responsive col-md-8" id="img7"></div>
                <form id="formulario7" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/Imagens/inserir'); ?>">

                    <input type="file" id="imagem7" name="img7" />
                    <input type="hidden" name="id_imagem" value="<?php echo $id_imagem ?>">
                </form>
            </div>

            <div class="col-md-6">
                <div id="visualizar8" class="col-md-12"><img src="<?php echo base_url('assets/imgs/albuns/' . $img8); ?>" class="img-responsive col-md-8" id="img8"></div>
                <form id="formulario8" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/Imagens/inserir'); ?>">

                    <input type="file" id="imagem8" name="img8" />
                    <input type="hidden" name="id_imagem" value="<?php echo $id_imagem ?>">
                </form>
            </div>
        </div>

        <div class="col-md-12 bloco-upload-img">
            <div class="col-md-6">
                <div id="visualizar9" class="col-md-12"><img src="<?php echo base_url('assets/imgs/albuns/' . $img9); ?>" class="img-responsive col-md-8" id="img9"></div>
                <form id="formulario9" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/Imagens/inserir'); ?>">

                    <input type="file" id="imagem9" name="img9" />
                    <input type="hidden" name="id_imagem" value="<?php echo $id_imagem ?>">
                </form>
            </div>

            <div class="col-md-6">
                <div id="visualizar10" class="col-md-12"><img src="<?php echo base_url('assets/imgs/albuns/' . $img10); ?>" class="img-responsive col-md-8" id="img10"></div>
                <form id="formulario10" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/Imagens/inserir'); ?>">

                    <input type="file" id="imagem10" name="img10" />
                    <input type="hidden" name="id_imagem" value="<?php echo $id_imagem ?>">
                </form>
            </div>
        </div>
    </div>
</div>
</div>

