<!DOCTYPE html>
<html>
<head> <!--Cabecear del HTML Se carga como requerido el file de formPassword PHP-->
    <?php require 'passwordMethods.php'; ?>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php echo __TITLE_SYSTEM?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="main.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>
<body> <!--Cuerpo del HTML Tiene un formulario asociado a un script php y conforme genera passwords agrega en una lista-->
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><?php echo __TITLE_SYSTEM?></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
    </nav>
    <div class="container">
        <br>
        <h1>Contraseñas generadas:</h1>
        <div class="table-responsive">
          <table class="table">
            <thead class="table-primary">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Sitio</th>
                <th scope="col">Password</th>
              </tr>
            </thead>
            <?php generatePasswordResult(); ?>
          </table>
        </div>
    </div>
</body>
</html>