<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover table-condensed" id="tablaContactosDt">
        <thead>
          <th>Apellido paterno</th>
          <th>Apellido materno</th>
          <th>Nombre</th>
          <th>Telefono</th>
          <th>E-mail</th>
          <th>Categoria</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </thead>
        <tbody>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#actualizarContacto">
              <i class="fas fa-edit"></i>
            </span>
          </td>
          <td>
            <span class="btn btn-danger btn-sm" onclick="eliminarcontacto()">
              <i class="far fa-trash-alt"></i>
            </span>
          </td>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script>
  $(document).ready(function () {
    $('#tablaContactosDt').DataTable();
  });
</script>