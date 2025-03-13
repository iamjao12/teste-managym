<!DOCTYPE html>
<?php
    include_once 'bd.php';
    $cpf = filter_input(INPUT_POST,"cpf",FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST,"senha",FILTER_SANITIZE_SPECIAL_CHARS);
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $tel = filter_input(INPUT_POST, "tel", FILTER_SANITIZE_SPECIAL_CHARS);
    $erro = filter_input(INPUT_GET,"erro",FILTER_SANITIZE_SPECIAL_CHARS);
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar - Personal</title>
</head>
<body>
    <div class="erro">
        <?=$erro?>
    </div>
    
    <h1>Registrar - Personal</h1>
    <form action="logarpersonal.php" method="post">
    <div>
        <label>Nome</label>
        <input type="text" name="nome" value="<?=$cpf?>">
        </div>
        <div>
        <label>CPF</label>
        <input type="text" name="cpf" value="<?=$cpf?>">
        </div>
        <div>
        <label>E-mail</label>
        <input type="text" name="email" value="<?=$cpf?>">
        </div>
        <div>
        <label>Telefone</label>
        <input type="text" name="tel" value="<?=$cpf?>">
        </div>
        <div>
        <label>Senha</label>
        <input type="password" name="senha" value="<?=$senha?>">
        </div>
        <input type="submit" value="Login">
    </form>
    <div>
        <label>Já possui uma conta?</label>
        <a href="loginpersonal.php">Fazer Login</a>
    </div>
</body>
</html>