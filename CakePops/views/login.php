<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../image/Logo.png">
    <title>Inicia Sesion</title>
    <!--Iconos de Google-->
    <link href="../Google/icon.css" rel="stylesheet">
    <!--Importamos Materialize-->
    <link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
    <script src="../js/materialize.min.js"></script>
    <!--Importamos nuestros archivos-->
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <script type="text/javascript" src="../js/material.js"></script>

</head>

<body>
    <!--NavBar-->
    <?php include '../components/navbar.php' ?>
    <!--Login-->
    <div class="row">
        <!--offset- es en que posicion de la pantalla lo deseas tener-->
        <div class="col s12 l5 m3  offset-l4 m8">
            <!--Se comportara como tarjeta-->
            <div class="card">
                <!--La cabezera de mi tarjeta-->
                <div class="card-action">
                    <h4>Hola! Accede a tu cuenta</h4>
                </div>
                <!--Formulario-->
                <!--s10 es el tamano que deseo cuando el tamano de la pantalla sea mas pequeno
                l6 es el largo que puede ser la pantalla , por lo tanto se le da un tamano en diferentes
                dimensiones, intenta jugar con los numeros que tiene despues de la letra-->
                <!--Usuario-->
                <div class="row">
                    <div class="input-field col s10 l11">
                        <input id="Usuario" type="text" class="validate">
                        <label for="Usuario">Usuario</label>
                    </div>
                </div>
                <!--Contrasena-->
                <div class="row">
                    <div class="input-field col s10 l11">
                        <input id="Contra" type="password" class="validate">
                        <label for="Contra">Contraseña</label>
                    </div>
                </div>
                <!--Recuerdame-->
                <div class="row">
                    <div class="input-field col">
                        <p>
                            <label>
                                <input id="Recuerdame" type="checkbox">
                                <span>Recuerdame</span>
                            </label>
                        </p>
                    </div>
                </div>
                <!--Login-->
                <div class="row">
                    <div class="input-field center-align">
                        <button id="SeLogeo" class="btn-large">Iniciar sesion</button>
                    </div>
                </div>
                <!--Registro-->
                <div class="HaciaR center">
                    No tienes cuenta? <a href="">Registrate aqui!</a>
                </div>

            </div>
        </div>
    </div>
  
    <!--Footer-->
    <?php include '../components/footer.php' ?>
    <!--FIN DEL FOOTER-->
</body>

</html>