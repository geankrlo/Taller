<?php
include_once("UsuarioCollector.php");

$id =1;

$UsuarioCollectorObj = new UsuarioCollector();

foreach ($UsuarioCollectorObj->showDemos() as $c){
  echo "<div>";
  echo $c->getId() . "  | " .$c->getUsuario() . "  | " .$c->getPassword();                                     
  echo "</div>"; 
}


?>
