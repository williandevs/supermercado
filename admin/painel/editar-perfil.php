<?php
session_start();
require_once("../../conexao.php");



$nome = $_POST['nome-usuario'];
$email = $_POST['email-usuario'];
$cpf = $_POST['cpf-usuario'];
$senha = $_POST['senha'];
$senha_crip = md5($_POST['senha']);

$antigo = $_POST['antigo'];
$id_usuario = $_POST['txtid'];

if($nome == ""){
    echo 'Preencha o Campo Nome!';
    exit();
}

if($cpf == ""){
    echo 'Preencha o Campo CPF!';
    exit();
}

if($email == ""){
    echo 'Preencha o Campo Email!';
    exit();
}

$res = $pdo->prepare("UPDATE usuarios SET nome = :nome, cpf = :cpf, email = :email, senha = :senha, senha_crip = :senha_crip WHERE id = :id");
$res->bindValue(":nome", $nome);
$res->bindValue(":email", $email);
$res->bindValue(":cpf", $cpf);
$res->bindValue(":senha", $senha);
$res->bindValue(":senha_crip", $senha_crip);
$res->bindValue(":id", $id_usuario);

$res->execute();

echo 'Salvo com Sucesso!';
?>
