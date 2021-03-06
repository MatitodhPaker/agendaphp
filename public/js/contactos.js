$(document).ready(function () {
  $('#cargartablacontactos').load('vistas/contactos/tablacontactos.php');
  $('#btnAgregarContacto').click(function(){

		if ($('#idCategoriaSelect').val() == 0) {
			swal("Debes selecciona una categoria");
			return false;
		} else if ($('#nombre').val() == "") {
			swal("Debes agregar el nombre");
			return false;
		}

		agregarContacto();
	});
  $('#btnActualizarContacto').click(function(){
		actualizarContacto();
	});
});
function agregarContacto(){
	$.ajax({
		type: "POST",
		url: "procesos/contactos/agregarContacto.php",
		data: $('#frmAgregarcontacto').serialize(),
		success:function(respuesta) {
			respuesta = respuesta.trim();
			if (respuesta == 1) {
				$('#frmAgregarcontacto')[0].reset();
				$('#cargartablacontactos').load('vistas/contactos/tablacontactos.php');
				swal(":D","Se agrego con exito!","success");
			} else {
				swal(":(","No se pudo agregar!","error");
			}
		}
	});
}
function actualizarContacto() {
	$.ajax({
		type: "POST",
		url: "procesos/contactos/actualizarContacto.php",
		data: $('#frmActualizarcontacto').serialize(),
		success:function(respuesta) {
			respuesta = respuesta.trim();
			if (respuesta == 1) {
				$('#cargartablacontactos').load('vistas/contactos/tablacontactos.php');
				$('#actualizarContacto').modal("toggle");
				swal(":D","Se actualizo con exito!","success");
			} else {
				swal(":(","No se pudo actualizar!","error");
			}
		}
	});
}
function eliminarContacto(idContacto) {
	swal({
		title: "¿Esta seguro de eliminar este contacto?",
		text: "Una vez eliminado no podra ser recuperado!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				data:"idContacto=" + idContacto,
				url:"procesos/contactos/eliminarContacto.php",
				success:function(respuesta){
					respuesta = respuesta.trim();
					if (respuesta == 1) {
						$('#cargartablacontactos').load('vistas/contactos/tablacontactos.php');
						swal(":D","Se elimino con exito!","success");
					} else {
						swal(":(","No se pudo eliminar!","error");
					}
				}
			});
		} 
	});
}
function obtenerDatosContacto(idContacto) {
	$.ajax({
		type: "POST",
		data: "idContacto=" + idContacto,
		url: "procesos/contactos/obtenerDatosContacto.php",
		success:function(respuesta) {
			respuesta = jQuery.parseJSON(respuesta);
			idCategoria = respuesta['id_categoria'];

			$('#nombreU').val(respuesta['nombre']);
			$('#apaternoU').val(respuesta['paterno']);
			$('#amaternoU').val(respuesta['materno']);
			$('#telefonoU').val(respuesta['telefono']);
			$('#emailU').val(respuesta['email']);
			$('#idContactoU').val(respuesta['id_contacto']);
			$('#categoriasIdU').load("vistas/contactos/selectCategoriasUpdate.php?idCategoria=" + idCategoria);
			
		}
	});
}