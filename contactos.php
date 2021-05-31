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
            <h1 class="display-3">Contactos</h1>
            <button class="btn btn-success"><i class="fas fa-user-plus"></i> Agregar contacto</button>
            <hr class="my-2">
            <div id="cargartablacontactos"></div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="public/js/contactos.js"></script>
</html>