<link rel="stylesheet" href="/CSS/navbar-client.css" />

<nav>
    <div class="start">
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <div id="neonText">
            <a href="/PHP/index.php" class="nav-logo"> <img src="/IMAGES/logo.png" style="width:90px; height:90px;"> </a>
        </div>
    </div>

    <div class="nav-menu">
        <a href="/PHP/store.php" class="nav-link"> <img src="/IMAGES/pesquisa.png" style="width:50px; height:50px;"> </a>
        <a href="/PHP/cart.php" class="nav-link"> <img src="/IMAGES/cesto.png" style="width:50px; height:50px;"> </a>
        <a href="/PHP/store.php" class="nav-link"> 
            <?php
            echo $_SESSION["balance"] . "€"; //VOLTAr AQUI
            ?> 
        </a>

        <a href="/PHP/profile.php" class="nav-link"> <img src="/IMAGES/perfil.png" style="width:42px; height:42px;"> 
            <p id="username"> 

            </p> 
         </a>
    </div>
</nav>