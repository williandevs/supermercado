
//jsPARA INSERÇÃO E EDIÇÃO DOS DADOS COM IMAGEM 
document.getElementById("form").addEventListener("submit", function(event) {
    var pag = "<?php echo $pag ?>";
    event.preventDefault();
    var formData = new FormData(this);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", pag + "/inserir.php", true);

    xhr.onload = function() {
        var mensagem = xhr.responseText;
        document.getElementById("mensagem").classList.remove();

        if (mensagem.trim() == "Salvo com Sucesso!!") {
            document.getElementById("btn-fechar").click();
            window.location = "index.php?pag=" + pag;
        } else {
            document.getElementById("mensagem").classList.add("text-danger");
        }

        document.getElementById("mensagem").textContent = mensagem;
    };

    xhr.upload.addEventListener("progress", function() {
        // faz alguma coisa durante o progresso do upload
    }, false);

    xhr.send(formData);
});
