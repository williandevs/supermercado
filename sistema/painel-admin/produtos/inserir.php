<?php
require_once("../../../conexao.php");

$nome = $_POST['nome-cat'];
$id_cat = $_POST['categoria'];
$id_sub_cat = $_POST['sub-categoria'];
$descricao = $_POST['descricao'];
$descricao_longa = $_POST['descricao_longa'];
$valor = $_POST['valor'];
$estoque = $_POST['estoque'];
$tipo_envio = $_POST['tipo_envio'];
$palavras = $_POST['palavras'];
$ativo = $_POST['ativo'];
$peso = $_POST['peso'];
$largura = $_POST['largura'];
$altura = $_POST['altura'];
$comprimento = $_POST['comprimento'];
$modelo = $_POST['modelo'];
$valor_frete = $_POST['valor-frete'];

$valor = strtr($valor, [',' => '.']);
$valor_frete = strtr($valor_frete, [',' => '.']);
$peso = strtr($peso, [',' => '.']);
$largura = strtr($largura, [',' => '.']);
$altura = strtr($altura, [',' => '.']);
$comprimento = strtr($comprimento, [',' => '.']);


// ...

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

// SCRIPT PARA SUBIR FOTO NO BANCO
$caminho = '../../img/produtos/' . @$_FILES['imagem']['name'];
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
    $res = $pdo->prepare("INSERT INTO produtos(categoria, sub_categoria, nome, nome_url, descricao, descricao_longa, valor, imagem, estoque, tipo_envio, palavras, ativo, peso, largura, altura, comprimento, modelo, valor_frete)
    VALUES (:categoria, :sub_categoria, :nome, :nome_url, :descricao, :descricao_longa, :valor, :imagem, :estoque, :tipo_envio, :palavras, :ativo, :peso, :largura, :altura, :comprimento, :modelo, :valor_frete)");
    $res->bindValue(":sub_categoria", $id_sub_cat);
    $res->bindValue(":imagem", $imagem);
} else {
    if ($imagem == "sem-foto.png") {
        $res = $pdo->prepare("UPDATE produtos SET categoria = :categoria, sub_categoria = :sub_categoria, nome = :nome, nome_url = :nome_url, descricao = :descricao, descricao_longa = :descricao_longa, valor = :valor, estoque = :estoque, tipo_envio = :tipo_envio, palavras = :palavras, ativo = :ativo, peso = :peso, largura = :largura, altura = :altura, comprimento = :comprimento, modelo = :modelo, valor_frete = :valor_frete WHERE id = :id");
    } else {
        $res = $pdo->prepare("UPDATE produtos SET categoria = :categoria, sub_categoria = :sub_categoria, nome = :nome, nome_url = :nome_url, descricao = :descricao, descricao_longa = :descricao_longa, valor = :valor, imagem = :imagem, estoque = :estoque, tipo_envio = :tipo_envio, palavras = :palavras, ativo = :ativo, peso = :peso, largura = :largura, altura = :altura, comprimento = :comprimento, modelo = :modelo, valor_frete = :valor_frete WHERE id = :id");
        $res->bindValue(":imagem", $imagem);
    }
    $res->bindValue(":id", $id);
}

$res->bindValue(":categoria", $id_cat);
$res->bindValue(":sub_categoria", $id_sub_cat);
$res->bindValue(":nome", $nome);
$res->bindValue(":nome_url", $nome_url);
$res->bindValue(":descricao", $descricao);
$res->bindValue(":descricao_longa", $descricao_longa);

// Verificar se o campo valor está preenchido
if ($valor !== "") {
    // Verificar se o valor do campo valor é um número
    if (!is_numeric($valor)) {
        echo 'Campo valor inválido!';
        exit();
    }
    $res->bindValue(":valor", $valor);
} else {
    $res->bindValue(":valor", null, PDO::PARAM_NULL);
}

// Verificar se o campo estoque está preenchido
if ($estoque !== "") {
    // Verificar se o valor do campo estoque é um número
    if (!is_numeric($estoque)) {
        echo 'Campo estoque inválido! ';
        exit();
    }
    $res->bindValue(":estoque", $estoque);
} else {
    $res->bindValue(":estoque", null, PDO::PARAM_NULL);
}

$res->bindValue(":tipo_envio", $tipo_envio);

// Verificar se o campo palavras está preenchido
if ($palavras !== "") {
    $res->bindValue(":palavras", $palavras);
} else {
    $res->bindValue(":palavras", null, PDO::PARAM_NULL);
}

// Verificar se o campo ativo está preenchido
if ($ativo !== "") {
    $res->bindValue(":ativo", $ativo);
} else {
    $res->bindValue(":ativo", null, PDO::PARAM_NULL);
}

// Verificar se o campo peso está preenchido
if ($peso !== "") {
    // Verificar se o valor do campo peso é um número
    if (!is_numeric($peso)) {
        echo 'Campo peso inválido!';
        exit();
    }
    $res->bindValue(":peso", $peso);
} else {
    $res->bindValue(":peso", null, PDO::PARAM_NULL);
}

// Verificar se o campo largura está preenchido
if ($largura !== "") {
    // Verificar se o valor do campo largura é um número
    if (!is_numeric($largura)) {
        echo 'Campo largura inválido!';
        exit();
    }
    $res->bindValue(":largura", $largura);
} else {
    $res->bindValue(":largura", null, PDO::PARAM_NULL);
}

// Verificar se o campo altura está preenchido
if ($altura !== "") {
    // Verificar se o valor do campo altura é um número
    if (!is_numeric($altura)) {
        echo 'Campo altura inválido!';
        exit();
    }
    $res->bindValue(":altura", $altura);
} else {
    $res->bindValue(":altura", null, PDO::PARAM_NULL);
}

// Verificar se o campo comprimento está preenchido
if ($comprimento !== "") {
    // Verificar se o valor do campo comprimento é um número
    if (!is_numeric($comprimento)) {
        echo 'Campo comprimento inválido!';
        exit();
    }
    $res->bindValue(":comprimento", $comprimento);
} else {
    $res->bindValue(":comprimento", null, PDO::PARAM_NULL);
}

$res->bindValue(":modelo", $modelo);

// Verificar se o campo valor_frete está preenchido
if ($valor_frete !== "") {
    // Verificar se o valor do campo valor_frete é um número
    if (!is_numeric($valor_frete)) {
        echo 'Campo valor_frete inválido!';
        exit();
    }
    $res->bindValue(":valor_frete", $valor_frete);
} else {
    $res->bindValue(":valor_frete", null, PDO::PARAM_NULL);
}

$res->execute();

echo 'Salvo com Sucesso!!';
