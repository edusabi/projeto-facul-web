<?php

    include "navbar.php";

?>

<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto faculdade</title>
    <link rel="stylesheet" href="./css/styleGlobal.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/registro.css">
</head>

<img src="./img/gifNeon.gif" alt="" class="gifNeon2">

<div class="formRegistroContainer">
    
    <form action="registrar.php" method="POST" class="formRegistro">
        <h1>Registro</h1>
        
        <label>
            <span>Nome</span>
            <input type='text' name="nome" autocomplete="none">
        </label>
        
        <label>
            <span>E-mail</span>
            <input type="email" name="email" autocomplete="none">
        </label>
        
        <label>
            <span>Senha</span>
            <input type="password" name="senha" autocomplete="none">
        </label>

        <label>
            <span>Confirmar senha</span>
            <input type="password" name="ConfirmarSenha" autocomplete="none">
        </label>
        
        <button type="submit">Enivar cadastro</button>
    </form>

</div>