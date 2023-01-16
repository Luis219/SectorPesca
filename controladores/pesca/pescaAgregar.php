<?php
     include_once '../../clases/conexion.php';

    if (isset($_POST['submit'])) {
       $post_data = array();
      
       $post_data['barco_id'] = $_POST['barco']; 
       $post_data['horarioSalida'] =  $_POST['horarioSalida'];
       $post_data['millas_recorrer'] = $_POST['millas'];
       $post_data['numero_tripulantes'] = $_POST['ntripulantes'];
       $post_data['dias_pesca'] = $_POST['diaspesca'];
       $post_data['tipo_pesca'] = $_POST['tipoPesca'];
       $post_data['descripcion'] = $_POST['descripcion'];
     
       $post_data['usuario_id'] = $_POST['usuario'];

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
