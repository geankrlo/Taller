<?php

include_once('Usuario.php');
include_once('Collector.php');

class UsuarioCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM usuario");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'id'},$c{'usuario'},$c{'password'});
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }

}
?>

