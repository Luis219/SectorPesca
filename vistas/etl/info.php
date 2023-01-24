<?php
include_once '../../clases/conexion.php';
session_start();

if (!isset($_SESSION['id'])) {
    header("location:/sectorpesquero/vistas/validarlogin.php");
}


$cursor = $clima->find();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Inicio pesca</title>
    <style>
        .card2 {
            width: 200px;
            margin: 0 auto;
        }

        .temperature {
            font-size: 3em;
            color: #ffa500;
        }

        .icon {
            width: 50px;
        }
    </style>
</head>

<body>
    <!-- Barra de navegación -->
    <?php
    include_once('../template.php')
    ?>
    <!-- Fin barra de navegación -->

    <div class="tablaContenidos">

        <h3>INFORMACIÓN DEL CLIMA</h3>
        <h5>
            <?php
            echo  'Bienvenido ' .  $_SESSION['usuario'];
            ?></h5>

        <h5><a id="btn" href="../pesca/pescaInicio.php" class="btn btn-secondary"><i class="fa fa-reply" aria-hidden="true"></i></a></h5>

        <!-- Tabla principal-->
        <div class="tablaPrincipal">
            <div clas="table-responsive">
                <table class="table table-hover table-bordered table-primary">
                    <thead style="font-size: 11pt">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre y área</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Ley</th>
                            <th scope="col">Observaciones</th>
                            <th scope="col">Origen Rutas</th>
                            <th scope="col">Destino Rutas</th>
                            <th scope="col">Millas Rutas</th>
                            <th scope="col">Equipo Requerido</th>
                            <th scope="col">Velocidad Rutas</th>
                            <th scope="col">Actividad</th>
                            <th scope="col">ID Reserva</th>
                            <th scope="col">Sea level</th>
                            <th scope="col" style="color:darkred;"><i>Pronóstico del tiempo</i></th>
                            <th scope="col" style="color:darkred;"><i>Ciudad</i></th>
                            <th scope="col" style="color:darkred;"><i>País</i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $cont = 1;
                        foreach ($cursor as $document) { ?>
                            <tr>
                                <td><?php echo $cont;
                                    $cont++; ?></td>

                                <td><?php

                                    $id = $document['_id'];

                                    $cursor2 = $clima->findOne(["_id" => new MongoDB\BSON\ObjectId($id)]);
                                    echo $cursor2['nombre_1']; ?>
                                </td>
                                <td><?php echo ($document['categoria']); ?></td>
                                <td><?php echo ($document['ley']); ?></td>
                                <td><?php echo $document['observaciones']; ?></td>
                                <td><?php echo $document['origen']; ?></td>
                                <td><?php echo $document['destino']; ?></td>
                                <td><?php echo $document['millas']; ?></td>
                                <td><?php echo $document['equiporequerido']; ?></td>
                                <td><?php echo $document['velocidadmedia']; ?></td>
                                <td><?php echo $document['detalleactividad']; ?></td>
                                <td><?php echo ($document['idreserva']); ?></td>
                                <td><?php echo $document['sealevel']; ?></td>
                                <td>
                                    <div class="card2 text-center">
                                        <div class="card-body">

                                            <?php if (($document['temp'] - 273.15) >= 20) { ?>
                                                <img width="25px" src="https://png-1.vector.me/files/images/4/1/411975/weather_symbols_sun_preview" alt="Sun" class="icon">
                                                <p class="card-text">Día soleado</p>
                                            <?php } else { ?>
                                                <img width="25px" src="https://static.vecteezy.com/system/resources/previews/014/455/633/non_2x/illustration-creative-icon-3d-weather-forecast-sign-meteorological-sun-cloud-isolated-on-background-free-vector.jpg" alt="Sun" class="icon">
                                                <p class="card-text">Día lluvioso</p>

                                            <?php } ?>
                                            <h1 class="card-text temperature"> <?php echo $document['temp'] - 273.15; ?> C</h1>

                                        </div>
                                    </div>
                                </td>
                                <td><?php echo $document['city']; ?></td>
                                <td><?php echo $document['country']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>