<!DOCTYPE html>
<html lang="es">

<head>
    <title>Contactos Agenda</title>
    <link rel="icon" type="image/png" href="public/img/icono.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require_once "dependencias.php" ?>
</head>

<body>
    <div class="container">
        <?php
        require_once "menu.php"
        ?>
        <div class="jumbotron">
            <h1 class="display-4">Contactos</h1>
            <hr class="my-4">
            <span class="btn btn-outline-info" data-toggle="modal" data-target="#modalAgregarContacto">
                <span class="fas fa-user-plus"></span>    Agregar nuevo contacto
            </span>
            <div id="cargaTablaContactos" class="mt-2"></div>
            <hr class="my-4">
            <p>Creado por facultad autodidacta, con el estilo de Posi</p>
            <?php
                require_once "vistas/contactos/modalAgregar.php";
                require_once "vistas/contactos/modalActualizar.php";
            ?>
        </div>
    </div>
    <script src="public/js/contactos.js"></script>
</body>

</html>