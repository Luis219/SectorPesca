<?php
     include_once '../../clases/conexion.php';

    if (isset($_POST['submit'])) {
       $post_data = array();
      
       $post_data['barco_id'] = $_POST['barco']; 
       $post_data['nombres'] = $_POST['nombres'];
       $post_data['cedula'] = $_POST['cedula'];
       $post_data['correo'] = $_POST['correo'];

       if (($post_data['barco_id']=="")||($post_data['nombres']=="")||($post_data['cedula']=="")||($post_data['correo']=="")) {
            echo "<div class='alert alert-danger'>Campos vacios! </div>";
        }else {
            $tripulante->insertOne($post_data);
            header("Refresh:0");
        }

       

       $post_data = array();
       $_POST = array();
       
    }
?>
