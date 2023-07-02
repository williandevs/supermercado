<?php

require_once("../conexao.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmarSenha = $_POST['confirmar-senha'];

// Verificar se todos os campos foram preenchidos
if (empty($nome) || empty($cpf) || empty($email) || empty($senha) || empty($confirmarSenha)) {
    echo 'Preencha todos os campos!';
    exit();
}

// Verificar se as senhas coincidem
if ($senha !== $confirmarSenha) {
    echo 'As senhas não coincidem!';
    exit();
}

// Verificar se o CPF já está cadastrado
$res = $pdo->prepare("SELECT * FROM usuarios WHERE cpf = :cpf");
$res->bindValue(":cpf", $cpf);
$res->execute();
$dados = $res->fetchAll(PDO::FETCH_ASSOC);

if (count($dados) > 0) {
    echo 'CPF já cadastrado!';
    exit();
}

// Gerar hash da senha
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

// Inserir dados na tabela de usuários
$res = $pdo->prepare("INSERT INTO usuarios (nome, cpf, email, senha, senha_crip, nivel) VALUES (:nome, :cpf, :email, :senha, :senha_crip, :nivel)");
$res->bindValue(":nome", $nome);
$res->bindValue(":cpf", $cpf);
$res->bindValue(":email", $email);
$res->bindValue(":senha", $senha);
$res->bindValue(":senha_crip", $senhaHash);
$res->bindValue(":nivel", 'Cliente');
$res->execute();

// Inserir dados na tabela de clientes
 $res = $pdo->prepare("INSERT INTO clientes (nome, cpf, email) VALUES (:nome, :cpf, :email)");
$res->bindValue(":nome", $nome);
$res->bindValue(":cpf", $cpf);
$res->bindValue(":email", $email);
$res->execute(); 

// Verificar se o email já está cadastrado
 $res = $pdo->prepare("SELECT * FROM emails WHERE email = :email");
$res->bindValue(":email", $email);
$res->execute();
$dados = $res->fetchAll(PDO::FETCH_ASSOC); 

 if (count($dados) == 0) {
    $res = $pdo->prepare("INSERT INTO emails (nome, email, ativo) VALUES (:nome, :email, :ativo)");
    $res->bindValue(":nome", $nome);
    $res->bindValue(":email", $email);
    $res->bindValue(":ativo", "Sim");
    $res->execute();
}
 
echo 'Cadastrado com Sucesso!';
?>
