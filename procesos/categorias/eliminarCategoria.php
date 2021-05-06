<?php
    require_once "../../clases/Categorias.php";
    $id_categoria = $_POST['id_categoria'];
    $Categorias = new Categorias;
    echo $Categorias->eliminarCategoria($id_categoria);
?>