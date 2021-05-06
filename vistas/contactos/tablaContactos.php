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
                <tr style="text-align: center;">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <span class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#modalActualizarContacto">
                            <span class="fas fa-edit"></span>
                        </span>
                    </td>
                    <td>
                        <span class="btn btn-outline-danger btn-sm" onclick="eliminarConctacto()">
                            <span class="fas fa-trash"></span>
                        </span>
                    </td>
                </tr>
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