<?php
    require_once "../../clases/Contactos.php";
    $Contactos = new Contactos();
    $datos = array("id_agenda" => $_POST['id_agendaU'],
                "nombre" => $_POST['nombreU'], 
                "paterno" => $_POST['apaternoU'], 
                "materno" => $_POST['amaternoU'], 
                "telefono" => $_POST['telefonoU'], 
                "email" => $_POST['emailU'],
                "id_categoria" => $_POST['id_categoriaSelectU']
     );
     echo $Contactos->acutalizarContacto($datos);
?>