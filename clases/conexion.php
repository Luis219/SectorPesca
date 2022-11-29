  <?php

  require_once $_SERVER['DOCUMENT_ROOT'].'/SectorPesquero/vendor/autoload.php';
  
  // Creo un alias del namespace
  use MongoDB\Client as Mongo;
  
  // Crea una instancia del driver MongoDB
  $mongo= new Mongo("mongodb://localhost:27017");
  
  // Selecciona la base de datos llamada "proyectosectorPesquero"
  $dbSectorPesquero = $mongo->proyectosectorPesquero;
  
  // Selecciona la colección llamada "usuarios" de la base de datos "proyectosectorPesquero"
  $barcos = $dbSectorPesquero->barcos;
  $usuarios =$dbSectorPesquero->usuarios;
  $pesca =$dbSectorPesquero->pesca;
  $tripulante =$dbSectorPesquero->tripulante;
  

  ?>

