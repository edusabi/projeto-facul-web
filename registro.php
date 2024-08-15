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
</head>


<div class="formRegistroContainer">
    
    <form action="logar.php" method="POST" class="formRegistro">
        <h1>Registro</h1>
        
        <label>
            <span>Nome</span>
            <input type='text' name="nome">
        </label>
        
        <label>
            <span>E-mail</span>
            <input type="email" name="email">
        </label>
        
        <label>
            <span>Senha</span>
            <input type="password" name="senha">
        </label>

        <label>
            <span>Confirmar senha</span>
            <input type="password" name="senha">
        </label>
        
        <button type="submit">Enivar cadastro</button>
    </form>

</div>