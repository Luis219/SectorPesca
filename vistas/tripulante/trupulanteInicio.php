<?php
include_once '../../clases/conexion.php';

$cursor = $tripulante->find();
$id="";
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

    <div class="contenidoFormulario">

        <div class="card mt-3 mb-3 bg-light">
            <div class="card-header text-center">
                <h5>Tripulación </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover mt-0">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Barco</th>
                                <th scope="col">Cédula</th>
                                <th scope="col">Correo</th>
                                <th> <a id="btn" href="tripulanteAgregar.php" class="btn btn-secondary" ><i class="fa fa-plus"></i></a></th>
                                <th scope="col" style="text-align:right"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cursor as $document) { ?>
                                <tr>
                                    <th scope="row"><?php echo $document['_id']; ?></th>
                                    <td><?php echo $document['nombres']; ?></td>
                                    <td><?php $id = $document['barco_id'];
                                  
                                        $cursor2 = $barcos->findOne(["_id" => new MongoDB\BSON\ObjectId($id)]);
                                        echo $cursor2['nombre']; ?></td>
                                    

                                    <td><?php echo $document['cedula']; ?></td>
                                    <td><?php echo $document['correo']; ?></td>
                                    <!-- Delete Button -->
                                    <td style="text-align:right">
                                        <a href="../../controladores/tripulante/tripulanteEliminar.php?id=<?php echo $document['_id']; ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        <a href="tripulanteActualizar.php?id=<?php echo $document['_id']; ?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    </td>
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