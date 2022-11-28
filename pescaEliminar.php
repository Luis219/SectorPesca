<?php
    include_once 'clases/conexion.php';

    $id = $_GET['id'];

    $cursor = $pesca->deleteOne(["_id"=> new MongoDB\BSON\ObjectId($id)]);

    echo "<div class='alert alert-success'> Eliminado exitosamente </div>";

    header("location: pescaVista.php"); //reroute to home page
?>