<?php
    include_once 'clases/conexion.php';

    $id = $_GET['id'];

    $cursor = $barcos->deleteOne(["_id"=> new MongoDB\BSON\ObjectId($id)]);

    echo "<div class='alert alert-success'> Eliminado exitosamente </div>";

    header("location: barcoVista.php"); //reroute to home page
?>