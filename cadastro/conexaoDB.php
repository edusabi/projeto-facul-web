<?php 

    session_start();

    $localhost = "localhost";
    $user = "root";
    $pass = "";
    $banco = "cadastro";

    global $pdo;


    try{
        $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $pass);
    
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo "ERRO: " .$e->getMessage();
        exit;
    };

    

?>