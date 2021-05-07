<?php
    require_once "../../clases/Contactos.php";
    $Contactos = new Contactos();
    $id_agenda = $_POST['id_agenda'];
    echo json_encode($Contactos->obtenerDatosContacto($id_agenda));
?>