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
    <section class="modelo-franquicias">
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
    <section class="franquicia-formulario">
        <div class="main-wrapper">
            <p>Agradecemos su interés por nuestra franquicia, para continuar con el proceso, le requerimos el llenado del siguiente formulario.</p>
            <form class="main-form" action="">
                <h2>Datos generales</h2>
                <div class="double-input">
                    <input type="text" placeholder="Nombre *">
                    <input type="text" placeholder="Apellidos *">
                </div>
                <div class="one-input">
                    <input type="text" placeholder="Dirección *">
                </div>
                <div class="double-input">
                    <input type="text" placeholder="Número exterior *">
                    <input type="text" placeholder="Número interior *">
                </div>
                <div class="double-input">
                    <input type="text" placeholder="Colonia *">
                    <input type="text" placeholder="Código postal *">
                </div>
                <div class="double-input">
                    <input type="text" placeholder="Delegación *">
                    <input type="text" placeholder="Ciudad *">
                </div>
                <div class="double-input">
                    <input type="text" placeholder="Estado *">
                    <input type="text" placeholder="Teléfono *">
                </div>
                <div class="one-input">
                    <input type="text" placeholder="Correo Electrónico *">
                </div>
                <div class="double-input">
                    <input type="text" placeholder="Fecha de nacimiento *">
                    <input type="text" placeholder="Estado Civil">
                </div>
                <div class="one-input">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Ciudad (zona y/o colonia) donde pretender ubicar la franquicia">Ciudad (zona y/o colonia) donde pretender ubicar la franquicia</textarea>
                </div>
                <h2>nivel académico</h2>
                <div class="double-input">
                    <input type="text" placeholder="Nivel de estudios *">
                    <input type="text" placeholder="Profesión *">
                </div>
                <div class="one-input">
                    <input type="text" placeholder="Universidad o institución *">
                </div>
                <div class="one-input">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Otros">Otros</textarea>
                </div>
                <h2>ocupación actual o anterior</h2>
                <div class="one-input">
                    <input type="text" placeholder="Nombre de la empresa o negocio *">
                </div>
                <div class="double-input">
                    <input type="text" placeholder="Giro de la empresa o negocio">
                    <input type="text" placeholder="Puesto o función *">
                </div>
                <div class="double-input">
                    <input type="text" placeholder="Antigüedad en la empresa *">
                    <input type="text" placeholder="Teléfono de la empresa o negocio *">
                </div>
                <h2>experiencia empresarial</h2>
                <div class="one-input">
                    <textarea name="" id="" cols="30" rows="10" placeholder="¿Ha tenido experiencia en negocios propios? Explique."></textarea>
                </div>
                <div class="one-input">
                    <textarea name="" id="" cols="30" rows="10" placeholder="¿Ha tenido experiencia  negocios del giro alimentos y/o bebidas? Explique."></textarea>
                </div>
                <div class="one-input">
                    <textarea name="" id="" cols="30" rows="10" placeholder="¿Ha tenido experiencia como propietario de alguna franquicia? En caso afirmativo, mencione las marcas:"></textarea>
                </div>
                <h2>acerca de la franquicia</h2>
                <div class="one-input">
                    <textarea name="" id="" cols="30" rows="10" placeholder="¿Cuál es el principal motivo por el que desea invertir en una franquicia?"></textarea>
                </div>
                <div class="one-input">
                    <textarea name="" id="" cols="30" rows="10" placeholder="¿Cuál es la principal razón por la que desea adquirir una franquicia PASTA & PASTO?"></textarea>
                </div>
                <div class="one-input">
                    <textarea name="" id="" cols="30" rows="10" placeholder="¿Cómo se enteró de nuestra franquicia?"></textarea>
                </div>
                <div class="one-input">
                    <textarea name="" id="" cols="30" rows="10" placeholder="¿A cuánto asciende su presupuesto para invertir en una franquicia PASTA & PASTO y cuándo podría disponer de este recurso?"></textarea>
                </div>
                <div class="one-input">
                    <textarea name="" id="" cols="30" rows="10" placeholder="¿Quién operará la franquicia? ¿Cuánto tiempo le inviertirá usted al negocio?"></textarea>
                </div>
                <div class="one-input">
                    <textarea name="" id="" cols="30" rows="10" placeholder="¿Cuenta ya con la posesión de algún local?"></textarea>
                </div>
                <div class="one-input">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Si su respuesta a la pregunta anterior fue afirmativa, indique la superficie aproximada del local, si es propio o rentado y el tipo de zona en el que se encuentra ubicado:"></textarea>
                </div>
                <p>El solicitante manifiesta que toda la información aquí presentada con motivo e su candidatura para obtener la franquicia PASTA & PASTO es correcta y verdadera:</p>
                <div class="double-input">
                    <input type="text" placeholder="Lugar y fecha *">
                    <input type="text" placeholder="CURP">
                </div>
                <button class="main-button dark">enviar</button>
            </form>
        </div>
    </section>
    
    <?php include("#/inc/footer.php") ?>
</body>
</html>