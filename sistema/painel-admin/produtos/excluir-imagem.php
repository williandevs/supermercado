<?php

require_once("../../../conexao.php"); 

$id = $_POST['id_foto_pequena'];

$pdo->query("DELETE from imagens WHERE id = '$id'");

echo 'Excluído com Sucesso!!';

?>