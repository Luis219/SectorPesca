<?php
     include_once 'clases/conexion.php';

    if (isset($_POST['submit'])) {
       $post_data = array();
      
       $post_data['barco_id'] = $_POST['barco']; 
       $post_data['descripcion'] = $_POST['descripcion'];
       $post_data['horarioSalida'] = $_POST['horarioSalida'];

       if (($post_data['barco_id']=="")||($post_data['descripcion']=="")||($post_data['horarioSalida']=="")) {
            echo "<div class='alert alert-danger'>Campos vacios! </div>";
        }else {
            $pesca->insertOne($post_data);
            header("Refresh:0");
        }

       

       $post_data = array();
       $_POST = array();
       
    }
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
    <title>Add Student</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Empresa de Pesca</a>
            </div>
    </nav>
    <div class="container">
        <div class="card mt-3 mb-2 bg-light">
            <h4 class="card-title mx-auto mt-4">Zarpado</h4>
            <div class="card-body">
                <form method="POST" class="my-3 mx-3">
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Barco</label>
                        <input type="text" placeholder="ex: Chamara" class="form-control" id="name" name="barco" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Descripcion</label>
                        <input type="text" placeholder="ex: Kurunegala" class="form-control" id="address" name="descripcion" aria-describedby="address">
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Horario Salida</label>
                        <input type="datetime-local"  placeholder="ex: 761234568" class="form-control" id="contact" name="horarioSalida" aria-describedby="address">
                       
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <input type="submit" name="submit" class="btn btn-primary" value="Insertar"/>
                        <a href="pescaInicio.php" class="btn btn-warning">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>