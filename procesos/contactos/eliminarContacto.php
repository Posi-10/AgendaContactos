<?php
    require_once "../../clases/Contactos.php";
    $Contactos = new Contactos();
    $id_agenda = $_POST['id_agenda'];
    echo $Contactos->eliminarContacto($id_agenda);
?>