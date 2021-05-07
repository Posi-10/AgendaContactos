<!-- Modal -->
<div class="modal fade" id="modalAgregarContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregarContacto">
            <div id="id_categoriasSelect"></div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control">
            <label for="apaterno">Apellido Paterno</label>
            <input type="text" id="apaterno" name="apaterno" class="form-control">
            <label for="amaterno">Apellido Materno</label>
            <input type="text" id="amaterno" name="amaterno" class="form-control">
            <label for="telefono">telefono</label>
            <input type="text" id="telefono" name="telefono" class="form-control">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('#id_categoriasSelect').load("vistas/contactos/selectCategorias.php");
  });
</script>