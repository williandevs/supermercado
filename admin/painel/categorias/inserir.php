<?php

require_once("../../../conexao.php");

$nome = $_POST['nome-cat'];

$nome = preg_replace('/[^a-zA-Z0-9áàãâéêíóôõúüñçÁÀÃÂÉÊÍÓÔÕÚÜÑÇ\s-]/u', '', $nome);
$nome = strtolower($nome);
$nome = preg_replace('/\s+/', '-', $nome);
$nome_url = $nome;


$antigo = $_POST['antigo'];
$id = $_POST['txtid2'];

if ($nome == "") {
    echo 'Preencha o Campo Nome!';
    exit();
}

if ($nome != $antigo) {
    $res = $pdo->query("SELECT * FROM categorias where nome = '$nome'");
    $dados = $res->fetchAll(PDO::FETCH_ASSOC);
    if (@count($dados) > 0) {
        echo 'Categoria já Cadastrada no Banco!';
        exit();
    }
}

// SCRIPT PARA SUBIR FOTO NO BANCO
$caminho = '../../assets/img/categorias/' . @$_FILES['imagem']['name'];
if (@$_FILES['imagem']['name'] == "") {
    $imagem = "sem-foto.png";
} else {
    $imagem = @$_FILES['imagem']['name'];
}

$imagem_temp = @$_FILES['imagem']['tmp_name'];

$ext = pathinfo($imagem, PATHINFO_EXTENSION);
if ($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg') {
    move_uploaded_file($imagem_temp, $caminho);
} else {
    echo 'Extensão de Imagem não permitida!';
    exit();
}

if ($id == "") {
    $res = $pdo->prepare("INSERT INTO categorias (nome, nome_url, imagem) VALUES (:nome, :nome_url, :imagem)");
    $res->bindValue(":imagem", $imagem);
} else {
    if ($imagem == "sem-foto.png") {
        $res = $pdo->prepare("UPDATE categorias SET nome = :nome, nome_url = :nome_url WHERE id = :id");
    } else {
        $res = $pdo->prepare("UPDATE categorias SET nome = :nome, nome_url = :nome_url, imagem = :imagem WHERE id = :id");
        $res->bindValue(":imagem", $imagem);
    }
    
    $res->bindValue(":id", $id);
}

$res->bindValue(":nome", $nome);
$res->bindValue(":nome_url", $nome_url);


$res->execute();

echo 'Salvo com Sucesso!!';
?>

