<!-- Modal -->
<div class="modal fade" id="modalDados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <?php
                
                $titulo = @$_GET['funcao'] == 'editar' ? "Editar Registro" : "Inserir Registro";

                if (@$_GET['funcao'] == 'editar') {
                    $id2 = $_GET['id'];

                    $query = $pdo->prepare("SELECT * FROM sub_categorias WHERE id = ?");
                    $query->execute([$id2]);
                    $res = $query->fetch(PDO::FETCH_ASSOC);

                    $nome2 = $res['nome'];
                    $imagem2 = $res['imagem'];
                    $categoria2 = $res['id_categoria'];
                }

                ?>

                <h5 class="modal-title" id="exampleModalLabel"><?php echo $titulo ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form" method="POST">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Nome</label>
                        <input value="<?php echo htmlspecialchars(@$nome2) ?>" type="text" class="form-control form-control-sm" id="nome-cat" name="nome-cat" placeholder="Nome">
                    </div>

                    <div class="form-group">
                        <label>Categoria</label>
                        <select class="form-control form-control-sm" name="categoria" id="categoria">
                            <?php
                            if (@$_GET['funcao'] == 'editar') {
                                $query = $pdo->prepare("SELECT * FROM categorias WHERE id = ?");
                                $query->execute([$categoria2]);
                                $res = $query->fetch(PDO::FETCH_ASSOC);
                                $nomeCat = $res['nome'];
                                echo "<option value='" . $categoria2 . "' >" . htmlspecialchars($nomeCat) . "</option>";
                            }

                            $query2 = $pdo->query("SELECT * FROM categorias ORDER BY nome ASC");
                            $res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($res2 as $categoria) {
                                if (@$nomeCat != $categoria['nome']) {
                                    echo "<option value='" . $categoria['id'] . "' >" . htmlspecialchars($categoria['nome']) . "</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Imagem</label>
                        <input type="file" value="<?php echo htmlspecialchars(@$imagem2) ?>" class="form-control-file" id="imagem" name="imagem" onChange="carregarImg();">
                    </div>

                    <?php if (@$imagem2 != "") { ?>
                        <img src="../../assets/images/sub-categoria/<?php echo htmlspecialchars($imagem2) ?>" class="img-fluid" width="200" height="200" id="target">
                    <?php } else { ?>
                        <img src="../../assets/images/sub-categoria/sem-foto.png" width="200" height="200" id="target">
                    <?php } ?>

                    <small>
                        <div id="mensagem">

                        </div>
                    </small>

                </div>

                <div class="modal-footer">
                    <input value="<?php echo @$_GET['id'] ?>" type="hidden" name="txtid2" id="txtid2">
                    <input value="<?php echo htmlspecialchars(@$nome2) ?>" type="hidden" name="antigo" id="antigo">

                    <button type="button" id="btn-fechar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" name="btn-salvar" id="btn-salvar" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
