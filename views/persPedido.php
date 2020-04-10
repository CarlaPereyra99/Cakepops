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
    <title>Personalizar Pedido</title>
</head>

<body>
    <header>
        <?php include '../components/navbar.php' ?>
    </header>
    <br>
    <div class="row">
        <!-- Renglón que contiene los botones de selección de tamaño y el diagrama del tamaño -->
        <!--Una tarjeta que cubre 2 columnas en pantalla grande y está a 1 columa de distancia del margen,
            en pantalla mediana cubre 3 columnas y está a una columna del margen,
            en pantalla chica cubre 8 columnas y está a 2 columnas del margen -->
        <div class="col s8 offset-s2 m4 offset-m4 l2 offset-l1 card" style="margin-top: 0px; padding: 0px">
            <div class="card-action" style="height: 50px; padding: 15px">
                <h3 class="center-align" style="margin-top: 0px">Tamaño de Caja</h3>
            </div>
            <div class="container col s12 m12 l12">
                <a class="waves-effect waves-light btn-small col s4 offset-s1 m4 offset-m1 l4 offset-l1"
                    style="margin-top: 10px" id="b4">4 pz</a>
                <a class="waves-effect waves-light btn-small col s4 offset-s2 m4 offset-m2 l4 offset-l2"
                    style="margin-top: 10px" id="b6">6 pz</a>
                <a class="waves-effect waves-light btn-small col s4 offset-s1 m4 offset-m1 l4 offset-l1"
                    style="margin-top: 10px; margin-bottom: 15px" id="b10">10 pz</a>
                <a class="waves-effect waves-light btn-small col s4 offset-s2 m4 offset-m2 l4 offset-l2"
                    style="margin-top: 10px; margin-bottom: 15px" id="b12">12 pz</a>
            </div>
        </div>
        <!--Columna que contiene una tarjeta con las imagenes-diagrama del tamaño de las cajas 
            previamente solicitadas en tamaños de 4, 6, 10 y 12 unidades, cada imagen esta condicionada
            a aparecer solo cuando es presionado su botón correspondiente (vea /js/personalizar.js).
            La tarjeta se adapta a la imagen-diagrama y se mueve conforme cambia el tamaño-->
        <div class="col offset-s1 offset-m1 offset-l2 card center-align" style="margin-top: 0px; padding: 0px"
            id="cont">
            <div class="container col s12 m12 l12" style="padding: 20px;">
                <img src="../image/p4.png" alt="No Disponible" class="responsive-img" id="p4">
                <img src="../image/p6.png" alt="No Disponible" class="responsive-img hide" id="p6">
                <img src="../image/p10.png" alt="No Disponible" class="responsive-img hide" id="p10">
                <img src="../image/p12.png" alt="No Disponible" class="responsive-img hide" id="p12">
            </div>
        </div>

        <!--Pequeña tarjeta que muestra el precio a pagar-->
        <div class="card container col s10 offset-s1 m3 offset-m8 l2 offset-l1" style="margin-top: 0px" id="precio">
            <h3 class="white-text">Costo: $<input disabled value="" class="white-text center-align" type="number"
                    name="precio" id="precio"></h3>
        </div>

    </div>

    <footer>
        <?php include '../components/footer.php'?>
    </footer>

    <script src="../js/materialize.js"></script>
    <script src="../js/material.js"></script>
    <script src="../js/personalizar.js"></script>
</body>

</html>