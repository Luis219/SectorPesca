<?php
include_once '../../clases/conexion.php';

session_start();

if (!isset($_SESSION['id'])) {
    header("location:/sectorpesquero/vistas/validarlogin.php");
}

$cursor = $tripulante->find();
$id = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Inicio tripulante</title>
</head>

<body>
    <!-- Barra de navegación -->
    <?php
    include_once('../template.php')
    ?>
    <!-- Fin barra de navegación -->

    <div class="tablaContenidos">

        <h3>TRIPULACIÓN</h3>
        <h5>
            <?php
            echo  'Bienvenido ' .  $_SESSION['usuario'];
            ?></h5>

        <!-- Tabla principal-->
        <div class="tablaPrincipal">
            <div clas="table-responsive">
                <table class="table table-hover table-bordered table-primary">
                    <thead style="font-size: 11pt">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Barco</th>
                            <th scope="col">Cédula</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Fecha de Nacimiento</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Tipo de Sangre</th>

                            <th style="text-align:center"> <a id="btn" href="tripulanteAgregar.php" class="btn btn-secondary"><i class="fa fa-plus"></i></a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $cont = 1;
                        foreach ($cursor as $document) { ?>
                            <tr>
                                <td><?php echo $cont;
                                    $cont++; ?></td>

                                <td><?php echo $document['nombres']; ?></td>
                                <td><?php $id = $document['barco_id'];

                                    $cursor2 = $barcos->findOne(["_id" => new MongoDB\BSON\ObjectId($id)]);
                                    echo $cursor2['nombre']; ?></td>
                                <td><?php echo $document['cedula']; ?></td>
                                <td><?php echo $document['correo']; ?></td>
                                <td><?php echo $document['telefono']; ?></td>
                                <td><?php echo $document['fecha_nacimiento']; ?></td>
                                <td><?php echo $document['ciudad']; ?></td>
                                <td><?php echo $document['tipo_sangre']; ?></td>

                                <!-- Delete Button -->
                                <td style="text-align:center">
                                    <?php
                                    if ($_SESSION['name'] == "admin") {
                                    ?>
                                        <a href="../../controladores/tripulante/tripulanteEliminar.php?id=<?php echo $document['_id']; ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    <?php
                                    }
                                    ?>
                                    <a href="tripulanteActualizar.php?id=<?php echo $document['_id']; ?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Fin Tabla principal-->

        <!-- Tabla oculta-->



        <!-- Tabla oculta-->

    </div>

</body>

</html>