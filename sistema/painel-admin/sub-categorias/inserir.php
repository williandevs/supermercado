<?php

require_once("../../../conexao.php"); 

$nome = $_POST['nome-cat'];
$id_cat = $_POST['categoria'];

$nome_novo = strtolower( preg_replace("[^a-zA-Z0-9-]", "-", 
        strtr(utf8_decode(trim($nome)), utf8_decode("áàãâéêíóôõúüñçÁÀÃÂÉÊÍÓÔÕÚÜÑÇ"),
        "aaaaeeiooouuncAAAAEEIOOOUUNC-")) );
$nome_url = preg_replace('/[ -]+/' , '-' , $nome_novo);

$antigo = $_POST['antigo'];
$id = $_POST['txtid2'];

if($nome == ""){
	echo 'Preencha o Campo Nome!';
	exit();
}


if($nome != $antigo){
	$res = $pdo->query("SELECT * FROM sub_categorias where nome = '$nome'"); 
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);
	if(@count($dados) > 0){
			echo 'SubCategoria já Cadastrada no Banco!';
			exit();
		}
}


//SCRIPT PARA SUBIR FOTO NO BANCO
$caminho = '../../../assets/images/sub-categoria/' .@$_FILES['imagem']['name'];
if (@$_FILES['imagem']['name'] == ""){
  $imagem = "sem-foto.png";
}else{
  $imagem = @$_FILES['imagem']['name']; 
}

$imagem_temp = @$_FILES['imagem']['tmp_name']; 

$ext = pathinfo($imagem, PATHINFO_EXTENSION);   
if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg'){ 
move_uploaded_file($imagem_temp, $caminho);
}else{
	echo 'Extensão de Imagem não permitida!';
	exit();
}


if($id == ""){
	$res = $pdo->prepare("INSERT INTO sub_categorias (nome, nome_url, imagem, id_categoria) VALUES (:nome, :nome_url, :imagem, :id_categoria)");
	$res->bindValue(":imagem", $imagem);
}else{

	if($imagem == "sem-foto.png"){
		$res = $pdo->prepare("UPDATE sub_categorias SET nome = :nome, nome_url = :nome_url, id_categoria = :id_categoria WHERE id = :id");
	}else{
		$res = $pdo->prepare("UPDATE sub_categorias SET nome = :nome, nome_url = :nome_url, imagem = :imagem, id_categoria = :id_categoria WHERE id = :id");
		$res->bindValue(":imagem", $imagem);
	}

	$res->bindValue(":id", $id);
}

	$res->bindValue(":nome", $nome);
	$res->bindValue(":nome_url", $nome_url);
	$res->bindValue(":id_categoria", $id_cat);
	
	
	
	

	$res->execute();


echo 'Salvo com Sucesso!!';

?>