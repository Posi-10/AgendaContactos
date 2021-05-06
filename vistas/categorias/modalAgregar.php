<!-- Modal -->
<div class="modal fade" id="modalAgregarCategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregarCategoria">
            <label for="nombreCategoria">Nombre</label>
            <input type="text" id="nombreCategoria" name="nombreCategoria" class="form-control">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion"class="form-control"></textarea>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success" id="btnGuardarCategoria">Guardar</button>
      </div>
    </div>
  </div>
</div>