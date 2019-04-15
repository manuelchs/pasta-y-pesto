<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("#/inc/head.php") ?>
    <title>Pasta & Pasto - Contacto</title>
    <script src="#/js/slider-sucursales.js"></script>
</head>
<body>
    <section class="hero hero-contacto">
        <?php include("#/inc/navbar.php"); ?>
        <div class="main-text">
            <h1 class="letter-sp">CONTACTANOS</h1>
        </div>
    </section>
    <section class="sucursales-section">
        <div class="main-wrapper">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d386.78625811855835!2d-101.16568695552294!3d19.689801242968176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0dfec6271515%3A0x617dec995f5897c5!2sPasta+Y+Pasto!5e0!3m2!1ses!2smx!4v1549067531561" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="sucursales-wrapper">
                <img class="img-sucursales ajo" src="#/images/ajo.png" alt="">                
                <img class="img-sucursales tomate" src="#/images/tomate-der.png" alt="">               
                <img class="img-sucursales albahaca" src="#/images/albahaca.png" alt="">               
                <img class="img-sucursales palos" src="#/images/draw-about.png" alt="">               
                <img class="img-sucursales codito" src="#/images/codito.png" alt="">               
                <img class="img-sucursales penne" src="#/images/penne.png" alt="">               
                <img class="img-sucursales bola" src="#/images/pastabola.png" alt="">            
                <div class="sucursales">
                    <h3 class="letter-sp">sucursales</h3>
                    <div class="slider-sucursal">
                        <div id="slider-sucursal" class="slider-sucursal-wrapper">
                            <div id="sucursalIZQ" class="slider-button izq">
                                <img src="#/images/flecha.png" alt="">
                            </div>
                            <div id="sucursalDER" class="slider-button der">
                                <img src="#/images/flecha.png" alt="">
                            </div>
                            <div class="slider-sucursal-item">
                                <h4>matriz</h4>
                                <p>Teniente Alemán #510</p>
                                <p>Col. Chapultepec Sur. Morelia, Mich.</p>
                                <p class="phone">T.  3249706</p>
                                <p>pastaypasto@gmail.com</p>
                            </div>
                            <div class="slider-sucursal-item">
                                <h4>sucursal 2</h4>
                                <p>Teniente Alemán #510</p>
                                <p>Col. Chapultepec Sur. Morelia, Mich.</p>
                                <p class="phone">T.  3249706</p>
                                <p>pastaypasto@gmail.com</p>
                            </div>
                            <div class="slider-sucursal-item">
                                <h4>sucursal 3</h4>
                                <p>Teniente Alemán #510</p>
                                <p>Col. Chapultepec Sur. Morelia, Mich.</p>
                                <p class="phone">T.  3249706</p>
                                <p>pastaypasto@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <button class="main-button dark">ver todas</button>
                </div>
            </div>
        </div>
    </section>
    <?php include("#/inc/footer.php") ?>
</body>
</html>