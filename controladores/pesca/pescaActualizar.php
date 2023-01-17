<?php
        include_once '../../clases/conexion.php';

    $id = $_GET['id'];

    $cursor = $pesca->findOne(["_id"=>new MongoDB\BSON\ObjectId($id)]);
    $cursor2 = $barcos->findOne(["_id"=>$cursor['barco_id']]);

    if (isset($_POST['submit'])) {
        $post_data = array();
        
        $post_data['barco_id'] = $_POST['barco']; 
        $post_data['horarioSalida'] = $_POST['horarioSalida'];
        $post_data['millas_recorrer'] = $_POST['millas'];
        $post_data['numero_tripulantes'] = $_POST['ntripulantes'];
        $post_data['dias_pesca'] = $_POST['diaspesca'];
        $post_data['tipo_pesca'] = $_POST['tipoPesca'];
        $post_data['descripcion'] = $_POST['descripcion'];
      
 
        $result = $pesca->updateOne(['_id'=> new MongoDB\BSON\ObjectId($_GET['id'])],['$set'=>$post_data],['upsert' => true]);
 
        $post_data = array();
        $_POST = array();
        header("Refresh:0");

        echo "<div class='alert alert-success'> Actualización Exitosa </div>";
    }
?>
