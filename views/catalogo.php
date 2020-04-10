<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../image/logo.png">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="../css/estilos.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Catálogo</title>
</head>

<body>
    <header>
        <?php include '../components/navbar.php' ?>

        <!--Carrusel de imagenes mostrando los elementos mas vendidos, consta de un carrusel de
            de diapositivas deslisables que cubre la parte superior de la pantalla completamente-->
        <div class="carousel carousel-slider center">
            <!--Descripción del carrusel, un elemento sobrpuesto que no cambia al deslizar-->
            <h2 class="carousel-fixed-item center-align pink-text" style="-webkit-text-stroke: 2px purple;">Más
                Solicitados</h2>
            <!--Items del carrusel, consta de diapositivas del colores solidos con imágenes incrustadas-->
            <div class="carousel-item purple lighten-3 white-text" href="#one!">
                <p class="white-text" style="font-size: 20px">Maquillaje</p>
                <img class="responsive-img" style="height: 340px; width: 800px" src="../image/PastelilloMaquillaje.jpg"
                    alt="Imagen">
            </div>
            <div class="carousel-item red darken-4 white-text" href="#two!">
                <p class="white-text" style="font-size: 20px">Enamorados</p>
                <img class="responsive-img" style="height: 340px; width: 800px" src="../image/PastelilloAmor.jpg"
                    alt="Imagen">
            </div>
            <div class="carousel-item green white-text" href="#three!">
                <h2>Third Panel</h2>
                <p class="white-text">This is your third panel</p>
            </div>
            <div class="carousel-item blue white-text" href="#four!">
                <h2>Fourth Panel</h2>
                <p class="white-text">This is your fourth panel</p>
            </div>
        </div>
    </header>
    <br><br>

    <!--Renglon que contiene un carrusel con los elementos de la temporada, vendidos recientemente y para cumpleaños, 
        consta de un renglón con alineamiento al centro de la página, un carrusel
        simple con imagenes incrustadas-->
    <div class="row center-align">
        <h2 style="-webkit-text-stroke: 2px black; color: #5858FA;">De Temporada</h2>
        <div class="carousel" style="height:200px;">
            <a class="carousel-item" href="#one!"><img src="../image/PastelillosEscuela.jpg"><span
                    style="-webkit-text-stroke: 2px black; color: #5858FA;">Escuela</span></a>
            <a class="carousel-item" href="#two!"><img src="../image/PastelillosHarryPotter.jpg"><span
                    style="-webkit-text-stroke: 2px black; color: #5858FA;">Harry
                    Potter</span></a>
            <a class="carousel-item" href="#three!"><img src="../image/PastelillosMedico.jpg"><span
                    style="-webkit-text-stroke: 2px black; color: #5858FA;">Médico</span></a>
            <a class="carousel-item" href="#four!"><img src="../image/PastelilloSquareBob.jpg"><span
                    style="-webkit-text-stroke: 2px black; color: #5858FA;">Bob
                    Esponja</span></a>
            <a class="carousel-item" href="#five!"><img src="../image/PastelilloUniverso.jpg"><span
                    style="-webkit-text-stroke: 2px black; color: #5858FA;">Universo</span></a>
        </div>
    </div>

    <div class="row center-align">
        <h2 style="-webkit-text-stroke: 2px black; color: #5858FA;">Vendido Recientemente</h2>
        <div class="carousel" style="height:200px;">
            <a class="carousel-item" href="#one!"><img src="../image/PastelillosEscuela.jpg"><span
                    style="-webkit-text-stroke: 2px black; color: #5858FA;">Escuela</span></a>
            <a class="carousel-item" href="#two!"><img src="../image/PastelillosHarryPotter.jpg"><span
                    style="-webkit-text-stroke: 2px black; color: #5858FA;">Harry
                    Potter</span></a>
            <a class="carousel-item" href="#three!"><img src="../image/PastelillosMedico.jpg"><span
                    style="-webkit-text-stroke: 2px black; color: #5858FA;">Médico</span></a>
            <a class="carousel-item" href="#four!"><img src="../image/PastelilloSquareBob.jpg"><span
                    style="-webkit-text-stroke: 2px black; color: #5858FA;">Bob
                    Esponja</span></a>
            <a class="carousel-item" href="#five!"><img src="../image/PastelilloUniverso.jpg"><span
                    style="-webkit-text-stroke: 2px black; color: #5858FA;">Universo</span></a>
        </div>
    </div>

    <div class="row center-align">
        <h2 style="-webkit-text-stroke: 2px black; color: #5858FA;">Cumpleaños</h2>
        <div class="carousel" style="height:200px;">
            <a class="carousel-item" href="#one!"><img src="../image/PastelillosEscuela.jpg"><span
                    style="-webkit-text-stroke: 2px black; color: #5858FA;">Escuela</span></a>
            <a class="carousel-item" href="#two!"><img src="../image/PastelillosHarryPotter.jpg"><span
                    style="-webkit-text-stroke: 2px black; color: #5858FA;">Harry
                    Potter</span></a>
            <a class="carousel-item" href="#three!"><img src="../image/PastelillosMedico.jpg"><span
                    style="-webkit-text-stroke: 2px black; color: #5858FA;">Médico</span></a>
            <a class="carousel-item" href="#four!"><img src="../image/PastelilloSquareBob.jpg"><span
                    style="-webkit-text-stroke: 2px black; color: #5858FA;">Bob
                    Esponja</span></a>
            <a class="carousel-item" href="#five!"><img src="../image/PastelilloUniverso.jpg"><span
                    style="-webkit-text-stroke: 2px black; color: #5858FA;">Universo</span></a>
        </div>
    </div>

    <br><br>
    <!--Footer-->
    <?php include '../components/footer.php' ?>
    <!--FIN DEL FOOTER-->

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../js/materialize.js"></script>
    <script type="text/javascript" src="../js/material.js"></script>
</body>

</html>