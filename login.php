<?php

    include "navbar.php";

?>

<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto faculdade</title>
    <link rel="stylesheet" href="css/styleGlobal.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/login.css">
</head>

    <img src="./img/gifNeon.gif" alt="" class="gifNeon">

<div class="formLoginContainer">
    
    <form action="logar.php" method="POST" class="formLogin">
        <h1>Login</h1>
        
        <label>
            <span>E-mail</span>
            <input type="email" name="email" autocomplete="none">
        </label>
        
        <label>
            <span>Senha</span>
            <input type="password" name="senha">
        </label>
        
        <button type="submit">Entrar</button>
    </form>

</div>

