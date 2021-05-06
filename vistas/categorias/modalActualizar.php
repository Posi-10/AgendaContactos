<!-- Modal -->
<div class="modal fade" id="modalActualizarCategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmActualizarCategoria">
            <input type="text" id="id_categoria" name="id_categoria" hidden="">
            <label for="nombreCategoriaU">Nombre</label>
            <input type="text" id="nombreCategoriaU" name="nombreCategoriaU" class="form-control">
            <label for="descripcionU">Descripción</label>
            <textarea name="descripcionU" id="descripcionU"class="form-control"></textarea>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success">Guardar</button>
      </div>
    </div>
  </div>
</div>