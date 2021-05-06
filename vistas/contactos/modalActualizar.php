<!-- Modal -->
<div class="modal fade" id="modalActualizarContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmActualizarContacto">
            <div id="id_categoriasU"></div>
            <label for="nombreU">Nombre</label>
            <input type="text" id="nombreU" name="nombreU" class="form-control">
            <label for="apaternoU">Apellido Paterno</label>
            <input type="text" id="apaternoU" name="apaternoU" class="form-control">
            <label for="amaternoU">Apellido Materno</label>
            <input type="text" id="amaternoU" name="amaternoU" class="form-control">
            <label for="telefonoU">telefono</label>
            <input type="text" id="telefonoU" name="telefonoU" class="form-control">
            <label for="emailU">Email</label>
            <input type="text" id="emailU" name="emailU" class="form-control">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>