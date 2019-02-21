$(document).ready(function () {
    base_url = 'http://localhost/fotografias/admin/';
    url_load = 'http://localhost/fotografias/assets/imgs/load.gif';
    $('#error-senha').hide();

    $('#foto-perfil-input').on('change', function () {
        $('#visualizar-foto-perfil').html('enviando');
        /* Efetua o Upload sem dar refresh na pagina */
        $('#form-perfil').ajaxForm({
            target: '#visualizar-foto-perfil' // o callback será no elemento com o id #visualizar
        }).submit();
    });


$('#enviar-slide').click(function(){
        validarSlide();
})
    

    //validação do form perfil

    /*
     $('#senha').blur(function () {
     if ($('#senha').val() == "") {
     $('#error-senha').addClass('alert alert-danger');
     $('#error-senha').html("<i class='glyphicon glyphicon-info-sign'></i> Informe a senha!");
     $('#error-senha').show('slow');
     $('#senha-repete').attr('disabled', true);
     } else if ($('#senha').val().length < 6) {
     $('#error-senha').addClass('alert alert-danger');
     $('#error-senha').html("<i class='glyphicon glyphicon-info-sign'></i> Informe ao menos 6 caractéres!");
     $('#error-senha').show('slow');
     $('#senha-repete').attr('disabled', true);
     $('#senha').focus();
     } else {
     $('#senha-repete').attr('disabled', false);
     $('#senha-repete').focus();
     }
     })
     
     $('#senha-repete').blur(function () {
     if ($('#senha').val() != $('#senha-repete').val()) {
     $('#error-senha').addClass('alert alert-danger');
     $('#error-senha').html("<i class='glyphicon glyphicon-info-sign'></i> As senhas não conferem!");
     $('#error-senha').show('slow');
     } else {
     $('#error-senha').removeAttr('class');
     $('#error-senha').addClass('alert alert-success');
     $('#error-senha').html("<i class='glyphicon glyphicon-info-sign'></i> As senhas conferem!");
     $('#error-senha').show('slow');
     $('#form-perfil-dados').removeAttr('onsubmit');
     }
     });
     */

    /* #imagem é o id do input, ao alterar o conteudo do input execurará a função baixo */
    $('#imagem').on('change', function () {
        $('#img1').attr('src', url_load);
        /* Efetua o Upload sem dar refresh na pagina */
        $('#formulario').ajaxForm({
            target: '#visualizar' // o callback será no elemento com o id #visualizar
        }).submit();
    });

    $('#imagem2').on('change', function () {
        $('#img2').attr('src', url_load);
        /* Efetua o Upload sem dar refresh na pagina */
        $('#formulario2').ajaxForm({
            target: '#visualizar2' // o callback será no elemento com o id #visualizar
        }).submit();
    });

    $('#imagem3').on('change', function () {
       $('#img3').attr('src', url_load);
        /* Efetua o Upload sem dar refresh na pagina */
        $('#formulario3').ajaxForm({
            target: '#visualizar3' // o callback será no elemento com o id #visualizar
        }).submit();
    });


    $('#imagem4').on('change', function () {
       $('#img4').attr('src', url_load);
        /* Efetua o Upload sem dar refresh na pagina */
        $('#formulario4').ajaxForm({
            target: '#visualizar4' // o callback será no elemento com o id #visualizar
        }).submit();
    });


    $('#imagem5').on('change', function () {
        $('#img5').attr('src', url_load);
        /* Efetua o Upload sem dar refresh na pagina */
        $('#formulario5').ajaxForm({
            target: '#visualizar5' // o callback será no elemento com o id #visualizar
        }).submit();
    });

    $('#imagem6').on('change', function () {
        $('#img6').attr('src', url_load);
        /* Efetua o Upload sem dar refresh na pagina */
        $('#formulario6').ajaxForm({
            target: '#visualizar6' // o callback será no elemento com o id #visualizar
        }).submit();
    });

    $('#imagem7').on('change', function () {
        $('#img7').attr('src', url_load);
        /* Efetua o Upload sem dar refresh na pagina */
        $('#formulario7').ajaxForm({
            target: '#visualizar7' // o callback será no elemento com o id #visualizar
        }).submit();
    });

    $('#imagem8').on('change', function () {
        $('#img8').attr('src', url_load);
        /* Efetua o Upload sem dar refresh na pagina */
        $('#formulario8').ajaxForm({
            target: '#visualizar8' // o callback será no elemento com o id #visualizar
        }).submit();
    });

    $('#imagem9').on('change', function () {
       $('#img9').attr('src', url_load);
        /* Efetua o Upload sem dar refresh na pagina */
        $('#formulario9').ajaxForm({
            target: '#visualizar9' // o callback será no elemento com o id #visualizar
        }).submit();
    });

    $('#imagem10').on('change', function () {
       $('#img10').attr('src', url_load);
        /* Efetua o Upload sem dar refresh na pagina */
        $('#formulario10').ajaxForm({
            target: '#visualizar10' // o callback será no elemento com o id #visualizar
        }).submit();
    });


    $('[data-tt="tooltip"]').tooltip();

    $(".modal-wide").on("show.bs.modal", function () {
        var height = $(window).height() - 200;
        $(this).find(".modal-body").css("max-height", height);
    });


    $('.categoria-cadastrada').hide();
    $('#alterar-categoria').hide();

    $('#enviar-album').click(function () {
        validarAlbum();
    });

    $('#enviar-categoria').click(function () {
        $.ajax({
            url: base_url + 'Categoria/inserir',
            type: 'post',
            dataType: 'html',
            data: {
                'desc-categoria': $('#nome-categoria').val(),
            }
        }).done(function (data) {
            $('.categoria-cadastrada').html('Cadastrado com Sucesso');
            $('#tabela-categoria').prepend(data);

            $('#nome-categoria').val('');
        });
    });

    $('#enviar-perfil').click(function () {
        $('#form-perfil-dados').ajaxForm({       
            target: '#msg-form-perfil'
        }).submit();
    });

});


function apagarCategoria($id, $nome) {

    bootbox.confirm({
        message: "Tem certeza que deseja excluir este item? <strong>" + $nome + "</strong>",
        buttons: {
            confirm: {
                label: 'Sim',
                className: 'btn-success'
            },
            cancel: {
                label: 'Não',
                className: 'btn-danger'
            }
        },
        callback: function (result) {
            if (result == true) {
                $.ajax({
                    url: base_url + 'Categoria/apagar',
                    dataType: 'html',
                    type: 'POST',
                    data: {
                        'id_categoria': $id
                    }
                }).done(function (data) {
                    console.log(data);
                    $('#' + $id).hide('slow');
                });
            }

        }
    });
}

function editarCategoria($id, $nome) {
    $('#resposta-server').hide('slow');
    $('#enviar-categoria').hide('slow');
    $('#alterar-categoria').show('slow');
    $('#nome-categoria').val($nome);

    $('#alterar-categoria').click(function () {

        if ($('#nome-categoria').val() != '') {
            $.ajax({
                url: base_url + 'Categoria/alterar',
                dataType: 'html',
                type: 'POST',
                data: {
                    'id_categoria': $id,
                    'desc_categoria': $('#nome-categoria').val()
                }
            }).done(function (data) {

                $('#resposta-server').html('');
                $('#resposta-server').show('slow');
                $('#resposta-server').prepend(data);
                $('#nome-categoria').val('');
                $('#enviar-categoria').show('slow');
                $('#alterar-categoria').hide('slow');
                setTimeout(function () {
                    window.location.href = base_url + 'categoria';
                }, 1000);


            });
        } else {
            bootbox.alert('Informe o nome da categoria!');
        }

    })

}

function validarAlbum() {
    var capa = document.getElementById("capa");
    if (capa.files.length == 0) {
        $('#error-capa').html(' Selecione uma imagem');
        $('#capa').css('border-color', 'red');
    } else {
        $('#form-album').removeAttr('onsubmit');
    }
}

function validarSlide() {
    var capa = document.getElementById("imagem-slide");
    if (capa.files.length == 0) {      
        $('#error-slide').html(' Selecione uma imagem');
        $('#error-slide').css('color', 'red');        
    } else {
        $('#form-slide').removeAttr('onsubmit');
    }
}

function apagarAlbum($id, $nome) {
    bootbox.confirm({
        message: "Tem certeza que deseja excluir este item? <strong>" + $nome + "</strong>",
        buttons: {
            confirm: {
                label: 'Sim',
                className: 'btn-success'
            },
            cancel: {
                label: 'Não',
                className: 'btn-danger'
            }
        },
        callback: function (result) {
            if (result == true) {
                $.ajax({
                    url: base_url + 'Album/apagar',
                    dataType: 'html',
                    type: 'POST',
                    data: {
                        'id_album': $id
                    }
                }).done(function (data) {
                    console.log(data);
                    $('#album-' + $id).hide('slow');
                });
            }

        }
    });
}


function apagarSlide($id, $nome) {
    bootbox.confirm({
        message: "Tem certeza que deseja excluir este item? <strong>" + $nome + "</strong>",
        buttons: {
            confirm: {
                label: 'Sim',
                className: 'btn-success'
            },
            cancel: {
                label: 'Não',
                className: 'btn-danger'
            }
        },
        callback: function (result) {
            if (result == true) {
                $.ajax({
                    url: base_url + 'Slide/apagar',
                    dataType: 'html',
                    type: 'POST',
                    data: {
                        'id_slide': $id,
                        'nome_slide': $nome
                    }
                }).done(function (data) {
                    console.log(data);
                    $('#slide-' + $id).hide('slow');
                });
            }

        }
    });
}
