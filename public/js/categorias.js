$(document).ready(function () {
  $('#cargartablacategorias').load('vistas/categorias/tablacategorias.php');
});
function eliminarcategoria() {
    swal({
      title: "¿Estas seguro que quieres eliminar esta categoria?",
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