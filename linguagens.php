
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/styleGlobal.css">
    <link rel="stylesheet" href="./css/linguagens.css">
    <title>Projeto faculdade</title>
</head>

<?php 
include("navbar.php")
?>

<body>
    <h1>Olá, aqui é o melhor lugar sobre as principais linguagens de programação do mundo</h1>

    <div class="container_linguagens">

        <div>
            <img src="./img/front.jpg" alt="">
            <a href="front.php"><button>Front-End</button></a>
        </div>
        
        <div>
            <img src="./img/back.jpg" alt="">
            <a href="back.php"><button>Back-End</button></a>
        </div>
        
        <div>
            <img src="./img/full stack.jpg" alt="">
            <a href="full.php"><button>Full-Stack</button></a>
        </div>
        
        <div>
            <img src="./img/mobile.png" alt="">
            <a href="mobile.php"><button>Mobile</button></a>
        </div>
        

    </div>

</body>