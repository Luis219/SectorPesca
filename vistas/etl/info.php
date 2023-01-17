<?php
include_once '../../clases/conexion.php';
session_start();

if (!isset($_SESSION['id'])){
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Inicio pesca</title>
</head>

<body>
    <!-- Barra de navegación -->
    <?php
    include_once('../template.php')
    ?>
    <!-- Fin barra de navegación -->

    <div class="contenidoFormulario">
        <div class="card mt-3 mb-3 bg-light">
            <p> <?php
               
               echo  'Bienvenido '.  $_SESSION['usuario'];
              
                ?></p>
            <div class="card-header text-center">
                <h5>Clima </h5>
            </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mt-0">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Categoría</th>
                                    <th scope="col">Ley</th>
                                    <th scope="col">Área</th>
                                    <th scope="col">Observaciones</th>
                                    <th scope="col">Origen Rutas</th>
                                    <th scope="col">Destino Rutas</th>
                                    <th scope="col">Millas Rutas</th>
                                    <th scope="col">Observaciones Rutas</th>
                                    <th scope="col">Velocidad Rutas</th>
                                    <th scope="col">Consumo Rutas</th>
                                    <th scope="col">ID Reserva</th>
                                    <th scope="col">Sea level</th>
                                    <th scope="col">T. ª</th>
                                    <th scope="col">Ciudad</th>
                                    <th scope="col">País</th>
                                    <th> <a id="btn" href="../etl/info.php" class="btn btn-secondary"><i class="fa fa-reply" aria-hidden="true"></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $cont=1;
                                foreach ($cursor as $document) { ?>
                                <tr>
                                    <td><?php echo $cont;
                                        $cont++; ?></td>

                                    <td><?php 
                                        
                                        $id = $document['_id'];
                                    
                                            $cursor2 = $clima->findOne(["_id" => new MongoDB\BSON\ObjectId($id)]);
                                            echo $cursor2['nombre']; ?></td>
                                    
                                    <td><?php echo ( $document['categoria']); ?></td>
                                    <td><?php echo ( $document['ley']); ?></td>
                                    <td><?php echo ( $document['area']); ?></td>
                                    <td><?php echo $document['observaciones']; ?></td>
                                    <td><?php echo $document['origen']; ?></td>
                                    <td><?php echo $document['destino']; ?></td>
                                    <td><?php echo $document['millas']; ?></td>
                                    <td><?php echo $document['observaciones_1']; ?></td>
                                    <td><?php echo $document['velocidadmedia']; ?></td>
                                    <td><?php echo $document['consumomedio']; ?></td>
                                    <td><?php echo ( $document['idreserva']); ?></td>
                                    <td><?php echo $document['sealevel']; ?></td>
                                    <td><?php echo $document['temp']; ?></td>
                                    <td><?php echo $document['city']; ?></td>
                                    <td><?php echo $document['country']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</body>

</html>
