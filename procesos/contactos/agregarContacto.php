<?php
    require_once "../../clases/Contactos.php";
    $Contactos = new Contactos();
    $datos = array("id_categoria" => $_POST['id_categoriaSelect'],
                "nombre" => $_POST['nombre'], 
                "paterno" => $_POST['apaterno'], 
                "materno" => $_POST['amaterno'], 
                "telefono" => $_POST['telefono'], 
                "email" => $_POST['email']
     );
     echo $Contactos -> agregarContacto($datos);
?>