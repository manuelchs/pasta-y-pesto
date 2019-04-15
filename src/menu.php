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
                <img class="bg-menu pos1" src="#/images/menu/bitmap.png" alt="">
                <img class="bg-menu pos4" src="#/images/menu/pasta.png" alt="">
                <img class="bg-menu pos5" src="#/images/menu/garlic.png" alt="">
                <div class="icon">
                    <img src="#/images/menu_pastas.png" alt="">
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
                <img class="bg-menu large pos2" src="#/images/menu/pizza.png" alt="">
                <img class="bg-menu pos5" src="#/images/menu/greens.png" alt="">
                <div class="icon">
                    <img src="#/images/menu_pizzas.png" alt="">
                </div>
                <div class="menu">
                    <h3 class="tit-menu">MARGARITA</h3>
                    <p class="text-menu">¡Simplemente es mejor! Jitomate y albahaca.</p>
                    <h3 class="tit-menu">NÁPOLI</h3>
                    <p class="text-menu">Servida con carne boloñesa.</p>
                    <h3 class="tit-menu">BAMBINO</h3>
                    <p class="text-menu">La favorita de los niños, jamón y peperoni.</p>
                    <h3 class="tit-menu">PARMA</h3>
                    <p class="text-menu">Mozarella, queso azul y parmesano.</p>
                    <h3 class="tit-menu">VATICANO</h3>
                    <p class="text-menu">Rodajas de berengenay calabacitas decorada con cebollas y espinacas.</p>
                    <h3 class="tit-menu">TOSCANA</h3>
                    <p class="text-menu">Jitomate, queso de cabra, nuez y arúgula.</p>
                    
                    <button class="main-button dark">ordenar</button>
                </div>
            </div>
            
            <div id="pastos" class="menu-complete no-display">
                <img class="bg-menu pos5 medium" src="#/images/menu/salad.png" alt="">
                <img class="bg-menu pos6 medium" src="#/images/menu/salad2.png" alt="">
                <div class="icon">
                    <img src="#/images/menu_pastos.png" alt="">
                </div>
                <div class="menu">
                    <h3 class="tit-menu">FLORENCIA</h3>
                    <p class="text-menu">Frutos rojos, queso de cabra y nuez caramelizada.</p>
                    <h3 class="tit-menu">pasta&pasto</h3>
                    <p class="text-menu">¡La favorita! Trocito de salmón, fusilli y jitomate cherry.</p>
                    <h3 class="tit-menu">milán</h3>
                    <p class="text-menu">Jamón serrano, triángulos de parmesano, aceitunas negras y perlas de melón</p>
                    <h3 class="tit-menu">palermo</h3>
                    <p class="text-menu">Calabacitas, berenjenas, pimientos y cebolla asada.</p>
                    <h3 class="tit-menu">pompeya</h3>
                    <p class="text-menu">Hongo portobello gratinado con vino tinto y romero.</p>
                    <br>
                    <p class="text-menu" style="margin-bottom: 0;">*Todos los pastos van sobre cama de lechugas</p>
                    <p class="text-menu">*Todos los pastos incluyen un alioli: fresa, cilantro o habanero.</p>
                    <button class="main-button dark">ordenar</button>
                </div>
            </div>

            <div id="bebidas" class="menu-complete no-display">
                <img class="bg-menu pos1 normal" src="#/images/menu/guayaba.png" alt="">
                <img class="bg-menu pos2 normal" src="#/images/menu/mint.png" alt="">
                <img class="bg-menu pos5 normal" src="#/images/menu/fresas.png" alt="">
                <img class="bg-menu pos6 normal" src="#/images/menu/orange.png" alt="">
                <div class="icon">
                    <img src="#/images/menu_bebidas.png" alt="">
                </div>
                <div class="menu">
                    <h3 class="tit-menu">zenzero</h3>
                    <p class="text-menu">Nuestra especialidad de guayaba con fresa y un toque de jengibre</p>
                    <h3 class="tit-menu">Limone</h3>
                    <p class="text-menu">Limón con chía y menta</p>
                    <h3 class="tit-menu">Anguria</h3>
                    <p class="text-menu">Sandía con romero</p>
                    <h3 class="tit-menu">Agua natural</h3>
                    <p class="text-menu">Embotellada</p>
                    <h1 class="tit-menu">con alcohol</h1>
                    <h2 class="tit-menu">vinos</h2>
                    <h3 class="tit-menu">Botellas</h3>
                    <p class="text-menu">Vino blanco X.A. Blanc de Blancs 750ml</p>
                    <hr>
                    <p class="text-menu">Vino tinto L.A. Cetto Cabernet Sauvignon 750ml</p>
                    <p class="text-menu">Vino tinto X.A. Domeq Cabernet Sauvignon 750ml</p>
                    <p class="text-menu">Vino tinto Ruinite Lambrusco 750ml</p>
                    <h3 class="tit-menu">Copas</h3>
                    <p class="text-menu">Vino blanco X.A. Blanc de Blancs 750ml</p>
                    <hr>
                    <p class="text-menu">Vino tinto L.A. Cetto Cabernet Sauvignon 750ml</p>
                    <p class="text-menu">Vino tinto X.A. Domeq Cabernet Sauvignon 750ml</p>
                    
                    <h2 class="tit-menu">Cocteleria</h2>
                    <h3 class="tit-menu">clericot</h3>
                    <p class="text-menu">Sabor dulce y liviano con vino tinto y frutas</p>
                    <h3 class="tit-menu">white sangría</h3>
                    <p class="text-menu">Sangría de vino blanco y durazno</p>
                    <h3 class="tit-menu">rossini</h3>
                    <p class="text-menu">Frambuesa fresca, hierbabuena y vino rosado</p>
                    <h3 class="tit-menu">bellini</h3>
                    <p class="text-menu">Puré de melocotón y prosecco</p>
                    <h3 class="tit-menu">spritz</h3>
                    <p class="text-menu">Su naranja es inconfundible. Aperol y Prosecco.</p>
                    <button class="main-button dark">ordenar</button>
                </div>
            </div>
        <div id="postres" class="menu-complete no-display">
                <img class="bg-menu pos5 normal" src="#/images/menu/orange_postres.png" alt="">
                <img class="bg-menu pos6 medium" src="#/images/menu/cajeta.png" alt="">
                <div class="icon">
                    <img src="#/images/menu_postres.png" alt="">
                </div>
                <div class="menu">
                    <h3 class="tit-menu">crepas</h3>
                    <p class="text-menu">Bañadas en salsa de cajeta flameadas en licor de naranja</p>
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