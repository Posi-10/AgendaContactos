<?php
  require_once "../../clases/Conexion.php";
  $conexion = new Conexion();
  $conexion = $conexion->conectar();
    $sql = "SELECT 
                contactos.paterno AS paterno,
                contactos.materno AS materno,
                contactos.nombre AS nombre,
                contactos.telefono AS telefono,
                contactos.email AS email,
                categoria.nombre AS categoria,
                contactos.id_agenda AS  id_agenda
            FROM
                t_contactos AS contactos
            INNER JOIN
                t_categorias AS categoria
            ON contactos.id_categoria = categoria.id_categoria;";
  $r = mysqli_query($conexion, $sql);
?>
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover table-condesed" id="tablaContactosDT">
            <thead class="thead-dark">
                <tr style="text-align: center;">
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Categoria</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($mostrar = mysqli_fetch_array($r)){
                        $id_agenda = $mostrar['id_agenda'];
                ?>
                <tr style="text-align: center;">
                    <td><?php echo $mostrar['paterno']; ?></td>
                    <td><?php echo $mostrar['materno']; ?></td>
                    <td><?php echo $mostrar['nombre']; ?></td>
                    <td><?php echo $mostrar['telefono']; ?></td>
                    <td><?php echo $mostrar['email']; ?></td>
                    <td><?php echo $mostrar['categoria']; ?></td>
                    <td>
                        <span class="btn btn-outline-success btn-sm" onclick="obtenerDatosContacto('<?php  echo $id_agenda ?>')" data-toggle="modal" data-target="#modalActualizarContacto">
                            <span class="fas fa-edit"></span>
                        </span>
                    </td>
                    <td>
                        <span class="btn btn-outline-danger btn-sm" onclick="eliminarConctacto('<?php  echo $id_agenda ?>')">
                            <span class="fas fa-trash"></span>
                        </span>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaContactosDT').DataTable();
    });
</script>