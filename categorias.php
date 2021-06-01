<!doctype html>
<html lang="es">
  <head>
    <title>Agenda de Contactos</title>
    <link rel="shortcut icon" href="public/img/favicon.png" type="image/png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require_once "dependencias.php"?>

  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
        <?php require_once "menu.php"?>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="jumbotron">
            <h1 class="display-3">Categorias</h1>
            <button class="btn btn-success" data-toggle="modal" data-target="#agregarCategoria"><i class="fas fa-folder-plus"></i> Agregar categoria</button>
            <hr class="my-2">
            <div id="cargartablacategorias"></div>
            <?php 
            require_once "vistas/categorias/modalagregar.php";
            require_once "vistas/categorias/modalactualizar.php";
            ?>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="public/js/categorias.js"></script>
</html>