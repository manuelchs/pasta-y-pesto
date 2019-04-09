<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("#/inc/head.php") ?>
    <title>Pasta & Pasto - Franquicias</title>
</head>
<body>
    <section class="hero hero-franquicias">
        <?php include("#/inc/navbar.php"); ?>
        <div class="overlay"></div>
        <div class="main-text">
            <h1>nuestras</h1>
            <h2 class="cursiva">franquicias</h2>
        </div>
    </section>
    <section class="franquicias">
        <div class="title-wrapper">
            <img src="#/images/onda-dark.png" alt="">
            <div class="quienes-titulo">
                <h2 class="letter-sp">elige tu modelo de franquicia</h2>
            </div>
            <img src="#/images/onda-dark.png" alt="">
        </div>
        <div class="main-wrapper">
            <div class="fran-row">
                <div class="input-wrapper">
                    <input class="radio-franquicia" id="f1" type="radio" name="franquicia" value="1">
                    <label for="f1">
                        <p>estándar</p>
                        <p>Consiste en la apertura y funcionamiento de un establecimiento de PASTA&PASTO en un local comercial a pie de calle o dentro de un centro comercial, con área de mesas propias.</p>
                    </label>
                </div>
                <div class="input-wrapper">
                    <input class="radio-franquicia" id="f2" type="radio" name="franquicia" value="1">
                    <label for="f2">
                        <p>fast food</p>
                        <p>Consiste en la apertura y funcionamiento de un establecimiento de PASTA&PASTO en un local comercial en el área Food Court con mesas comunes, dentro de un centro comercial</p>
                    </label>
                </div>
                <div class="input-wrapper">
                    <input class="radio-franquicia" id="f3" type="radio" name="franquicia" value="1">
                    <label for="f3">
                        <p>food container</p>
                        <p>Consiste en la apertura y funcionamiento de un establecimiento de PASTAYPASTO en un contenedor de transporte maritimo adaptado en un lugar fijo, éste puede moverse de locación.</p>
                    </label>
                </div>
            </div>
            <div class="fran-row">
                <div class="input-wrapper">
                    <input class="radio-franquicia" id="f4" type="radio" name="franquicia" value="1">
                    <label for="f4">
                        <p>food truck</p>
                        <p>Consiste en la apertura y funcionamiento de un establecimiento de PASTA&PASTO en un camión para operar en un lugar fijo o en espectáculos</p>
                    </label>
                </div>
                <div class="input-wrapper">
                    <input class="radio-franquicia" id="f5" type="radio" name="franquicia" value="1">
                    <label for="f5">
                        <p>restaurant bar</p>
                        <p>Consiste en la apertura y funcionamiento de un establecimiento de PASTA&PASTO en un local mayor a 170 metros cuadrados con más sillas y mesas con venta de vino y licores.</p>
                    </label>
                </div>
            </div>
            
        </div>
    </section>
    
    <?php include("#/inc/footer.php") ?>
</body>
</html>