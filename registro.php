<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/styleGlobal.css">
    <link rel="stylesheet" href="./css/registro.css">
    <title>Projeto Faculdade</title>
</head>
<body>

<?php include("navbar.php"); ?>

<div class="formRegistroContainer">
    <form class="formRegistro" action="registrar.php" method="POST">
        <h1>Cadastro</h1>
        <label for="nome">
            Nome
            <input type="text" id="nome" name="nome" required>
        </label>
        <label for="email">
            E-mail
            <input type="email" id="email" name="email" required>
        </label>
        <label for="senha">
            Senha
            <input type="password" id="senha" name="senha" required>
        </label>
        <label for="confirmar_senha">
            Confirmar Senha
            <input type="password" id="confirmar_senha" name="confirmar_senha" required>
        </label>
        <button type="submit">Cadastrar</button>
    </form>
</div>

</body>
</html>
