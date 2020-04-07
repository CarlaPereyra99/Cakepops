<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../image/Logo.png">
    <title>Perfil</title>
    <!--Iconos de Google-->
    <link href="../Google/icon.css" rel="stylesheet">
    <!--Importamos Materialize-->
    <link rel="stylesheet" type="text/css" href="../css/materialize.css">
    <!--Importamos nuestros archivos-->
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>

<body>
    <!--NavBar-->
    <?php include '../components/navbar.php' ?>
    <!--Perfil-->
    <div class="row">
        <!--offset- es en que posicion de la pantalla lo deseas tener-->
        <div class="col l10 offset-l1">
            <!--Se comportara como tarjeta-->
            <div class="card">
                <!--La cabezera de mi tarjeta-->
                <div class="card-action">
                    <!--Usuario-->
                    <br>
                    <div class="row">
                        <div class="container col s6 offset-s3 m3 offset-m1 l2 offset-l2">
                            <img class="responsive-img" src="../image/sinfoto.svg" alt="Foto de Perfil">
                            <!--Botón de Modificar-->
                            <a class="waves-effect waves-light btn col s12 m10 offset-m1 l12"
                                id="btnModif">Modificar</a>
                            <!--Boton de cancelar-->
                            <a class="waves-effect waves-light btn col s12 m10 offset-m1 l12 red darken-1 hide"
                                id="btnCanc">Cancelar</a>
                        </div>
                        <div class="row">
                            <div class="container col m6 l7">
                                <!--Campo del nombre -->
                                <div class="input-field col s12 m4 l4">
                                    <input disabled value="Julio" id="first_name" type="text" class="validate">
                                    <label for="first_name" id="nomb">Nombre(s)</label>
                                </div>
                                <!--Campo del apellido-->
                                <div class="input-field col s12 m6 l4">
                                    <input disabled value="Mendez Lira" id="last_name" type="text" class="validate">
                                    <label for="last_name" id="ape">Apellidos</label>
                                </div>
                                <!--Campo del correo electronico-->
                                <div class="input-field col s12 m8 l6">
                                    <input disabled value="juliolira129@gmail.com" id="email" type="email"
                                        class="validate">
                                    <label for="email" id="ema">Email</label>
                                </div>
                                <!--Campo de la fecha-->
                                <div class="input-field col s12 m7 l4">
                                    <input disabled value="2020-03-12" id="fecha" type="date" class="validate">
                                    <label for="fecha">Miembro Desde</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!--Formulario-->
                <!--s10 es el tamano que deseo cuando el tamano de la pantalla sea mas pequeno
                l6 es el largo que puede ser la pantalla , por lo tanto se le da un tamano en diferentes
                dimensiones, intenta jugar con los numeros que tiene despues de la letra-->
                <div class="row">
                    <div class="container col s6 offset-s3 m3 l3 center-align">
                        <div class="row" id="info">
                            <a href="#">Información</a>
                        </div>
                        <div class="row hide" id="ld">
                            <a href="#">Lista de Deseos</a>
                        </div>
                        <div class="row">
                            <a href="hpedididos.html">Historial de Pedidos</a>
                        </div>
                        <div class="row">
                            <h6 style="color: #fadcd3;">Reseñas</h6>
                            <a href="cResenas.html">Crear</a>
                            <a href="vResenas">Ver</a>
                        </div>
                    </div>
                    <div class="container col m8 l8 center-align" id="wl" style="margin-left: 20px;">
                        <div class="row">
                            <h5 class="center-align" style="color: aliceblue;">Lista de Deseos</h5>
                        </div>
                        <div class="row center-align">
                            <div class="carousel" style="height: 280px;">
                                <a class="carousel-item" href="#one!"><img
                                        src="../image/PastelillosEscuela.jpg"><span>Escuela</span></a>
                                <a class="carousel-item" href="#two!"><img
                                        src="../image/PastelillosHarryPotter.jpg"><span>Harry Potter</span></a>
                                <a class="carousel-item" href="#three!"><img
                                        src="../image/PastelillosMedico.jpg"><span>Médico</span></a>
                                <a class="carousel-item" href="#four!"><img
                                        src="../image/PastelilloSquareBob.jpg"><span>Bob Esponja</span></a>
                                <a class="carousel-item" href="#five!"><img
                                        src="../image/PastelilloUniverso.jpg"><span>Universo</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="container col s12 m8 l8 hide center-align" id="data">
                        <!--Campo del teléfono-->
                        <div class="input-field col s12 m6 l4">
                            <i class="material-icons prefix">phone</i>
                            <input disabled id="icon_telephone" type="tel" class="validate">
                            <label for="icon_telephone" id="tel">Telefono</label>
                        </div>
                        <!--Campo de la calle-->
                        <div class="input-field col s12 m6 l6">
                            <input disabled id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix" id="cal">Calle</label>
                        </div>
                        <!--Campo del número de la casa-->
                        <div class="input-field col s12 m6 l3">
                            <input disabled id="address-number" type="text" class="validate">
                            <label for="address-number" id="num">Número de Casa</label>
                        </div>
                        <!--Campo de la Colonia-->
                        <div class="input-field col s12 m6 l4">
                            <input disabled id="suburb" type="text" class="validate">
                            <label for="suburb" id="col">Colonia</label>
                        </div>
                        <!--Campo del Código Postal-->
                        <div class="input-field col s12 m6 l5">
                            <input disabled id="zipcode" type="text" class="validate">
                            <label for="zipcode" id="zip">Código Postal</label>
                        </div>
                        <!--Campo de la contraseña, no visble-->
                        <div class="input-field col s12 m6 l3">
                            <input disabled value="J6m_1299." id="password" type="password" class="validate">
                            <label for="password" id="pass">Contraseña</label>
                        </div>
                        <!--Boton de guardar-->
                        <a class="waves-effect waves-light btn col s6 offset-s3 m4 offset-m4 l3 offset-l2 hide"
                            id="btnSave" style="margin-bottom: 20px;">Guardar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include '../components/footer.php' ?>

    <script type="text/javascript" src="../js/material.js"></script>
    <script type="text/javascript" src="../js/popup.js"></script>
    <script type="text/javascript" src="../js/materialize.js"></script>
</body>

</html>