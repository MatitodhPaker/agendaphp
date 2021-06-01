$(document).ready(function () {
  $('#cargartablacategorias').load('vistas/categorias/tablacategorias.php');
  $('#btnguardarcategoria').click(function () {
    agregarcategoria();
  });
  $('#btnActualizarCategoria').click(function(){
		actualizarCategoria();
	});
});
function agregarcategoria() {
  $.ajax({
    type:"POST",
    data: $('#frmAgregarcategoria').serialize(),
    url: "procesos/categorias/agregarcategorias.php",
    success:function (respuesta) {
      respuesta = respuesta.trim();
      if (respuesta == 1) {
        $('#frmAgregarcategoria')[0].reset();
        $('#cargartablacategorias').load('vistas/categorias/tablacategorias.php');
        swal(":D","Se agrego con exito","success");
      }else{
        swal(":(","No se pudo agregar","error");
      }
    }
  });
}
function eliminarcategoria(idCategoria) {
  swal({
    title: "¿Estas seguro que quieres eliminar esta categoria?",
    text: "Una vez eliminado no podra sera recuperado!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      $.ajax({
				type: "POST",
				data: "idCategoria=" + idCategoria,
				url: "procesos/categorias/eliminarcategoria.php",
				success:function(respuesta) {
					respuesta = respuesta.trim();
					if (respuesta == 1) {
						$('#cargartablacategorias').load('vistas/categorias/tablacategorias.php');
						swal(":D","Se elimino con exito!","success");
					} else {
						swal(":(","No se pudo eliminar!","error");
					}
				}
			});
    } 
  });
}
function obtenerDatosCategorias(idCategoria) {
  $.ajax({
    type: "POST",
    data: "idCategoria=" + idCategoria,
    url: "procesos/categorias/obtenerDatosCategoria.php",
    success: function (respuesta) {
      respuesta = jQuery.parseJSON(respuesta);
      $('#idCategoria').val(respuesta['idCategoria']);
			$('#nombreCategoriaU').val(respuesta['nombre']);
			$('#descripcionU').val(respuesta['descripcion']);
    }
  });
}
function actualizarCategoria() {
	$.ajax({
		type:"POST",
		data:$('#frmActualizarCategoria').serialize(),
		url: "procesos/categorias/actualizarCategoria.php",
		success:function(respuesta) {
			respuesta = respuesta.trim();
			if (respuesta == 1) {
				$('#cargartablacategorias').load('vistas/categorias/tablacategorias.php');
				$('#modalActualizarCategoria').modal("toggle");
				swal(":D","Se actualizo con exito!","success");
			} else {
				swal(":(","No se pudo actualizar!","error");
			}
		}
	});
}