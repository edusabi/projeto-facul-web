<?php
// Verifique se o usuário está logado
$logado = isset($_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/styleGlobal.css">
    <title>Projeto faculdade</title>
</head>
<body>

<div class="rains-container">
    <div class="rain"></div>
    <div class="rain"></div>
    <div class="rain"></div>
    <div class="rain"></div>
    <div class="rain"></div>
    <div class="rain"></div>
    <div class="rain"></div>
    <div class="rain"></div>
    <div class="rain"></div>
    <div class="rain"></div>
    <div class="rain"></div>
    <div class="rain"></div>
</div>

<nav>
    <span class="logo">LOGO</span>
    <div class="itens">
        <ul>
            <li><a href="/projeto-facul-web">Home</a></li>
            
            <?php if ($logado): ?>
                <li><a href="ia.php">IA</a></li>
                <li><a href="/projeto-facul-web/sobre.php">Sobre</a></li>
                <li><a href="logout.php">Sair</a></li>
                <?php else: ?>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="registro.php">Registrar</a></li>
                    <li><a href="/projeto-facul-web/sobre.php">Sobre</a></li>
                <?php endif; ?>
        </ul>
    </div>
</nav>

<script>
    const rains = document.querySelectorAll(".rain");

    const getRandomNumber = (min, max) => {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };

    rains.forEach(rain => {
        rain.style = `--rain-delay:${getRandomNumber(0, 1500)}ms`;
    });
</script>

</body>
</html>
