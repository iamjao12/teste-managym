<!DOCTYPE html>
<?php
    include_once 'bd.php';
    $cpf = filter_input(INPUT_POST,"cpf",FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST,"senha",FILTER_SANITIZE_SPECIAL_CHARS);
    $erro = filter_input(INPUT_POST,"erro",FILTER_SANITIZE_SPECIAL_CHARS);
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aluno</title>
</head>
<body>
    <h1>Login - Aluno</h1>
    <form>
        <div>
        <label>CPF</label>
        <input type="text" name="cpf" value="<?=$cpf?>">
        </div>
        <div>
        <label>Senha</label>
        <input type="password" name="senha" value="<?=$senha?>">
        </div>
    </form>
    <div class="erro">
        <?=$erro?>
    </div>
    <div>
        <label>Ainda não tem uma conta?</label>
        <a href="registraraluno.php">Cadastrar-se</a>
    </div>
</body>
</html>