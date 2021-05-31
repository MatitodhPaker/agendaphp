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
          <h1 class="display-3">Agenda de concatos</h1>
          <div class="row">
            <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <img src="public/img/user.jpg" class="img-fluid" alt="Responsive image" style="width: 100%;">
                  </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Agenda php</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>contactos</td>
                        </tr>
                        <tr>
                          <td>categorias</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
          </div>
          <hr class="my-2">
          Realizada en php y mysql By Marco Antonio Perez Rodriguez
        </div>
        </div>
      </div>
    </div>
  </body>
</html>