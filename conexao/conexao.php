<?php

    $hostname = "localhost";
    $bancodedados = "cadastro";
    $usuario = "root";
    $pass = "";

    $mysqli = new mysqli($hostname, $usuario,  $pass, $bancodedados);
    
    $mysqli->set_charset("utf8mb4");
?>