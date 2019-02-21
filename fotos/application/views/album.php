<?php
foreach ($album as $data) {
    $categoria = $data->desc_categoria;
    $titulo = $data->nome_album;
    $capa = $data->capa_album;
    $id_album = $data->id_album;
    $data_br = data_br($data->data_album);
    $local = $data->local_album;
    $img[1] = $data->img1;
    $img[2] = $data->img2;
    $img[3] = $data->img3;
    $img[4] = $data->img4;
    $img[5] = $data->img5;
    $img[6] = $data->img6;
    $img[7] = $data->img7;
    $img[8] = $data->img8;
    $img[9] = $data->img9;
    $img[10] = $data->img10;
}
?>

<section class="container">
    <div class="jobIntern-header">
        <span class="jobIntern-category"><?php echo $categoria; ?></span>
        <h2 class="jobIntern-title"><?php echo $titulo; ?></h2>
        <p class="jobIntern-info">
            <span class="jobIntern-date"><?php echo $data_br ; ?></span> -              
            <span class="jobIntern-city"><?php echo $local; ?></span>
        </p>
    </div>
    <div class="jobIntern-photos">
        <ul class="jobIntern-photos-list">

<?php for($i=1; $i<10;$i++){ ?>
            <li class="col-md-12 foto jobIntern-photos-item">
                <div class="fix-foto">
                    <img src="<?php echo base_url('assets/imgs/albuns/'.$img[$i]); ?>" alt="">
                </div>
            </li>

<?php } ?>


            
  <div class="col-md-offset-3 comentario-facebook">
                    <h4>Comentários</h4>
                    <div class="fb-comments" data-href="<?php echo base_url($this->uri->uri_string()); ?>" data-numposts="50"></div>
                    <div class="fb-like" data-href="<?php echo base_url($this->uri->uri_string()); ?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                </div>
        </ul>
        
        
    
    </div>

   
</section>

