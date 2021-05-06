<?php
    require_once "../../clases/Conexion.php";
    $conexion = new Conexion();
    $conexion = $conexion->conectar();
    $sql = "SELECT nombre,
                   descripcion,
                   id_categoria
            FROM t_categorias";
    $result = mysqli_query($conexion, $sql);
?>
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover table-condensed" id="tablaCategoriasDT">
            <thead class="thead-dark">
                <tr style="text-align: center;">
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($mostrar = mysqli_fetch_array($result)){
                        $id_categoria = $mostrar['id_categoria'];
                ?>
                <tr style="text-align: center;">
                    <td><?php echo $mostrar['nombre']; ?></td>
                    <td><?php echo $mostrar['descripcion']; ?></td>
                    <td>
                        <span class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#modalActualizarCategoria">
                            <span class="fas fa-edit"></span>
                        </span>
                    </td>
                    <td>
                        <span class="btn btn-outline-danger btn-sm" onclick="eliminarCategoria('<?php echo $id_categoria; ?>')">
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
        $('#tablaCategoriasDT').DataTable();
    });
</script>