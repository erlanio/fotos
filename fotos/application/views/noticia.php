	<div class="container-fluid corpo-inicio">
    <div class="container inicio-container">

        
        <div class="row col-md-12 noticia-bloco">                        
            <div class="col-md-8 noticia">  
        
                    
                           
                <?php
                foreach ($noticia as $data) {
                    $date = $data->data_publicacao;
                    $dataconvert = data_br($date);
                    ?>                    
                           
			<img src="http://auroranoticias.com.br/news/assets/imgs/publicidade/amilkar-noticia.gif" class="hidden-xs hidden-sm pc " alt="aurora noticias"> 
			<img src="http://auroranoticias.com.br/news/assets/imgs/publicidade/amilkar-noticia.gif" class="img-responsive hidden-md hidden-lg" alt="aurora noticias"> 


                    <h3><?php echo $data->titulo; ?></h3>
                    <small><?php echo $data->num_acessos; ?> Pessoas leram esta notícia - Publicado:<?php echo $dataconvert ?></small>

          
                    
                    <img src="<?php echo base_url('assets/imgs/noticias/' . $data->imagem); ?>" class="lg img-responsive hidden-xs hidden-sm col-md-12" alt="<?php  echo $data->titulo; ?>">
                    <img src="<?php echo base_url('assets/imgs/noticias/' . $data->imagem); ?>" class="img-responsive col-md-12 hidden-lg hidden-md" alt="<?php echo $data->titulo; ?>">
                    
                    <div class="col-md-12">
              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- inicial -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9567446696098677"
     data-ad-slot="5388343422"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
                    
                    <p><?php echo $data->texto; ?> </p>
                 
                <?php } ?>
               
 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- inicial -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9567446696098677"
     data-ad-slot="5388343422"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

                
                <div class="col-md-12 comentario-facebook">
                    <h4>Comentários</h4>
                    <div class="fb-comments" data-href="<?php echo base_url($this->uri->uri_string()); ?>" data-numposts="50"></div>
                    <div class="fb-like" data-href="<?php echo base_url($this->uri->uri_string()); ?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                </div>
                
              
            </div>
            
            <div class="col-md-4 publicidade-sidebar">  
   
        
            </div>                         
            
            <div class="row col-md-4 sidebar hidden-xs">            	
                <h3>Leia mais</h3>
               
                <?php
                foreach ($ultimas_noticias as $data) {
                 
                        $titulo = strtolower(url_title($data->titulo));
                        $titulo = convert_accented_characters($titulo);
                    ?>
                    <div class="col-md-12 sidebar-bloco-noticia">
                        <div class="col-md-5 col-xs-12">
                            <a href="<?php echo base_url('home/exibirNoticia/') . $titulo . '/' . $data->id_noticia; ?>"><img src="<?php echo base_url('assets/imgs/noticias/' . $data->imagem); ?> " class="img-responsive"></a>
                        </div>

                        <div class="col-md-7 col-xs-12 titulo-sidebar">
                            <a href="<?php echo base_url('home/exibirNoticia/') . $titulo . '/' . $data->id_noticia; ?>"></a>
                            <a href="<?php echo base_url('home/exibirNoticia/') . $titulo . '/' . $data->id_noticia; ?>">  <p><?php echo word_limiter($data->titulo, 10) ?></p></a>
                        </div>
                    </div>
                <?php } ?>
                
                <div class="col-md-12">
                	<img src="http://www.auroranoticias.com.br/news/assets/imgs/publicidade/henrique.jpg" class="img-responsive">
                </div>
               
            </div>
        </div>

    </div>
</div>

<!-- <img src="http://auroranoticias.com.br/news/assets/imgs/publicidade/amilkar-noticia.gif" class="img-responsive" alt="aurora noticias">-->