<div class="modal fade" id="agregarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar una categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregarcategoria">
          <label for="nombreCategoria">Nombre</label>
          <input type="text" name="nombreCategoria" id="nombreCategoria" class="form-control">
          <label for="descripcion">Descripcion</label>
          <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnguardarcategoria">Guardar</button>
      </div>
    </div>
  </div>
</div>