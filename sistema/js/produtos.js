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



