<?php include_once("config.php")?>

<?php

date_default_timezone_set('America/Sao_Paulo');


try {
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco",
     $usuario, $senha);
   
} catch (PDOException $error) {
    echo "Error ao conectar com o banco de dados";
}


