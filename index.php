<!DOCTYPE html>
<html lang="es">
<head>
    <title>Agenda de contactos web</title>
    <link rel="icon" type="image/png" href="public/img/icono.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require_once "dependencias.php"?>
</head>
<body>
    <div class="container">
        <?php
            require_once "menu.php"
        ?>
        <div class="jumbotron">
            <h1 class="display-4">Agenda de contactos con PHP & MySQL</h1>
            <div class="row">
                <div class="col-sm-6" style="text-align: center;">
                    <img src="public/img/perfil.jpg" class="img-fluid" alt="Responsive imag" width="75%">
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover">
                                <tr>
                                    <th>Agenda desarrollada en el año 2021</th>
                                </tr>
                                <tr>
                                    <th>Hecha por Falcultad Autodidacta & modificado por Posi</th>
                                </tr>
                                <tr>
                                    <th>Hecho con php & mysql</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <p>Creado por facultad autodidacta, con el estilo de Posi</p>
        </div>
    </div>
</body>
</html>