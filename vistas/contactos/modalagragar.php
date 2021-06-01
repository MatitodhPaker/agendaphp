<div class="modal fade" id="agregarContacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar un contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregarcontacto">
          <div id="categoriasId"></div>
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control">
          <label for="apaterno">Apellido paterno</label>
          <input type="text" name="apaterno" id="apaterno" class="form-control">
          <label for="amaterno">Apellido materno</label>
          <input type="text" name="amaterno" id="amaterno" class="form-control">
          <label for="telefono">Telefono</label>
          <input type="text" name="telefono" id="telefono" class="form-control">
          <label for="email">E-mail</label>
          <input type="text" name="email" id="email" class="form-control">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>