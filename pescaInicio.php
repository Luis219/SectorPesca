<?php
   include_once 'clases/conexion.php';

   $cursor = $pesca->find();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="card mt-3 mb-3 bg-light">
<a href="pescaAgregar.php" class="btn btn-primary">Agregar</a>
            <div class="card-header text-center">
                <h5>Pesca</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover mt-0">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Barco</th>
                                <th scope="col">descripcion</th>
                                <th scope="col">Hoario de salida</th>
                                <th scope="col" style="text-align:right"></th>
                            </tr>
                        </thead>
                        <tbody  >
                            <?php foreach($cursor as $document) {?>
                                <tr>
                                    <th scope="row"><?php echo $document['_id']; ?></th>
                                    <td><?php echo $document['barco_id']; ?></td>
                                    <td><?php echo $document['descripcion']; ?></td>
                                    <td><?php echo $document['horarioSalida']; ?></td>
                                    <!-- Delete Button -->
                                    <td style="text-align:right">
                                        <a href="pescaEliminar.php?id=<?php echo $document['_id']; ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        <a href="pescaActualizar.php?id=<?php echo $document['_id']; ?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
</body>
</html>