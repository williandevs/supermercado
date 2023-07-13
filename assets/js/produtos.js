//AJAX PARA INSERÇÃO E EDIÇÃO DOS DADOS COM IMAGEM 

$("#form").submit(function (e) {
    var pag = "<?= $pag ?>";
    e.preventDefault();
    var formData = new FormData(this);

    $.ajax({
        url: pag + "/inserir.php",
        type: 'POST',
        data: formData,

        success: function (mensagem) {

            $('#mensagem').removeClass()

            if (mensagem.trim() == "Salvo com Sucesso!!") {

                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar').click();
                window.location = "index.php?pag=" + pag;

            } else {

                $('#mensagem').addClass('text-danger')
            }

            $('#mensagem').text(mensagem)

        },

        cache: false,
        contentType: false,
        processData: false,
        xhr: function () { // Custom XMLHttpRequest
            var myXhr = $.ajaxSettings.xhr();
            if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
                myXhr.upload.addEventListener('progress', function () {
                    /* faz alguma coisa durante o progresso do upload */
                }, false);
            }
            return myXhr;
        }
    });
});

//=======================================================================

//AJAX PARA EXCLUSÃO DOS DADOS 

$(document).ready(function () {
    var pag = "<?= $pag ?>";
    $('#btn-deletar').click(function (event) {
        event.preventDefault();

        $.ajax({
            url: pag + "/excluir.php",
            method: "post",
            data: $('form').serialize(),
            dataType: "text",
            success: function (mensagem) {

                if (mensagem.trim() === 'Excluído com Sucesso!!') {


                    $('#btn-cancelar-excluir').click();
                    window.location = "index.php?pag=" + pag;
                }

                $('#mensagem_excluir').text(mensagem)



            },

        })
    })
})





// IMAGENS COMPLEMENTARES DO PRODUTO IMAGENS 




//script para  add das imagens complementares do produto  

    $("#form-fotos").submit(function() {
        var pag = "<?= $pag ?>";
        event.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: pag + "/inserir-imagens.php",
            type: 'POST',
            data: formData,

            success: function(mensagem) {

                $('#mensagem').removeClass()

                if (mensagem.trim() == "Salvo com Sucesso!!") {

                    $('#mensagem_fotos').addClass('text-success')
                    $('#mensagem_fotos').text(mensagem)
                    listarImagensProd();

                } else {

                    $('#mensagem_fotos').addClass('text-danger')
                }

                $('#mensagem_fotos').text(mensagem)

            },

            cache: false,
            contentType: false,
            processData: false,
            xhr: function() { // Custom XMLHttpRequest
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
                    myXhr.upload.addEventListener('progress', function() {
                        /* faz alguma coisa durante o progresso do upload */
                    }, false);
                }
                return myXhr;
            }
        });
    });




//script para listar imagens complementares do produto  

    function listarImagensProd() {
        var pag = "<?= $pag ?>";
        $.ajax({
            url: pag + "/listar-imagens.php",
            method: "post",
            data: $('form').serialize(),
            dataType: "html",
            success: function(result) {

                $('#listar-img').html(result);
            }
        })
    }



//script para chamar o modal de deletar das imagens complementares do produto  

    function deletarImg(img) {

        document.getElementById('id_foto_pequena').value = img;
        $('#modalDeletarImg').modal('show');

    }



//script para carregar imagens complemetares do produto este carrega a imagem maior  

    function carregarImgProduto() {

        var target = document.getElementById('targetImgProduto');
        var file = document.querySelector("input[id=imgproduto]").files[0];
        var reader = new FileReader();

        reader.onloadend = function() {
            target.src = reader.result;
        };

        if (file) {
            reader.readAsDataURL(file);


        } else {
            target.src = "";
        }
    }


// script para deletar as imagens complementares do produdo 

    $(document).ready(function() {
        var pag = "<?= $pag ?>";
        $('#btn-deletar-img').click(function(event) {
            event.preventDefault();

            $.ajax({
                url: pag + "/excluir-imagem.php",
                method: "post",
                data: $('form').serialize(),
                dataType: "text",
                success: function(mensagem) {

                    if (mensagem.trim() === 'Excluído com Sucesso!!') {


                        $('#mensagem_fotos').text(mensagem)
                        $('#btn-cancelar-img').click();
                        listarImagensProd();
                    }

                    $('#mensagem_excluir_img').text(mensagem)



                },

            })
        })
    })

//  FIM DAS IMAGENS COMPLEMENTARES DO PRODUTO IMAGENS 




