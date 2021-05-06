<?php
    require_once "../../clases/Categorias.php";
    $datos = array(
        "id_categoria" => $_POST['id_categoria'],
        "nombreCategoriaU" => $_POST["nombreCategoriaU"],
        "descripcionU" => $_POST["descripcionU"]
    );
    $Categorias = new Categorias();
    echo $Categorias->actualizarCategorias($datos);
?>