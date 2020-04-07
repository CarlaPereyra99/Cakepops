<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="image/Logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!--Iconos de Google-->
    <link href="Google/icon.css" rel="stylesheet">
    <!--Importamos Materialize-->
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <script src="js/materialize.min.js"></script>
    <!--Importamos nuestros archivos-->
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script type="text/javascript" src="js/material.js"></script>
    
</head>

<body>
    <?php include 'components/navbar.php' ?>
    
    <!--PARALLAX-->
    <div class="parallax-container">
            <div class="parallax"><img src="/CakePops/image/FondoIndex.jpg"></div>
    </div>
    <!--QUIENES SOMOS-->
    <div class="container">
        <div class="Somos row center">
            <div class="input-field col s12 l12 m12">
                <h2 class="titulo"><span>¿Quienes Somos?</span></h2>
                <h3 class="subtitulo">La microempresa Copcakes</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptates minima nobis sequi
                    excepturi, accusantium corrupti omnis fugiat ipsum id, facere fugit quas modi quasi consectetur
                    perferendis commodi doloribus maiores.
                    Aenean scelerisque convallis iaculis. Aliquam erat volutpat. Ut condimentum quis ante eu faucibus.
                    Vivamus cursus ultrices lacinia. Maecenas iaculis quam non ligula consequat sodales. Proin
                    ullamcorper mi nibh, ut porta nulla tincidunt non. Fusce elementum commodo turpis, eget mollis
                    augue. Donec iaculis dictum nulla, in mollis orci pharetra ut. Integer mattis, metus at rhoncus
                    hendrerit, massa ligula euismod sapien, ut ultrices mi augue id nibh. Pellentesque habitant morbi
                    tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus vitae pharetra purus.
                    Nulla condimentum dui sed arcu aliquet sollicitudin. Maecenas sagittis efficitur mi, at commodo
                    ipsum eleifend id. Mauris quis lorem eget nisi volutpat sagittis a ac massa. Aliquam elementum sit
                    amet nisl id lacinia.
                </p>
            </div>
        </div>
    </div>

    <!--FIN DEL QUIENES SOMOS-->


    <!--CARRUSEL-->

    <div class="row">
        <div class="col l12 s12 m12">
            <div class="carousel">
                <!--Producto-->
                <div class="carousel-item">
                    <h2 class="Nombre-producto">Pastelillos Harry Potter </h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Sip son pastelillos de harry potter</p>
                    <img src="image/PastelillosHarryPotter.jpg" alt="PastelillosHarryPotter">
                </div>
                <!--Producto-->
                <div class="carousel-item">
                    <h2 class="Nombre-producto">Pastelillos Medicos </h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Sip son pastelillos de Medico</p>
                    <img src="image/PastelillosMedico.jpg" alt="PastelillosMedico">
                </div>
                <!--Producto-->
                <div class="carousel-item">
                    <h2 class="Nombre-producto">Pastelillos Emoticon</h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Sip son pastelillos de Emoticon</p>
                    <img src="image/PastelillosEmoticon.jpg" alt="PastelillosEmoticon">
                </div>
                <!--Producto-->
                <div class="carousel-item">
                    <h2 class="Nombre-producto">Pastelillos Futbol </h2>
                    <div class="linea-division"></div>
                    <p class="sabor">Sip son pastelillos de Futbol</p>
                    <img src="image/PastelillosFutbol.jpg" alt="PastelillosFutbol">
                </div>
            </div>
        </div>
    </div>
    <!--FIN DEL CARRUSEL-->
    <!--EQUIPO-->
    <!--SERVICIO-->
    <div class="container servicio">
        <div class="row center">
            <div class="input-field col s12">
                <figure>
                    <img src="image/Servicio.png" alt="Servicio" width="300px">
                    <figcaption>
                        <p class="center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum dicta nihil inventore
                            soluta asperiores iure officia, saepe quos sed quaerat, eum blanditiis molestias ducimus
                            beatae amet suscipit fugit porro? Reiciendis?
                        </p>
                    </figcaption>
                </figure>


            </div>
        </div>
        <div class="row center">
            <div class="input-field col s12">
                <figure>
                    <img src="image/team.png" alt="Servicio" width="300px">
                    <figcaption>
                        <p class="center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum dicta nihil inventore
                            soluta asperiores iure officia, saepe quos sed quaerat, eum blanditiis molestias ducimus
                            beatae amet suscipit fugit porro? Reiciendis?
                        </p>
                    </figcaption>
                </figure>


            </div>
        </div>
    </div>
    <!--FIN DEL EQUIPO-->
    <!--LOCALIZACION-->
    <div class="container">
        <section class="row contacto center">
            <div class="col l12 s12">
                <h2 class="subtitulo center-align"><span>Localizanos</span></h2>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.874624204026!2d-103.3914812849842!3d25.509227583752125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868fdc9ea8c39a6b%3A0xe7370e10990602ac!2sLinea%20Verde%20Torre%C3%B3n!5e0!3m2!1ses-419!2smx!4v1581788749834!5m2!1ses-419!2smx"
                width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="">
            </iframe>
        </section>
    </div>
    <!--FIN DE LA LOCALIZACION-->
    <!--INICIO DEL FOOTER-->
    <?php include 'components/footer.php' ?>
</body>

</html>