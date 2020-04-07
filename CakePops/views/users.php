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

    <!--Tabla de usuarios-->
    <table>
        <div class="highlight">
            <div class="responsive-table">
                <div class="centered">
            <thead>
                <tr>
                   <th>Nombre</th><th>Fecha de Registro</th><th>Compras realizadas</th><th>Estado del cliente</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                  <td>Hector</td>
                  <td>30 de Marzo del 2020</td>
                  <td>10</td>
                  <td>Activo</td>
                </tr>
                <tr>
                  <td>Adal</td>
                  <td>02 de Abril del 2020</td>
                  <td>25</td>
                  <td>Activo</td>
                </tr>
                <tr>
                  <td>Carla</td>
                  <td>15 de Abril del 2020</td>
                  <td>10</td>
                  <td>Inactivo</td>
                </tr>
              </tbody>

        </div>
            </div>
                </div>
    </table>

    <!--Footer-->
    <?php include '../components/footer.php'; ?>

</body>

</html>