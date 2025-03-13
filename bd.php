<?php
function conectar(){
    $user = 'postgres';
    $password = 'root';
    $dsn = "pgsql:host=localhost;port=5432;dbname=managym_db";

    try{
        $pdo = new PDO($dsn, $user, $password);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "Falha ao conectar ao Banco de Dados. <br>";
        die($e->getMessage());
    }
    return $pdo;
}
?>