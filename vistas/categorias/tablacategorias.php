<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover table-condensed" id="tablaCategoriasDt">
        <thead>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </thead>
        <tbody>
          <td></td>
          <td></td>
          <td>
            <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#actualizarCategoria">
              <i class="fas fa-edit"></i>
            </span>
          </td>
          <td>
            <span class="btn btn-danger btn-sm" onclick="eliminarcategoria()">
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
    $('#tablaCategoriasDt').DataTable();
  });
</script>