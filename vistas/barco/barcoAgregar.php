<?php
include_once '../../controladores/barco/barcoAgregar.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Agregar barco</title>
</head>

<body>
    <!-- Barra de navegación -->
    <?php
    include_once('../template.php')
    ?>
    <!-- Fin barra de navegación -->

    <div class="contenidoFormulario">
        <nav class="navbar navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Empresa de Pesca</a>
            </div>
        </nav>
        <div class="container">
            <div class="card mt-3 mb-2 bg-light">
                <h4 class="card-title mx-auto mt-4">Nueva Embarcación</h4>
                <div class="card-body">
                    <form method="POST" class="my-3 mx-3">

                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="txtNombre" aria-describedby="name" require>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Matricula</label>
                            <input type="text"  class="form-control" id="address" name="txtMatricula" aria-describedby="address" require >
                        </div>
                        <div class="mb-3">
                            <label for="contact" class="form-label">Tonelaje</label>
                            <input type="number"  class="form-control" id="contact" name="txtTonelaje" aria-describedby="address" require>
                        </div>
                        <div class="mb-3">
                            <label for="contact" class="form-label">Año de Construcción</label>
                            <input type="number"  class="form-control" id="contact" name="txtAnio" aria-describedby="address" require pattern="[0-9]{4}">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Color</label>
                            <input type="text"  class="form-control" id="address" name="txtColor" aria-describedby="address" require >
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Tipo Embarcación</label>
                            <input type="text"  class="form-control" id="address" name="txtTipo" aria-describedby="address" require >
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <input type="submit" name="submit" class="btn btn-primary" value="Agregar" />
                            <a href="barcoVista.php" class="btn btn-warning">Atrás</a>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>