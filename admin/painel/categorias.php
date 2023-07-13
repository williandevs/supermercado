<?php
$pag = "categorias";
require_once('../../conexao.php');



?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>





<div class="col-sm-12">

    <div class="card card-table ">
        <div class="container">
            <div class="row">
                <div class="form-group mb-4">
                    <div class="d-sm-inline d-md-inline-block">
                        <a type="button" class="btn btn-primary btn-sm ml-3" href="index.php?pag=<?php echo $pag ?>&funcao=novo">Nona Categoria</a>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="title-header option-title">
                        <h5 style="text-transform: uppercase;">Toda as categorias</h5>

                    </div>

                    <div class="table-responsive category-table text-black ">
                        <div>
                            <table class="table table-bordered" id="lista-categorias">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Itens</th>
                                        <th class="text-center">Imagem</th>
                                        <th>Ações</th>
                                    </tr>

                                </thead>

                                <tbody>

                                    <?php

                                    $query = $pdo->query("SELECT * FROM categorias order by id desc");
                                    $resposta = $query->fetchAll(PDO::FETCH_ASSOC);


                                    for ($i = 0; $i < count($resposta); $i++) {

                                        foreach ($resposta[$i] as $key => $value) {

                                            $nome   =   $resposta[$i]['nome'];
                                            $imagem =   $resposta[$i]['imagem'];
                                            $id     =   $resposta[$i]['id'];
                                        }

                                        //trazer itens de categorias
                                        $query2 = $pdo->query("SELECT * FROM sub_categorias order by id desc");
                                        $resposta2 = $query->fetchAll(PDO::FETCH_ASSOC);
                                        $itens  = count($resposta2);



                                    ?>
                                        <tr>
                                            <td class="text-start"><?= $nome ?></td>
                                            <td class="text-start"><?= $itens ?></td>
                                            <td class="text-center">

                                                <img src="../assets/img/categorias/<?php echo $imagem ?>" width="50">

                                            </td>

                                            <td>
                                                <a href="index.php?pag=<?php echo $pag ?>&funcao=editar&id=<?php echo $id ?>">
                                                    <i class="bi bi-pencil-fill text-info"></i>
                                                </a>

                                                <a href="index.php?pag=<?php echo $pag ?>&funcao=excluir&id=<?php echo $id ?>">
                                                    <i class="bi bi-trash-fill text-danger"></i>
                                                </a>
                                            </td>


                                        </tr>

                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>



                        <!-- Modal -->
                        <div class="modal fade" id="modalDados" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <?php
                                            if (@$_GET['funcao'] == 'editar') {
                                                $titulo = "Editar Categoria";
                                                $id2 = $_GET['id'];

                                                $query = $pdo->query("SELECT * FROM categorias WHERE id = '" . $id2 . "'");
                                                $res = $query->fetchAll(PDO::FETCH_ASSOC);

                                                $nome2 = $res[0]['nome'];
                                                $imagem2 = $res[0]['imagem'];
                                            } else {
                                                $titulo = "Inserir Nova Categoria";
                                            }
                                        ?>


                                        <h5 class="modal-title" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <?php echo $titulo ?>
                                        </h5>

                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>


                                    <form id="form-categoria" method="POST" enctype="multipart/form-data" class="theme-form theme-form-2 mega-form">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input value="<?php echo @$nome2 ?>" type="text" class="form-control" id="nome-cat" name="nome-cat" placeholder="Nome">
                                            </div>
                                            <br>

                                            <div class="form-group">
                                                <label>Imagem</label>
                                                <input type="file" class="form-control-file" id="imagem" name="imagem" onChange="carregarImg();">
                                            </div>

                                            <?php if (@$imagem2 != "") { ?>
                                                <img src="../assets/img/categorias/<?php echo $imagem2 ?>" class="img-fluid" width="200" height="200" id="target">
                                            <?php  } else { ?>
                                                <img src="../assets/img/categorias/sem-foto.png" width="100" height="100" id="target">
                                            <?php } ?>

                                            <small>
                                                <div id="mensagem"></div>
                                            </small>
                                        </div>
                                        <div class="modal-footer">
                                            <input value="<?php echo @$_GET['id'] ?>" type="hidden" name="txtid2" id="txtid2">
                                            <input value="<?php echo @$nome2 ?>" type="hidden" name="antigo" id="antigo">

                                            <button type="button" id="btn-fechar" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>

                                            <button type="submit" name="btn-salvar" id="btn-salvar" class="btn btn-primary">Salvar</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <!-- fim modal para cadastrar e editar -->

                        <!-- modal para deletetar categoria -->
                        <div class="modal" id="modal-deletar" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Excluir Registro</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Deseja realmente excluir este registro?</p>
                                        <div align="center" id="mensagem_excluir" class=""></div>
                                    </div>
                                    <div class="modal-footer">


                                        <button id="btn-cancelar-excluir" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <form method="post">
                                            <input type="hidden" id="id" name="id" value="<?php echo @$_GET['id'] ?>">
                                            <button type="button" id="btn-deletar" name="btn-deletar" class="btn btn-danger">Excluir</button>
                                        </form>
                                    </div>
                                    <div class="mensagem_excluir"></div>
                                </div>
                            </div>
                        </div>

                        <!-- fim modal para deleletra -->


                        <?php
                        if (isset($_GET["funcao"]) && $_GET["funcao"] == "novo") {
                            echo "<script>$(document).ready(function() { $('#modalDados').modal('show'); });</script>";
                        }

                        if (isset($_GET["funcao"]) && $_GET["funcao"] == "editar") {
                            echo "<script>$(document).ready(function() { $('#modalDados').modal('show'); });</script>";
                        }

                        if (isset($_GET["funcao"]) && $_GET["funcao"] == "excluir") {
                            // Certifique-se de definir corretamente o ID da modal de exclusão
                            echo "<script>$(document).ready(function() { $('#modal-deletar').modal('show'); });</script>";
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>




</div>





<!--AJAX PARA INSERÇÃO E EDIÇÃO DOS DADOS COM IMAGEM -->
<script type="text/javascript">
    $("#form-categoria").submit(function() {
        var pag = "<?= $pag ?>";
        event.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: pag + "/inserir.php",
            type: 'POST',
            data: formData,

            success: function(mensagem) {

                $('#mensagem').removeClass()

                if (mensagem.trim() == "Salvo com Sucesso!!") {

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
</script>

<script type="text/javascript">
    $(document).ready(function() {
        var pag = "<?= $pag ?>";
        $('#btn-deletar').click(function(event) {
            event.preventDefault();
            $.ajax({
                url: pag + "/excluir.php",
                method: "post",
                data: $('form').serialize(),
                dataType: "text",
                success: function(mensagem) {
                    if (mensagem.trim() === 'Excluído com Sucesso!!') {
                        $('#btn-cancelar-excluir').click();
                        window.location = "index.php?pag=" + pag;
                    }
                    $('#mensagem_excluir').text(mensagem)
                },
            })
        })
    })
</script>

<script type="text/javascript">
    function carregarImg() {
        var target = document.getElementById('target');
        var file = document.querySelector("input[type=file]").files[0];
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
</script>



<script>
    var table = new DataTable('#tabela', {
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.5/i18n/pt-BR.json',
        },
    });
</script>