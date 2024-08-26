
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
            <li><a href="ia.php">IA</a></li>
            <li><a href="/projeto-facul-web/sobre.php">Sobre</a></li>

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

