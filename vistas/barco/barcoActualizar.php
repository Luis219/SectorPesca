<?php
include_once '../../controladores/barco/barcoActualizar.php';
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
    <title>Actualizar Barco</title>
</head>

<body>
    <!-- Barra de navegación -->
    <?php
    include_once('../template.php')
    ?>
    <!-- Fin barra de navegación -->

    <div class="tablaContenidos">

        <h3>ACTUALIZAR EMBARCACIÓN</h3>
        <h5><a href="barcoVista.php" class="btn btn-outline-light">Regresar</a></h5>

        <!-- Formulario principal-->
        <div class="formActualizarAgregar">
            <form method="POST" action="" class="my-3 mx-3">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre del barco</label>
                    <input type="text" value="<?php echo $cursor['nombre']; ?>" class="form-control" id="nombre" name="txtNombre" aria-describedby="name" pattern="[a-zA-ZáéíóúÁÉÍÓÚ\s]{2,}" title="El nombre debe contener al menos dos letras" require>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Matrícula</label>
                    <input type="text" value="<?php echo $cursor['matricula']; ?>" class="form-control" id="matricula" name="txtMatricula" aria-describedby="address" title="La matricula debe tener el siguiente formato: 1-AB-123" require>
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Tonelaje</label>
                    <input type="text" value="<?php echo $cursor['tonelaje']; ?>" class="form-control" id="tonelaje" name="txtTonelaje" aria-describedby="address" pattern="[\d]{1,5}" title="Ingrese de uno a cinco dígitos" require>
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Fecha de Construcción</label>
                    <input type="month" value="<?php echo $cursor['anio_construccion']; ?>" class="form-control" id="tonelaje" name="txtAnio" aria-describedby="address" title="Ingrese el mes y año de fabricación" require>
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Color</label>
                    <input type="text" value="<?php echo $cursor['color']; ?>" class="form-control" id="tonelaje" name="txtColor" aria-describedby="address" pattern="[a-zA-ZáéíóúÁÉÍÓÚ\s]{3,}" title="El color debe contener al menos tres letras" require>
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Tipo de embarcación</label>
                    <select name="txtTipo" id="tipo" value="<?php echo $cursor['tipo']; ?>" require>
                        <option value="Pesquero">Pesquero</option>
                        <option value="Transporte">Transporte</option>
                        <option value="Reconocimiento">Reconocimiento</option>
                    </select>
                </div>
                <div style="text-align: center;">
                    <input type="submit" name="submit" class="btn btn-success" value="Actualizar" />
                    <a href="barcoVista.php" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
        <!-- Fin Formulario principal-->
    </div>
</body>

</html>