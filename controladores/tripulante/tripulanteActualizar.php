<?php
        include_once '../../clases/conexion.php';

    $id = $_GET['id'];

    $cursor = $tripulante->findOne(["_id"=>new MongoDB\BSON\ObjectId($id)]);

    if (isset($_POST['submit'])) {
        $post_data = array();
        
        $post_data['barco_id'] = $_POST['barco']; 
        $post_data['nombres'] = $_POST['nombres'];
        $post_data['cedula'] = $_POST['cedula'];
        $post_data['correo'] = $_POST['correo'];
 
        $result = $tripulante->updateOne(['_id'=> new MongoDB\BSON\ObjectId($_GET['id'])],['$set'=>$post_data],['upsert' => true]);
 
        $post_data = array();
        $_POST = array();
        header("Refresh:0");

        echo "<div class='alert alert-success'> Actualización Exitosa </div>";
    }
?>