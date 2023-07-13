<?php

require_once("../conexao.php");
session_start();

$email = $_POST['email_login'];
$senha = $_POST['senha_login'];

$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
$stmt->bindValue(':email', $email);
$stmt->execute();
$dados = $stmt->fetch(PDO::FETCH_ASSOC);

if ($dados) {
    $senha_crip = $dados['senha_crip'];
    $senha_texto = $dados['senha'];

    // Verifica se a senha em formato de texto simples coincide
    if ($senha === $senha_texto) {
        $_SESSION['id_usuario'] = $dados['id'];
        $_SESSION['nome_usuario'] = $dados['nome'];
        $_SESSION['email_usuario'] = $dados['email'];
        $_SESSION['cpf_usuario'] = $dados['cpf'];
        $_SESSION['nivel_usuario'] = $dados['nivel'];
    }
    // Verifica se a senha criptografada coincide
    elseif (password_verify($senha, $senha_crip)) {
        $_SESSION['id_usuario'] = $dados['id'];
        $_SESSION['nome_usuario'] = $dados['nome'];
        $_SESSION['email_usuario'] = $dados['email'];
        $_SESSION['cpf_usuario'] = $dados['cpf'];
        $_SESSION['nivel_usuario'] = $dados['nivel'];
    }
}

// Verifica se o usuário está autenticado
if (isset($_SESSION['id_usuario']) && $_SESSION['nivel_usuario'] == 'Admin') {
    echo "<script language='javascript'> window.location='painel' </script>";
    exit;
} else {
    echo "<script language='javascript'> window.alert('Dados Incorretos!') </script>";
    echo "<script language='javascript'> window.location='index.php' </script>";
}
