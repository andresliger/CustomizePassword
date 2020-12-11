<!DOCTYPE html>
<html>
<head> <!--Cabecear del HTML Se carga como requerido el file de passwordManagement PHP-->
    <?php require 'passwordManagement.php'; ?>
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
        <h1>Datos personales:</h1>
        <p>El siguiente programa te permite crear una password en base a tus características y especificando para el sitio web por favor ingrese sus datos y seleccione las características para su generación de clave.</p>     
        <form action="formPassword.php" method="POST"> <!--Formulario principal asociado-->
          <div class="row">
            <div class="mb-3 col-12">
              <label class="form-check-label" for="confirmFirstName">Nombre:</label>
              <input type="checkbox" class="form-check-input" name="confirmFirstName" id="confirmFirstName">
              <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="Nombre">
            </div>
          </div>
        
          <div class="row">
            <div class="mb-3 col-12">
                <label class="form-check-label" for="confirmLastName">Apellido:</label>
                <input type="checkbox" class="form-check-input" name="confirmLastName" id="confirmLastName">
                <input type="text" class="form-control" name="lastName" id="lastName" aria-describedby="Apellido">
            </div>
          </div>

          <div class="row">
            <div class="mb-3 col-12">
                <label class="form-check-label" for="confirmUserName">Usuario:</label>
                <input type="checkbox" class="form-check-input" id="confirmUserName" name="confirmUserName">
                <input type="text" class="form-control" name="userName" id="userName" aria-describedby="Usuario">
            </div>
          </div>

          <div class="row">
            <div class="mb-3 col-12">
                <label class="form-check-label" for="confirmBirthDate">Cumpleaños:</label>
                <input type="checkbox" class="form-check-input" id="confirmBirthDate" name="confirmBirthDate">
                <input type="date" class="form-control" id="birthdate" name="birthdate" aria-describedby="Cumpleaños">
            </div>
          </div>

          <div class="row">
            <div class="mb-3 col-12">
                <label class="form-check-label" for="confirmLuckyNumber">Número de la suerte:</label>
                <input type="checkbox" class="form-check-input" id="confirmLuckyNumber" name="confirmLuckyNumber">
                <input type="number" class="form-control" id="luckyNumber" name="luckyNumber" aria-describedby="Número de la suerte">
            </div>
          </div>
         
          <div class="mb-3 col-12">
            <select class="form-select" name="website" aria-label="Sitio Web o Aplicativo">
              <option selected>Sitio Web o aplicativo</option>
              <?php
                 showAvailableSites(); //Llamada de la función que trae la lista de sitios disponibles
              ?>
            </select>  
          </div>
          
          <div class="mb-3 col-6">
            <button type="submit" class="btn btn-primary">Generar</button>
          </div>
        </form>
        <div class="container row">
        <?php footer();
        ?>
        </div>
    </div>
</body>
</html>