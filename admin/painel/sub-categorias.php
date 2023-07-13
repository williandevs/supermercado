<?php
@session_start();
$pag = "sub-categorias";
require_once("../../conexao.php");


?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>





<!-- DataTales Example -->



<div class="card-body">
    <div class="form-group mb-4">
        <div class="d-sm-inline d-md-inline-block">
            <a type="button" class="btn btn-primary btn-sm ml-3" href="index.php?pag=<?php echo $pag ?>&funcao=novo">nova sub-categoria</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Produtos</th>
                    <th>Categoria</th>
                    <th>Imagem</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>

                <?php
                $query = $pdo->query("SELECT * FROM sub_categorias ORDER BY id DESC");
                $res = $query->fetchAll(PDO::FETCH_ASSOC);

                foreach ($res as $row) {
                    $nome = $row['nome'];
                    $imagem = $row['imagem'];
                    $categoria = $row['id_categoria'];
                    $id = $row['id'];

                    // Recuperar o nome da categoria usando uma consulta preparada
                    $query2 = $pdo->prepare("SELECT nome FROM categorias WHERE id = :categoria");
                    $query2->bindParam(':categoria', $categoria);
                    $query2->execute();
                    $res2 = $query2->fetch(PDO::FETCH_ASSOC);
                    $nome_cat = $res2['nome'];

                    // Recuperar o total de itens usando uma consulta preparada
                    $query3 = $pdo->prepare("SELECT COUNT(*) AS total_itens FROM produtos WHERE sub_categoria = :id");
                    $query3->bindParam(':id', $id);
                    $query3->execute();
                    $res3 = $query3->fetch(PDO::FETCH_ASSOC);
                    $itens = $res3['total_itens'];
                ?>
                    <tr>
                        <td><?php echo $nome ?></td>
                        <td><?php echo $itens ?></td>
                        <td><?php echo $nome_cat ?></td>
                        <td><img src="../assets/img/subcategorias//<?php echo $imagem ?>" class="img-fluid" width="50"></td>
                        <td>
                            <a href="index.php?pag=<?php echo $pag ?>&funcao=editar&id=<?php echo $id ?>">
                                <i class="bi bi-pencil-fill text-info"></i>
                            </a>

                            <a href="index.php?pag=<?php echo $pag ?>&funcao=excluir&id=<?php echo $id ?>">
                                <i class="bi bi-trash-fill text-danger"></i>
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</div>



<!-- Modal -->
<div class="modal fade" id="modalDados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <?php

                if (@$_GET['funcao'] == 'editar') {
                    $titulo = "Editar Registro";
                    $id2 = $_GET['id'];

                    $query = $pdo->query("SELECT * FROM sub_categorias where id = '" . $id2 . "' ");
                    $res = $query->fetchAll(PDO::FETCH_ASSOC);

                    $nome2 = $res[0]['nome'];
                    $imagem2 = $res[0]['imagem'];
                    $categoria2 = $res[0]['id_categoria'];
                } else {
                    $titulo = "Inserir Registro";
                }


                ?>

                <h5 class="modal-title" id="exampleModalLabel"><?php echo $titulo ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form" method="POST">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Nome</label>
                        <input value="<?php echo @$nome2 ?>" type="text" class="form-control form-control-sm" id="nome-cat" name="nome-cat" placeholder="Nome">
                    </div>

                    <div class="form-group">
                        <label>Categoria</label>
                        <select class="form-control form-control-sm" name="categoria" id="categoria">
                            <?php
                            if (@$_GET['funcao'] == 'editar') {
                                $query = $pdo->query("SELECT * from categorias where id = '$categoria2' ");
                                $res = $query->fetchAll(PDO::FETCH_ASSOC);
                                $nomeCat = $res[0]['nome'];
                                echo "<option value='" . $categoria2 . "' >" . $nomeCat . "</option>";
                            }

                            $query2 = $pdo->query("SELECT * from categorias order by nome asc ");
                            $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
                            for ($i = 0; $i < count($res2); $i++) {
                                foreach ($res2[$i] as $key => $value) {
                                }

                                if (@$nomeCat != $res2[$i]['nome']) {
                                    echo "<option value='" . $res2[$i]['id'] . "' >" . $res2[$i]['nome'] . "</option>";
                                }
                            }


                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Imagem</label>
                        <input type="file" value="<?php echo @$imagem2 ?>" class="form-control-file" id="imagem" name="imagem" onChange="carregarImg();">
                    </div>


                    <?php if (@$imagem2 != "") { ?>
                        <img src="../../assets/img/sub-categoria/<?php echo $imagem2 ?>" class="img-fluid" width="200" height="200" id="target">
                    <?php  } else { ?>
                        <img src="../../assets/img/sub-categoria/sem-foto.png" width="200" height="200" id="target">
                    <?php } ?>




                    <small>
                        <div id="mensagem">

                        </div>
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






<div class="modal" id="modal-deletar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Excluir Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <p>Deseja realmente Excluir este Registro?</p>

                <div align="center" id="mensagem_excluir" class="">

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" id="btn-fechar" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>

                <form method="post">

                    <input type="hidden" id="id" name="id" value="<?php echo @$_GET['id'] ?>" required>

                    <button type="button" id="btn-deletar" name="btn-deletar" class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>
    </div>
</div>




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





<!--AJAX PARA INSERÇÃO E EDIÇÃO DOS DADOS COM IMAGEM -->
<script type="text/javascript">
    $("#form").submit(function() {
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





<!--AJAX PARA EXCLUSÃO DOS DADOS -->
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



<!--SCRIPT PARA CARREGAR IMAGEM -->
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





<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTable').dataTable({
            "ordering": false
        })

    });
</script>