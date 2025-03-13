<?php
include_once 'bd.php';
$bd = conectar();
session_start();
$cpf=filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_SPECIAL_CHARS);
$senha=filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

$query = "select per_cpf , per_senha from personal where per_cpf = '$cpf' and per_senha = '$senha' ";

$resultado = $bd -> query($query);

if($resultado->rowCount()==1){
    $_SESSION['USER'] = $cpf;
    header("location:indexpersonal.php");
}else{
    $erro = "CPF e/ou Senha inválidos";
    header("location:loginpersonal.php?erro=$erro");
}