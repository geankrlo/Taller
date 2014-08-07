<?php

class Usuario
{
    private $id;
    private $usuario;    
    private $password;
    
     function __construct($id, $usuario, $password) {
       $this->id = $id;
       $this->usuario = $usuario;       
       $this->password = $password;
     }
    
     function setId($id){
       $this->id = $id;
     } 
     function getId(){
       return $this->id;
     } 
     function setUsuario($usuario){
       $this->usuario = $usuario;
     } 
     function getUsuario(){
       return $this->usuario;
     }  
     function setPassword($password){
       $this->usuario = $usuario;
     } 
     function getPassword(){
       return $this->password;
     } 
}

?> 
