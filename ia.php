<?php

    require "./cadastro/conexaoDB.php";

    if( isset($_SESSION['idUser']) && !empty($_SESSION["idUser"]) ):?>

<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto faculdade</title>
    <link rel="stylesheet" href="./css/styleGlobal.css">
    <link rel="stylesheet" href="./css/navbar.css">
</head>

<?php include "navbar.php";?>

<div>
    <h1>Olá, seja bem vindo(a) ao lugar de pesquisa!</h1>

    <div>
        caixa da IA
    </div>

</div>

<?php
    else: header("Location: login.php"); endif;
?>