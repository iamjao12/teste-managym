<!DOCTYPE html>
<?php
    include_once 'bd.php';
    $bd = conectar();
    session_start();
    $erro = filter_input(INPUT_GET, "erro", FILTER_SANITIZE_SPECIAL_CHARS);
    if(isset($_SESSION['USER'])){
        $cpf = $_SESSION['USER'];
    }else{
        $cpf = ' ';
    }

    $consult_pers = "SELECT per_nome FROM personal WHERE per_cpf = '$cpf' ";
    $result_pers = $bd -> query($consult_pers);
    $nome_pers = $result_pers->fetchColumn();

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início - Personal</title>
</head>
<body>
    <strong>Olá, <?=$nome_pers?></strong>
</body>
</html>