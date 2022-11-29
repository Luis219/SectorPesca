<?php
    include_once '../../clases/conexion.php';


    if (isset($_POST['submit'])) {
       $post_data = array();
      
       $post_data['nombre'] = $_POST['txtNombre']; 
       $post_data['matricula'] = $_POST['txtMatricula'];
       $post_data['tonelaje'] = $_POST['txtTonelaje'];

       if (($post_data['nombre']=="")||($post_data['matricula']=="")||($post_data['tonelaje']=="")) {
            echo "<div class='alert alert-danger'>Campos vacios! </div>";
        }else {
            $barcos->insertOne($post_data);
            header("Refresh:0");
        }

       

       $post_data = array();
       $_POST = array();
       
    }
?>