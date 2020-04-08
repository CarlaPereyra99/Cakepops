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
        <h3>Más Solicitados</h3>
        <div class="carousel carousel-slider center">
            <div class="carousel-item pink white-text" href="#one!">
                <p class="white-text" style="font-size: 20px">Maquillaje</p>
                <img style="height: 340px; width: 800px" src="../image/PastelilloMaquillaje.jpg" alt="Imagen">
            </div>
            <div class="carousel-item red white-text" href="#two!">
                <p class="white-text" style="font-size: 20px">Enamorados</p>
                <img style="height: 340px; width: 800px" src="../image/PastelilloAmor.jpg" alt="Imagen">
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
    <div class="row center-align">
        <div class="carousel">
            <a class="carousel-item" href="#one!"><img src="../image/PastelillosEscuela.jpg"><span>Escuela</span></a>
            <a class="carousel-item" href="#two!"><img src="../image/PastelillosHarryPotter.jpg"><span>Harry
                    Potter</span></a>
            <a class="carousel-item" href="#three!"><img src="../image/PastelillosMedico.jpg"><span>Médico</span></a>
            <a class="carousel-item" href="#four!"><img src="../image/PastelilloSquareBob.jpg"><span>Bob
                    Esponja</span></a>
            <a class="carousel-item" href="#five!"><img src="../image/PastelilloUniverso.jpg"><span>Universo</span></a>
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