<?php
    require_once "../../clases/Categorias.php";
    $datos = array(
        "nombreCategoria" => $_POST["nombreCategoria"],
        "descripcion" => $_POST["descripcion"]
    );
    $Categorias = new Categorias;
    echo $Categorias->agregarCategorias($datos);
?>