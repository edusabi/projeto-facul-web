<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/styleGlobal.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>Projeto Faculdade</title>
</head>
<body>

<?php include('navbar.php'); ?>

<div class="formLoginContainer">
    <form action="logar.php" method="POST" class="formLogin">
        <h1>Login</h1>
        <label>
            <span>E-mail</span>
            <input type="text" name="email" required>
        </label>
        <label>
            <span>Senha</span>
            <input type="password" name="senha" required>
        </label>
        <button type="submit">Entrar</button>
    </form>
</div>

</body>
</html>
