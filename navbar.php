
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
            
            <?php if (isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])): ?>
                <!-- Usuário logado -->
                <li><a href="ia.php">IA</a></li>
                <li><a href="/projeto-facul-web/sobre.php">Sobre</a></li>
                <li><a href="/projeto-facul-web/logout.php">Logout</a></li>
                <?php else: ?>
                    <!-- Usuário não logado -->
                    <li><a href="login.php">Login</a></li>
                    <li><a href="/projeto-facul-web/registro.php">Registro</a></li>
                    <li><a href="/projeto-facul-web/sobre.php">Sobre</a></li>
            <?php endif; ?>

        </ul>
    </div>
</nav>


<script>
    const rains = document.querySelectorAll(".rain");

    const getRandomNumber = (min, max)=>{
        return Math.floor(Math.random() * (max - min + 1) + min );
    };

    rains.forEach(rain=>{
        rain.style = `--rain-delay:${getRandomNumber(0, 1500)}ms`
    })
</script>

