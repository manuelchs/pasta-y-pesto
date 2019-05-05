<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("#/inc/head.php") ?>
    <title>Pasta & Pasto - Inicio</title>
    <script src="#/js/slider.js"></script>
    <script src="#/js/slider-sucursales.js"></script>
</head>
<body>
    <section class="hero hero-home">
        <?php include("#/inc/navbar.php"); ?>
        <div class="overlay"></div>
        <div class="main-text">
            <h1>tu pasta<br>donde quieras</h1>
            <h2 class="cursiva">fresca como lechuga</h2>
            <button class="main-button white">¡yo quiero!</button>
        </div>
    </section>
    <section class="main-section about-landing">
        <img src="#/images/draw-about.png" class="draw-about" alt="">
        <div class="main-wrapper">
            <div class="info-about">
                <div class="title-wrapper">
                    <h2 class="letter-sp">acerca de<br>nosotros</h2>
                    <img src="#/images/onda-dark.png" alt="">
                    <p class="cursiva">descubre</p>
                </div>
                <p>
                Somos un exitoso restaurante de comida rápida gourmet que sirve <b>pasta fresca artesanal</b> en prácticas cajitas de cartón personalizadas. Además de contar con un concepto de cocina abierta que ofrece a todos una experiencia única.
                </p>
                <button class="main-button dark">saber más</button>
            </div>
            <div class="img-four">
                <div class="row">
                    <img src="#/images/crop1.png" alt="">
                    <img src="#/images/crop2.png" alt="">
                </div>
                <div class="row">
                    <img src="#/images/crop3.png" alt="">
                    <img src="#/images/crop4.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="caracteristicas">
        <div class="main-wrapper">
            <div class="caracteristica">
                <img src="#/images/icono-llevalo.png" alt="">
                <span>llévala a<br>donde quieras</span>
            </div>
            <div class="caracteristica">
                <img src="#/images/icono-pet.png" alt="">
                <span>somos<br>pet friendly</span>
            </div>
            <div class="caracteristica">
                <img src="#/images/icono-ingredientes.png"" alt="">
                <span>los ingredientes<br>más frescos</span>
            </div>
        </div>
    </section>
    <section class="landing-video">
        <div class="video-container">
            <i class="fas fa-play"></i>
        </div>
    </section>
    <section class="especialidades-wrapper">
        <div class="titulo-especialidades">
            <div class="main-wrapper">
                <h2 class="letter-sp">nuestras</h2>
                <h3 class="cursiva">especialidades</h3>
                <img src="#/images/especias.png" alt="" class="adorno-titulo especias">
                <img src="#/images/camaron.png" alt="" class="adorno-titulo camaron">
                <img src="#/images/tomate-izq.png" alt="" class="adorno-titulo small tomate">
                <img src="#/images/romero.png" alt="" class="adorno-titulo romero">
                <img src="#/images/moño.png" alt="" class="adorno-titulo small monyo">
            </div>
        </div>
        <div class="especialidades">
            <div class="main-wrapper">
                <div class="especialidad texto">
                    <h3>especialidad 01</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button class="main-button dark">quiero pedir</button>
                </div>
                <div class="especialidad img bg1"></div>
                <div class="especialidad texto">
                    <h3>especialidad 01</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button class="main-button dark">quiero pedir</button>
                </div>
                <div class="especialidad img bg2"></div>
            </div>
            <div class="main-wrapper">
                <div class="especialidad img bg3"></div>
                <div class="especialidad texto">
                    <h3>especialidad 01</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button class="main-button dark">quiero pedir</button>
                </div>
                <div class="especialidad img bg4"></div>
                <div class="especialidad texto">
                    <h3>especialidad 01</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button class="main-button dark">quiero pedir</button>
                </div>
            </div>
        </div>
    </section>
    <section class="slider-section">
        <div id="moveIZQ" class="slider-button izq">
            <img src="#/images/flecha.png" alt="">
        </div>
        <div id="moveDER" class="slider-button der">
            <img src="#/images/flecha.png" alt="">
        </div>
        <div id="slider" class="slider-wrapper">
            <div class="slider-item rojo"></div>
            <div class="slider-item verde"></div>
            <div class="slider-item azul"></div>
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