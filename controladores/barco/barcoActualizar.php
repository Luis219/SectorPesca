<?php
    include_once '../../clases/conexion.php';

    $id = $_GET['id'];

    $cursor = $barcos->findOne(["_id"=>new MongoDB\BSON\ObjectId($id)]);

    if (isset($_POST['submit'])) {
        $post_data = array();
        $post_data['nombre'] = $_POST['txtNombre']; 
        $post_data['matricula'] = $_POST['txtMatricula'];
        $post_data['tonelaje'] = $_POST['txtTonelaje'];
 
        $result = $barcos->updateOne(['_id'=> new MongoDB\BSON\ObjectId($_GET['id'])],['$set'=>$post_data],['upsert' => true]);
 
        $post_data = array();
        $_POST = array();
        header("Refresh:0");

        echo "<div class='alert alert-success'> Actualización Exitosa </div>";
    }
?>