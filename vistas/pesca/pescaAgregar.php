<?php
include_once '../../controladores/pesca/pescaAgregar.php';
session_start();
$cursor = $barcos->find();
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
        <title>Vista barco</title>
</head>

<body>
    <!-- Barra de navegación -->
    <?php
    include_once('../template.php')
    ?>
    <!-- Fin barra de navegación -->

    <div class="tablaContenidos">

        <h3>AGREGAR NUEVA PESCA</h3>
        <h5><a href="pescaInicio.php" class="btn btn-outline-dark">Regresar</a></h5>

        <!-- Formulario principal-->
        <div class="formActualizarAgregar">
            <form method="POST" class="my-3 mx-3">

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre del Barco</label>
                    <select name="barco" id="">
                        <?php foreach ($cursor as $document) { ?>
                            <option value="<?php echo $document['_id']; ?>"><?php echo $document['nombre']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <input type="text" value="<?php echo $_SESSION['id']; ?>" name="usuario" hidden>

                <div class="mb-3">
                    <label for="contact" class="form-label">Horario de salida</label>
                    <input type="datetime-local" class="form-control" id="contact" name="horarioSalida" aria-describedby="address" require>

                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Millas recorridas</label>
                    <input type="number" class="form-control" id="millas" name="millas" aria-describedby="address" pattern="[\d]{1,5}" title="Ingrese de uno a cinco dígitos" require>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Número de tripulantes</label>
                    <input type="number" class="form-control" id="tripulantes" name="ntripulantes" aria-describedby="address" require>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Días de pesca</label>
                    <input type="number" class="form-control" id="dias" name="diaspesca" aria-describedby="address" require>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Incidente durante la pesca</label>
                    <select name="incidentePesca" id="tipo">
                        <option value="Sin incidentes">Sin incidentes</option>
                        <option value="Lesiones en la tripulación">Lesiones en la tripulación</option>
                        <option value="Daños en el barco">Daños en el barco</option>
                        <option value="Lesiones y daños">Lesiones y daños</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Cantidad de pesca capturada</label>
                    <input type="number" class="form-control" id="address" name="cantidadPescaCapturada" aria-describedby="address" pattern="[\d]{1,5}" title="Ingrese la cantidad de pesca capturada" require>
                </div>
                <div style="text-align: center;">
                    <input type="submit" name="submit" class="btn btn-success" value="Agregar" />
                    <a href="pescaInicio.php" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
        <!-- Fin Formulario principal-->
    </div>
</body>

</html>