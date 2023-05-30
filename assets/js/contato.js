
    $('#btn-enviar-email').click(function(event) {
        event.preventDefault();
        $('#div-mensagem').addClass('text-info');
        $('#div-mensagem').removeClass('text-danger');
        $('#div-mensagem').removeClass('text-success');
        $('#div-mensagem').text('Enviando');

        $.ajax({
            url: "enviar.php",
            method: "post",
            data: $('form').serialize(),
            dataType: "text",
            success: function(msg){
                if(msg.trim() === 'Enviado com Sucesso!'){
                    $('#div-mensagem').removeClass('text-info')
                    $('#div-mensagem').addClass('text-success')
                    $('#div-mensagem').text(msg);
                    $('#email').val('');
                    $('#nome').val('');
                    $('#telefone').val('');
                    $('#mensagem').val('');

                 }else if(msg.trim() === 'Preecha o Campo Nome'){
                    
                    $('#div-mensagem').addClass('text-danger')
                    $('#div-mensagem').text(msg);
                 

                 }else if(msg.trim() === 'Preecha o Campo Mensagem'){
                    
                    $('#div-mensagem').addClass('text-danger')
                    $('#div-mensagem').text(msg);
                 

                 }else if(msg.trim() === 'Preecha o Campo Email'){
                    
                    $('#div-mensagem').addClass('text-danger')
                    $('#div-mensagem').text(msg);
                 }

                 else{
                    $('#div-mensagem').addClass('text-danger')
                    $('#div-mensagem').text('Deu erro ao Enviar o Formulário! Provavelmente seu servidor de hospedagem não está com permissão de envio habilitada ou você está em um servidor local!');
                   

                 }
            }
        });
    });
