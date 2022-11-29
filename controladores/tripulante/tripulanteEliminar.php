<?php
     include_once '../../clases/conexion.php';

    $id = $_GET['id'];

    $cursor = $tripulante->deleteOne(["_id"=> new MongoDB\BSON\ObjectId($id)]);

    echo "<div class='alert alert-success'> Eliminado exitosamente </div>";

    header("location:../../vistas/tripulante/tripulanteInicio.php"); //reroute to home page
?>