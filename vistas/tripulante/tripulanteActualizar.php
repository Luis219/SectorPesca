<?php
include_once '../../controladores/tripulante/tripulanteActualizar.php';
$cursorb = $barcos->find();
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

    <title>Actualizar tripulación</title>
</head>

<body>
    <!-- Barra de navegación -->
    <?php
    include_once('../template.php')
    ?>
    <!-- Fin barra de navegación -->

    <div class="tablaContenidos">

        <h3>ACTUALIZAR TRIPULANTE</h3>
        <h5><a href="trupulanteInicio.php" class="btn btn-outline-dark
        ">Regresar</a></h5>

        <!-- Formulario principal-->
        <div class="formActualizarAgregar">
            <form method="POST" class="my-3 mx-3 ">
                <div class="mb-3">
                    <label for="address" class="form-label">Nombres</label>
                    <input type="text" value="<?php echo $cursor['nombres']; ?>" class="form-control" id="matricula" name="nombres" aria-describedby="name" pattern="[a-zA-ZáéíóúÁÉÍÓÚ\s]{2,}" title="El nombre debe contener al menos dos letras" require>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Barco</label>

                    <select name="barco" id="">
                        <?php foreach ($cursorb as $document) { ?>
                            <option value="<?php echo $document['_id']; ?>"><?php echo $document['nombre']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Cédula</label>
                    <input type="text" value="<?php echo $cursor['cedula']; ?>" class="form-control" id="tonelaje" name="cedula" aria-describedby="address" pattern="[\d]{10}" title="La cedula debe contener 10 dígitos" require>
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Correo</label>
                    <input type="email" value="<?php echo $cursor['correo']; ?>" class="form-control" id="contact" name="correo" aria-describedby="address" require>

                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Teléfono</label>
                    <input type="tel" value="<?php echo $cursor['telefono']; ?>" class="form-control" id="contact" name="telefono" aria-describedby="address" pattern="[0-9]{10}" title="El teléfono debe contener 10 dígitos" require>

                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" value="<?php echo $cursor['fecha_nacimiento']; ?>" class="form-control" id="contact" name="fecha_nacimiento" aria-describedby="address">

                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Ciudad</label>
                    <input type="text" value="<?php echo $cursor['ciudad']; ?>" class="form-control" id="address" name="ciudad" aria-describedby="address" pattern="[a-zA-ZáéíóúÁÉÍÓÚ\s]{2,}" title="La ciudad debe contener al menos dos letras" require>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Tipo de Sangre</label>
                    <select value="<?php echo $cursor['tipo_sangre']; ?>" name="tipoSangre" id="tipo" require>
                        <option value="ORH+">ORH+</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB">AB</option>
                    </select>
                </div>

                <div style="text-align: center;">
                    <input type="submit" name="submit" class="btn btn-success" value="Actualizar" />
                    <a href="trupulanteInicio.php" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
        <!-- Fin Formulario principal-->
    </div>
</body>

</html>