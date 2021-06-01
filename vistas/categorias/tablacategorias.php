<?php
  require_once "../../clases/conexion.php";
  $objCon = new Conexion();
  $conexion= $objCon->conectar();
  $sql ="SELECT nombre, descripcion, id_categoria FROM t_categorias";
  $result= mysqli_query($conexion, $sql);
?>
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
        <?php
          while ($mostrar=mysqli_fetch_array($result)) {
            $idcategoria=$mostrar['id_categoria'];
        ?>
          <tr>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['descripcion'] ?></td>
            <td>
              <span class="btn btn-warning btn-sm" onclick="obtenerDatosCategorias('<?php echo $idcategoria?>')" data-toggle="modal" data-target="#actualizarCategoria">
                <i class="fas fa-edit"></i>
              </span>
            </td>
            <td>
              <span class="btn btn-danger btn-sm" onclick="eliminarcategoria('<?php echo $idcategoria?>')">
                <i class="far fa-trash-alt"></i>
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
<script>
  $(document).ready(function () {
    $('#tablaCategoriasDt').DataTable();
  });
</script>