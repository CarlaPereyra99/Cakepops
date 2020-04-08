<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente-Registro</title>
    <link rel="icon" type="image/x-icon" href="../images/Logo.png">
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
    <!--Registro-->
    <div class="row">
        <div class="col l8 offset-l2 ">
            <div class="card">
                <div class="card-action">
                    <h3 class="center-align">Completa todos tus datos</h3>
                </div>
                <!--Formulario de Registro-->
                <!--Usuario-->
                <div class="row">
                    <div class="input-field col s10 l5">
                        <input id="UsuarioRegistro" type="text" class="validate">
                        <label for="UsuarioRegistro">Usuario</label>
                    </div>
                    <!--Email-->
                    <div class="input-field col s10 l5">
                        <input id="Email" class="validate" type="Email">
                        <label for="Email">Email</label>
                    </div>
                </div>
                <!--Nombres-->
                <div class="row nombres">
                    <div class="input-field col l12 s12">
                        <p>Cual es tu nombre?</p>
                    </div>
                    <div class="input-field col s10 l5">
                        <input id="NombreRegistro" class="validate" type="text">
                        <label for="NombreRegistro">Nombres</label>
                    </div>
                    <div class="input-field col s10 l5">
                        <input id="ApellidosRegistro" class="validate" type="text">
                        <label for="ApellidosRegistro">Apellidos</label>
                    </div>
                </div>
                <!--Nacimiento-->
                <div class="row">
                    <div class="input-field col l4 s12">
                        <p>Fecha de nacimiento</p>
                    </div>
                    <div class="input-field col l4 s10">
                        <input type="text" class="datepicker">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col l12 s12">
                        <p>Domicilio</p>
                    </div>
                    <div class="input-field col l10 s10">
                        <input id="CalleRegistro" type="text" class="validate">
                        <label for="CalleRegistro">Calle</label>
                    </div>
                    <div class="input-field col l3 s10">
                        <input id="NumRegistro" type="text" class="validate">
                        <label for="NumRegistro">Numero de Casa</label>
                    </div>
                    <div class="input-field col l6 s10">
                        <input id="ColoniaRegistro" type="text" class="validate">
                        <label for="ColoniaRegistro">Colonia</label>
                    </div>
                    <div class="input-field col s10 m5">
                        <select class="icons">
                            <option value="" disabled selected>Ciudad</option>
                            <option value="" data-icon="../image/Torreon.png">Torreon</option>
                            <option value="" data-icon="../image/Gomez-Palacio.png">Gomez Palacio</option>

                        </select>
                        <label>Selecciona tu ciudad</label>
                    </div>
                </div>
                    <div class="row">
                        <div class="input-field col l12 s12">
                            <p>Seguridad</p>
                        </div>
                        <div class="input-field col l4 s10 ">
                            <input id="ClaveRegistro" type="text" class="validate">
                            <label for="ClaveRegistro">Clave</label>
                        </div>
                        <div class="input-field col l4 s10">
                            <input id="ConfirmarClaveRegistro" type="text" class="validate">
                            <label for="ConfirmarClaveRegistro">Confirmar Clave</label>
                        </div>

                    </div>
                    <!--Registro-->
                    <div class="row">
                        <div class="input-field center-align">
                            <button id="SeLogeo" class="btn-large">Registrarse</button>
                        </div>
                    </div>
                    


                </div>
            
        </div>
         <!--Footer-->
    <?php include '../components/footer.php' ?>


</body>

</html>