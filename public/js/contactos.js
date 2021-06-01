$(document).ready(function () {
  $('#cargartablacontactos').load('vistas/contactos/tablacontactos.php');
});
function eliminarcontacto() {
  swal({
    title: "¿Estas seguro que quieres eliminar este contacto?",
    text: "Una vez eliminado no podra sera recuperado!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      swal("Se ha eliminado");
    } 
  });
}