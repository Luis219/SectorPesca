<?php
include_once '../../controladores/pesca/pescaActualizar.php';
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
    <title>Actualizar pesca</title>
</head>

<body>
    <!-- Barra de navegación -->
    <?php
    include_once('../template.php')
    ?>
    <!-- Fin barra de navegación -->

    <div class="tablaContenidos">

        <h3>ACTUALIZAR PESCA</h3>
        <h5><a href="pescaInicio.php" class="btn btn-outline-light">Regresar</a></h5>

        <!-- Formulario principal-->
        <div class="formActualizarAgregar">
            <form method="POST" class="my-3 mx-3">

                <div class="mb-3">
                    <label for="nombre" class="form-label">Barco</label>
                    <input type="text" value="<?php echo $cursor2['nombre']; ?>" class="form-control" id="nombre" name="barco" aria-describedby="name">
                </div>

                <div class="mb-3">
                    <label for="horario" class="form-label">Horario Salida</label>
                    <input type="datetime-local" value="<?php echo $cursor['horarioSalida']; ?>" class="form-control" id="horario" name="horarioSalida" aria-describedby="address">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Millas a recorrer</label>
                    <input type="text" value="<?php echo $cursor['millas_recorrer']; ?>" class="form-control" id="address" name="millas" aria-describedby="address" pattern="[\d]{1,5}" title="Ingrese de uno a cinco dígitos" require>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Número de tripulantes</label>
                    <input type="number" value="<?php echo $cursor['numero_tripulantes']; ?>" class="form-control" id="address" name="ntripulantes" aria-describedby="address" require>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Días de Pesca</label>
                    <input type="number" value="<?php echo $cursor['dias_pesca']; ?>" class="form-control" id="address" name="diaspesca" aria-describedby="address" require>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Tipo de pesca</label>
                    <select name="tipoPesca" id="tipo">
                        <option value="Gran Altura">Gran Altura</option>
                        <option value="Altura">Altura</option>
                        <option value="Bajura">Bajura</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Descripción</label>
                    <input type="text" value="<?php echo $cursor['descripcion']; ?>" class="form-control" id="desc" name="descripcion" aria-describedby="address" pattern="[a-zA-Z0-9\s]{2,}" title="Ingrese una descripción" require>
                </div>
                <div style="text-align: center;">
                    <input type="submit" name="submit" class="btn btn-success" value="Actualizar" />
                    <a href="pescaInicio.php" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
        <!-- Fin Formulario principal-->
    </div>
</body>

</html>