<?php
    require_once "../../clases/Categorias.php";
    $id_categoria = $_POST['id_categoria'];
    $Categorias = new Categorias();
    echo json_encode($Categorias->obtenerDatosCategoria($id_categoria)); 
?>