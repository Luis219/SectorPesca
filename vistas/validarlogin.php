<?php
  include_once '../clases/conexion.php';
  if(isset( $_POST['usuario']) &&  isset( $_POST['contrasenia'])){
    $cursor = $usuarios->findOne(array('user' => $_POST['usuario'],'contraseña' => $_POST['contrasenia'] ));
    $idusuario=$cursor['_id'];
 


    $usuariorol=$usuariosRoles->findOne(['usuarios_id' => (string)$idusuario]);
    $idusuariorol=$usuariorol['roles_id'];

    $rol=$roles->findOne(['_id' => new MongoDB\BSON\ObjectId ($idusuariorol)]);


    
if($cursor==TRUE){
    session_start();
    $_SESSION['id']=$cursor['_id'];
   
    $_SESSION['usuario']=$cursor['user'];
    
    $_SESSION['name']=$rol['descripcion'];
   

    header('location: /sectorpesquero/vistas/barco/barcoVista.php ');

    r_print( $_SESSION['rol']);
    r_print( $_SESSION['usuariorol']);
    
}else{
    header('location: /sectorpesquero/vistas/login.php ');
}


  }


?>