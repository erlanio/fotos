<?php 
foreach ($perfil as $data) {
    $nome = $data->nome;
    $nome_artistico = $data->nome_artistico;
    $telefone = $data->telefone;
    $endereco = $data->endereco;
    $email = $data->email;
    $facebook = $data->facebook;
    $instagram = $data->instagram;
    $sobre = $data->sobre;
    $imagem = $data->imagem;
  
    
    
}

?>

<div class="container container-fluid col-md-offset-2 col-md-9">
    <div class="col-md-12">     
        <h3>Meu Perfil</h3>
        <form action="<?php echo base_url('admin/Perfil/update'); ?>" method="post"id="form-perfil-dados">
            <div class="col-md-8">
                
                
                <div class="form-group">
                    <label for="titulo" id="titulo-t">Nome: *</label><span id="error-email" class="aviso-erro"></span>
                    <input type="text"  class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>">
                </div>

                <div class="form-group">
                    <label for="titulo" id="titulo-t">Nome Artistico: *</label><span id="error-email" class="aviso-erro"></span>
                    <input type="text"  class="form-control" id="nome-artistico" name="nome-artistico" value="<?php echo $nome_artistico; ?>">
                </div>

                <div class="form-group">
                    <label for="titulo" id="titulo-t">Telefone: *</label><span id="error-email" class="aviso-erro"></span>
                    <input type="text"  class="form-control" id="telefone" name="telefone" value="<?php echo $telefone; ?>">
                </div>

                <div class="form-group">
                    <label for="titulo" id="titulo-t">Email: *</label><span id="error-email" class="aviso-erro"></span>
                    <input type="email"  class="form-control" id="email" name="email" value="<?php echo $email; ?>"> 
                </div>

                <div id="error-senha">

                </div>


                <div class="form-group">
                    <label for="titulo" id="titulo-t">Senha: *</label><span id="error-email" class="aviso-erro"></span>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="****************" >
                </div>




                <div class="form-group">
                    <label for="titulo" id="titulo-t">Endereço: *</label><span id="error-email" class="aviso-erro"></span>
                    <input type="text"  class="form-control" id="endereco" name="endereco" value="<?php echo $endereco; ?>">
                </div>

                <div class="form-group">
                    <label for="titulo" id="titulo-t">Facebook: *</label><span id="error-email" class="aviso-erro"></span>
                    <input type="text"  class="form-control" id="facebook" name="facebook" value="<?php echo $facebook; ?>">
                </div>

                <div class="form-group">
                    <label for="titulo" id="titulo-t">Instagran: *</label><span id="error-email" class="aviso-erro"></span>
                    <input type="text"  class="form-control" id="instagram" name="instagram" value="<?php echo $instagram; ?>">
                </div>


                <div class="form-group">
                    <label for="titulo" id="titulo-t">Sobre mim: *</label><span id="error-email" class="aviso-erro"></span>
                    <textarea class="form-control" rows="5" id="sobre" name='sobre'><?php echo $sobre; ?></textarea>
                </div>

                <button class="btn btn-success col-md-12" id="enviar-perfil-btn">Enviar</button>
        </form>
        
        
    </div>
   <div class="col-md-4">
            <div id="visualizar-foto-perfil" class="col-md-12"> <img src="<?php echo base_url('assets/imgs/'.$imagem); ?>" id="foto-perfil" class="img-responsive col-md-9">  </div>
            <form id="form-perfil" method="post" enctype="multipart/form-data" action="<?php echo base_url('admin/Perfil/foto'); ?>">

                <div class="fileinput fileinput-new col-md-9" data-provides="fileinput">
                    <span class="btn btn-primary col-md-12">Trocar Foto<input type="file" id="foto-perfil-input" name="foto-perfil-input"/></span>
                    <span class="fileinput-filename"></span><span class="fileinput-new"></span>
                </div>
            </form>
        </div>
</div>



</div>

