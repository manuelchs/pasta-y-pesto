<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("#/inc/head.php") ?>
    <title>Pasta & Pasto - Nuestro menú</title>
    <script src="#/js/menu.js"></script>
</head>
<body>
    <section class="hero hero-menu">
        <?php include("#/inc/navbar.php"); ?>
        <div class="overlay"></div>
        <div class="main-text">
            <h1>nuestro</h1>
            <h2 class="cursiva">menú</h2>
        </div>
    </section>
    <section class="menu-wrapper">
        <div class="back-menu"></div>
        <div class="menu-container">
            <div class="options">
                <div class="option menu-opt menu-opt-active" menu="pastas">pastas</div>
                <div class="option menu-opt" menu="pizzas">pizzas</div>
                <div class="option menu-opt" menu="pastos">pastos</div>
                <div class="option menu-opt" menu="bebidas">bebidas</div>
                <div class="option menu-opt" menu="postres">postres</div>
            </div>
            <div id="pastas" class="menu-complete">
                <div class="icon">
                    <img src="#/images/icono-llevalo.png" alt="">
                </div>
                <div class="menu">
                    <h3 class="tit-menu">NÁPOLES</h3>
                    <p class="text-menu">Nuestra propia receta boloñesa (pomodoro y carne molida)</p>
                    <h3 class="tit-menu">GÉNOVA</h3>
                    <p class="text-menu">El pesto de la casa (aceite de oliva, albahaca y nuez)</p>
                    <h3 class="tit-menu">PORTOFINO</h3>
                    <p class="text-menu">Pasta con tinta de calamar, jitomate escalfado. aceitunas y camarones</p>
                    <h3 class="tit-menu">ROMA</h3>
                    <p class="text-menu">Salsa Alfredo con trocitos de jamón</p>
                    <h3 class="tit-menu">VENECIA</h3>
                    <p class="text-menu">Típica carbonara con panceta</p>
                    <h3 class="tit-menu">VERONA</h3>
                    <p class="text-menu">Deliciosa salsa cremosa de limón con vodka</p>
                    <h3 class="tit-menu">BOLONIA</h3>
                    <p class="text-menu">Pomodoro y berenjenas</p>
                    <h3 class="tit-menu">PARMA</h3>
                    <p class="text-menu">Salsa cremosa de tres quesos</p>
                    <h3 class="tit-menu">TARASCA</h3>
                    <p class="text-menu">Mezcla de chiles flameados en mezcal</p>
                    <h3 class="tit-menu">SIENA</h3>
                    <p class="text-menu">Salsa de miel y soya acompañada de pollo, almendras y champiñones</p>
                    <h3 class="tit-menu">DIABLA</h3>
                    <p class="text-menu">La más picosa de la carta (chipotle y camarones)</p>
                    <button class="main-button dark">ordenar</button>
                </div>
            </div>
            <div id="pizzas" class="menu-complete no-display">
                <div class="icon">
                    <img src="#/images/icono-ingredientes.png" alt="">
                </div>
                <div class="menu">
                    <h3 class="tit-menu">PIZZA 1</h3>
                    <p class="text-menu">Nuestra propia receta boloñesa (pomodoro y carne molida)</p>
                    <button class="main-button dark">ordenar</button>
                </div>
            </div>
            <div id="bebidas" class="menu-complete no-display">
                <div class="icon">
                    <img src="#/images/icono-pet.png" alt="">
                </div>
                <div class="menu">
                    <h3 class="tit-menu">bebidas</h3>
                    <p class="text-menu">Nuestra propia receta boloñesa (pomodoro y carne molida)</p>
                    <button class="main-button dark">ordenar</button>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-menu">
        <div class="menu-img-bg"></div>
        <div class="menu-img-bg"></div>
        <div class="menu-img-bg"></div>
    </section>
    <?php include("#/inc/footer.php") ?>
</body>
</html>